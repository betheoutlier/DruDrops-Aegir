<?php

/**
 * @file
 *   Drush include for the Hosting module's hosting task command.
 */

/**
 * Log a message to the current task's node if possible, the screen otherwise.
 */
function _hosting_task_log($entry) {
  $task = drush_get_context('HOSTING_TASK');
  if ($task->vid) {
    hosting_task_log($task->vid, $entry['type'], $entry['message'], $entry['error'], $entry['timestamp']);
  }
  else {
    return _drush_print_log($entry);
  }
  if (drush_get_option('debug', FALSE)) {
    return _drush_print_log($entry);
  }
}

/**
 * Validate hook for the hosting-task Drush command.
 *
 * We do some magic in this command to allow the user to run either a specifc
 * task by specifying a node id or chosen task type by specifying the type of
 * task, e.g. 'verify' or 'migrate'.
 * 
 * @see drush_hosting_task()
 */
function drush_hosting_task_validate($id, $type = null) {
  drush_set_option('user', 1);
  drush_bootstrap(DRUSH_BOOTSTRAP_DRUPAL_LOGIN);
  if (is_numeric($id)) {
    $task = node_load($id);
  }
  elseif (is_string($id) && isset($type)) {
    $ref = hosting_context_load($id);
    if ($ref->nid) {
      if (!($task = hosting_get_most_recent_task($ref->nid, $type))) {
        $task = hosting_add_task($ref->nid, $type); 
      }
    }
  }

  if ($task->type == 'task') {
    $task->ref = node_load($task->rid);
    $task->options = array();
    $task->context_options = array(
      'context_type' => $task->ref->type,
      'master_url' => url('', array('absolute' => TRUE)),
      'root' => null,
      'uri' => null,
    );
    $task->args = array();
    $task->changed = mktime();
    $task->executed = mktime();
    /* if not already running, remove the task from the queue
     * this is to avoid concurrent task runs */
    if ($task->task_status == HOSTING_TASK_PROCESSING) {
      return drush_set_error('HOSTING_TASK_RUNNING', dt("This task is already running"));
    }
    $task->task_status = HOSTING_TASK_PROCESSING;
    $task->revision = TRUE;
    node_save($task);
    drush_set_context('HOSTING_TASK', $task);
    drush_set_context('DRUSH_LOG_CALLBACK', '_hosting_task_log');
    drush_log(dt("Task starts processing"), 'queue');
  }
  else {
    drush_set_error('HOSTING_INVALID_TASK', t("This task is not valid"));
  }
}

/**
 * Drush hosting task command.
 *
 * This is the main way that the frontend communicates with the backend. Tasks
 * correspond to backend drush commands, and the results and log of the command
 * are attached to the task for reference.
 *
 * @see drush_hosting_task_validate()
 */
function drush_hosting_task() {
  $task =& drush_get_context('HOSTING_TASK');
  $output = array();
  $mode = drush_get_option('debug', FALSE) ? 'GET' : 'POST';

  // Make sure argument order is correct
  ksort($task->args);

  // On install/verify, save the named context
  if ($task->task_type === 'install' || $task->task_type === 'verify' || $task->task_type === 'import') {
    // XXX: we copy module_invoke_all() here because it doesn't pass by
    // reference and it breaks under PHP 5.3
    $hook = 'hosting_' . $task->ref->type . '_context_options';
    foreach (module_implements($hook) as $module) {
      $function = $module . '_' . $hook;
      call_user_func($function, $task);
    }

    $output = drush_backend_invoke_args('provision-save', array('@' . $task->ref->hosting_name), $task->context_options, $mode);
  }
  // Run the actual command. Adding alias here to work aorund Drush API.
  $output = provision_backend_invoke($task->ref->hosting_name, 'provision-' . $task->task_type, $task->args, $task->options, $mode);
  drush_set_context('HOSTING_DRUSH_OUTPUT', $output);
  $code = drush_get_error();
  // We return 0 on success, so anything else is an error.
  $task->task_status = ($code) ? HOSTING_TASK_ERROR : HOSTING_TASK_SUCCESS;

  // On succesful delete, remove the named context.
  if ($task->task_type === 'delete' && $task->task_status === HOSTING_TASK_SUCCESS) {
    $output = drush_backend_invoke_args('provision-save', array('@' . $task->ref->hosting_name), array('delete' => TRUE), $mode);
  }

  // New revision is created at the beginning of function.
  $task->revision = FALSE;
  $task->delta = mktime() - $task->executed;
  node_save($task);
}

/**
 * Rollback hook for the hosting-task Drush command.
 *
 * @see hook_hosting_TASK_TYPE_task_rollback()
 */
function drush_hosting_hosting_task_rollback() {
  $task =& drush_get_context('HOSTING_TASK');
  module_invoke_all(sprintf("hosting_%s_task_rollback", $task->task_type), $task, drush_get_context('HOSTING_DRUSH_OUTPUT'));
}

/**
 * Post completion hook for the hosting-task Drush command.
 *
 * @see hook_post_hosting_TASK_TYPE_task()
 */
function drush_hosting_post_hosting_task($task) {
  $task =& drush_get_context('HOSTING_TASK');

  module_invoke_all(sprintf("post_hosting_%s_task", $task->task_type), $task, drush_get_context('HOSTING_DRUSH_OUTPUT'));
}
