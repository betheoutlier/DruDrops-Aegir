<?php 


$options['db_type'] = 'mysqli';
$options['db_host'] = 'localhost';
$options['db_port'] = 3306;
$options['db_passwd'] = '5wREbTK6ot';
$options['db_name'] = 'drudrops';
$options['db_user'] = 'drudrops';
$options['site_ip_addresses'] = array (
  '@server_master' => '127.0.0.1',
);
$options['installed'] = true;
$options['packages'] = array (
  'platforms' => 
  array (
    'drupal' => 
    array (
      'short_name' => 'drupal',
      'version' => '6.22',
      'description' => 'This platform is running Drupal 6.22',
    ),
  ),
  'profiles' => 
  array (
    'hostmaster' => 
    array (
      'name' => 'hostmaster',
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/hostmaster.profile',
      'project' => '',
      'info' => 
      array (
        'name' => 'Hostmaster',
        'description' => 'Select this profile to manage the installation and maintenance of hosted Drupal sites.',
        'languages' => 
        array (
          0 => 'en',
        ),
        'version' => NULL,
      ),
      'version' => '6.22',
      'status' => 1,
    ),
  ),
  'modules' => 
  array (
    'aggregator' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/aggregator/aggregator.module',
      'name' => 'aggregator',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Aggregator',
        'description' => 'Aggregates syndicated content (RSS, RDF, and Atom feeds).',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'blog' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/blog/blog.module',
      'name' => 'blog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog',
        'description' => 'Enables keeping easily and regularly updated user web pages or blogs.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'blogapi' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/blogapi/blogapi.module',
      'name' => 'blogapi',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Blog API',
        'description' => 'Allows users to post content using applications that support XML-RPC blog APIs.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'book' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/book/book.module',
      'name' => 'book',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Book',
        'description' => 'Allows users to structure site pages in a hierarchy or outline.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'comment' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/comment/comment.module',
      'name' => 'comment',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Comment',
        'description' => 'Allows users to comment on and discuss published content.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'contact' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/contact/contact.module',
      'name' => 'contact',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Contact',
        'description' => 'Enables the use of both personal and site-wide contact forms.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'dblog' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/dblog/dblog.module',
      'name' => 'dblog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database logging',
        'description' => 'Logs and records system events to the database.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'forum' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/forum/forum.module',
      'name' => 'forum',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Forum',
        'description' => 'Enables threaded discussions about general topics.',
        'dependencies' => 
        array (
          0 => 'taxonomy',
          1 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'locale' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/locale/locale.module',
      'name' => 'locale',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Locale',
        'description' => 'Adds language handling functionality and enables the translation of the user interface to languages other than English.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'openid' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/openid/openid.module',
      'name' => 'openid',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID',
        'description' => 'Allows users to log into your site using OpenID.',
        'version' => '6.22',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'path' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/path/path.module',
      'name' => 'path',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Path',
        'description' => 'Allows users to rename URLs.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'php' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/php/php.module',
      'name' => 'php',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'PHP filter',
        'description' => 'Allows embedded PHP code/snippets to be evaluated.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'ping' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/ping/ping.module',
      'name' => 'ping',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Ping',
        'description' => 'Alerts other sites when your site has been updated.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'poll' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/poll/poll.module',
      'name' => 'poll',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Poll',
        'description' => 'Allows your site to capture votes on different topics in the form of multiple choice questions.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'profile' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/profile/profile.module',
      'name' => 'profile',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Profile',
        'description' => 'Supports configurable user profiles.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'search' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/search/search.module',
      'name' => 'search',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Search',
        'description' => 'Enables site-wide keyword searching.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'statistics' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/statistics/statistics.module',
      'name' => 'statistics',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Statistics',
        'description' => 'Logs access statistics for your site.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'syslog' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/syslog/syslog.module',
      'name' => 'syslog',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Syslog',
        'description' => 'Logs and records system events to syslog.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'taxonomy' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/taxonomy/taxonomy.module',
      'name' => 'taxonomy',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Taxonomy',
        'description' => 'Enables the categorization of content.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'throttle' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/throttle/throttle.module',
      'name' => 'throttle',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Throttle',
        'description' => 'Handles the auto-throttling mechanism, to control site congestion.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'tracker' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/tracker/tracker.module',
      'name' => 'tracker',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Tracker',
        'description' => 'Enables tracking of recent posts for users.',
        'dependencies' => 
        array (
          0 => 'comment',
        ),
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'translation' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/translation/translation.module',
      'name' => 'translation',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Content translation',
        'description' => 'Allows content to be translated into different languages.',
        'dependencies' => 
        array (
          0 => 'locale',
        ),
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'trigger' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/trigger/trigger.module',
      'name' => 'trigger',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Trigger',
        'description' => 'Enables actions to be fired on certain system events, such as when new content is created.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'update' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/update/update.module',
      'name' => 'update',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Update status',
        'description' => 'Checks the status of available updates for Drupal and your installed modules and themes.',
        'version' => '6.22',
        'package' => 'Core - optional',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'upload' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/upload/upload.module',
      'name' => 'upload',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Upload',
        'description' => 'Allows users to upload and attach files to content.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'hosting_alias' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/alias/hosting_alias.module',
      'name' => 'hosting_alias',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site aliases',
        'description' => 'Maintain domain aliases for sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_dns' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/dns/hosting_dns.module',
      'name' => 'hosting_dns',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'DNS support',
        'description' => 'Manage DNS records for your hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_example' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/example/hosting_example.module',
      'name' => 'hosting_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting example',
        'description' => 'Contains example implementations of the Hosting API.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_quota' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/quota/hosting_quota.module',
      'name' => 'hosting_quota',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client Quota',
        'description' => 'Allow Hostmaster to configure quotas.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_client',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_signup' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/signup/hosting_signup.module',
      'name' => 'hosting_signup',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Signup form',
        'description' => 'A simple signup form that allows users to sign up for a new site.',
        'package' => 'Hosting',
        'core' => '6.x',
        'dependencies' => 
        array (
        ),
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_web_cluster' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_cluster/hosting_web_cluster.module',
      'name' => 'hosting_web_cluster',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Cluster',
        'description' => 'Allow hostmaster to configure web clusters.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_nginx' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/nginx/hosting_nginx.module',
      'name' => 'hosting_nginx',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx servers',
        'description' => 'Allow hostmaster to configure NGINX web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_nginx_ssl' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
      'name' => 'hosting_nginx_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Nginx +SSL servers',
        'description' => 'Allow hostmaster to configure NGINX web servers with SSL support.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting_web_server',
          1 => 'hosting_ssl',
          2 => 'hosting_nginx',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_ssl' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/ssl/hosting_ssl.module',
      'name' => 'hosting_ssl',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'SSL support',
        'description' => 'Allow hostmaster to configure web servers with SSL support',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'modalframe_example' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/modalframe/modules/modalframe_example/modalframe_example.module',
      'name' => 'modalframe_example',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modal Frame Example',
        'description' => 'Example for the Modal Frame API.',
        'package' => 'Modal frame',
        'dependencies' => 
        array (
          0 => 'modalframe',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'modalframe',
        'datestamp' => '1262442355',
        'php' => '4.3.5',
      ),
      'project' => 'modalframe',
      'version' => '6.x-1.6',
    ),
    'openidadmin' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/openidadmin/openidadmin.module',
      'name' => 'openidadmin',
      'type' => 'module',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'OpenID Admin',
        'description' => 'Allows bulk operations for OpenID administration.',
        'dependencies' => 
        array (
          0 => 'openid',
        ),
        'core' => '6.x',
        'version' => '6.x-1.2',
        'project' => 'openidadmin',
        'datestamp' => '1266434108',
        'php' => '4.3.5',
      ),
      'project' => 'openidadmin',
      'version' => '6.x-1.2',
    ),
    'block' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/block/block.module',
      'name' => 'block',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Block',
        'description' => 'Controls the boxes that are displayed around the main content.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'color' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/color/color.module',
      'name' => 'color',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Color',
        'description' => 'Allows the user to change the color scheme of certain themes.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'filter' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/filter/filter.module',
      'name' => 'filter',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Filter',
        'description' => 'Handles the filtering of content in preparation for display.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'help' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/help/help.module',
      'name' => 'help',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Help',
        'description' => 'Manages the display of online help.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'menu' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/menu/menu.module',
      'name' => 'menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Menu',
        'description' => 'Allows administrators to customize the site navigation menu.',
        'package' => 'Core - optional',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'node' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/node/node.module',
      'name' => 'node',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Node',
        'description' => 'Allows content to be submitted to the site and displayed on pages.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'system' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/system/system.module',
      'name' => 'system',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6055',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'System',
        'description' => 'Handles general site configuration for administrators.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'user' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/user/user.module',
      'name' => 'user',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'User',
        'description' => 'Manages the user registration and login system.',
        'package' => 'Core - required',
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'admin_menu' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/admin_menu/admin_menu.module',
      'name' => 'admin_menu',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '1',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Administration menu',
        'description' => 'Provides a dropdown menu to most administrative tasks and other common destinations (to users with the proper permissions).',
        'package' => 'Administration',
        'core' => '6.x',
        'version' => '6.x-1.8',
        'project' => 'admin_menu',
        'datestamp' => '1308238014',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'admin_menu',
      'version' => '6.x-1.8',
    ),
    'hosting_client' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/client/hosting_client.module',
      'name' => 'hosting_client',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Client',
        'description' => 'Allow Hostmaster to configure clients.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_clone' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/clone/hosting_clone.module',
      'name' => 'hosting_clone',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site cloning',
        'description' => 'Clone sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_migrate',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_cron' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/cron/hosting_cron.module',
      'name' => 'hosting_cron',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting Cron',
        'description' => 'Allow the hosting system to cron all the installed sites on a schedule.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_db_server' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/db_server/hosting_db_server.module',
      'name' => 'hosting_db_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6001',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Database Server',
        'description' => 'Allow Hostmaster to configure database servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/hosting.module',
      'name' => 'hosting',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6014',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting',
        'description' => 'Allow this Drupal site to deploy hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'modalframe',
        ),
        '#dependencies' => 
        array (
          0 => 'hosting_task',
          1 => 'hosting_client',
          2 => 'hosting_db_server',
          3 => 'hosting_package',
          4 => 'hosting_platform',
          5 => 'hosting_site',
          6 => 'hosting_web_server',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_migrate' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/migrate/hosting_migrate.module',
      'name' => 'hosting_migrate',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Site migration',
        'description' => 'Migrate sites between platforms, performing upgrades when necessary.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_site',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_package' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/package/hosting_package.module',
      'name' => 'hosting_package',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6006',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Package management',
        'description' => 'Allow Hostmaster to keep track which packages have been installed.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_platform' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/platform/hosting_platform.module',
      'name' => 'hosting_platform',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6004',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Platforms',
        'description' => 'Allow Hostmaster to keep track of multiple instances of Drupal.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
          1 => 'hosting_package',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_server' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/server/hosting_server.module',
      'name' => 'hosting_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Server',
        'description' => 'Allow hostmaster to configure servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_site' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/site/hosting_site.module',
      'name' => 'hosting_site',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6008',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Sites',
        'description' => 'Allow hostmaster manage hosted sites.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_task' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/task/hosting_task.module',
      'name' => 'hosting_task',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6005',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Hosting tasks',
        'description' => 'Allow Hostmaster to keep track of tasks that have been processed on the servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'hosting_web_server' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/hosting_web_server.module',
      'name' => 'hosting_web_server',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '6002',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Web Server',
        'description' => 'Allow hostmaster to configure web servers.',
        'package' => 'Hosting',
        'dependencies' => 
        array (
          0 => 'hosting',
        ),
        'core' => '6.x',
        'version' => NULL,
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => NULL,
    ),
    'install_profile_api' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/install_profile_api/install_profile_api.module',
      'name' => 'install_profile_api',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Install Profile API',
        'description' => 'Utility functions that help with install profile creation and running',
        'core' => '6.x',
        'version' => '6.x-2.1',
        'project' => 'install_profile_api',
        'datestamp' => '1248302144',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'install_profile_api',
      'version' => '6.x-2.1',
    ),
    'jquery_ui' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/jquery_ui/jquery_ui.module',
      'name' => 'jquery_ui',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'jQuery UI',
        'description' => 'Provides the jQuery UI plug-in to other Drupal modules.',
        'package' => 'User interface',
        'core' => '6.x',
        'version' => '6.x-1.3',
        'project' => 'jquery_ui',
        'datestamp' => '1245556234',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'jquery_ui',
      'version' => '6.x-1.3',
    ),
    'modalframe' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/modalframe/modalframe.module',
      'name' => 'modalframe',
      'type' => 'module',
      'owner' => '',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => '0',
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Modal Frame API',
        'description' => 'Provides an API to render an iframe within a modal dialog based on the jQuery UI Dialog plugin.',
        'package' => 'Modal frame',
        'dependencies' => 
        array (
          0 => 'jquery_ui',
        ),
        'core' => '6.x',
        'version' => '6.x-1.6',
        'project' => 'modalframe',
        'datestamp' => '1262442355',
        'php' => '4.3.5',
      ),
      'project' => 'modalframe',
      'version' => '6.x-1.6',
    ),
  ),
  'themes' => 
  array (
    'bluemarine' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/bluemarine/bluemarine.info',
      'name' => 'bluemarine',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Bluemarine',
        'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'chameleon' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/chameleon/chameleon.info',
      'name' => 'chameleon',
      'type' => 'theme',
      'owner' => 'themes/chameleon/chameleon.theme',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Chameleon',
        'description' => 'Minimalist tabled theme with light colors.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'features' => 
        array (
          0 => 'logo',
          1 => 'favicon',
          2 => 'name',
          3 => 'slogan',
        ),
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
            1 => 'common.css',
          ),
        ),
        'version' => '6.22',
        'core' => '6.x',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'marvin' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/chameleon/marvin/marvin.info',
      'name' => 'marvin',
      'type' => 'theme',
      'owner' => '',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Marvin',
        'description' => 'Boxy tabled theme in all grays.',
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
        ),
        'version' => '6.22',
        'core' => '6.x',
        'base theme' => 'chameleon',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'garland' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/garland/garland.info',
      'name' => 'garland',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Garland',
        'description' => 'Tableless, recolorable, multi-column, fluid width theme (default).',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
          'print' => 
          array (
            0 => 'print.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'minnelli' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/garland/minnelli/minnelli.info',
      'name' => 'minnelli',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Minnelli',
        'description' => 'Tableless, recolorable, multi-column, fixed width theme.',
        'version' => '6.22',
        'core' => '6.x',
        'base theme' => 'garland',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'minnelli.css',
          ),
        ),
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'pushbutton' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/pushbutton/pushbutton.info',
      'name' => 'pushbutton',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '0',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Pushbutton',
        'description' => 'Tabled, multi-column theme in blue and orange tones.',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'project' => 'drupal',
        'datestamp' => '1306357015',
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => 'drupal',
      'version' => '6.22',
    ),
    'eldir' => 
    array (
      'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/themes/eldir/eldir.info',
      'name' => 'eldir',
      'type' => 'theme',
      'owner' => 'themes/engines/phptemplate/phptemplate.engine',
      'status' => '1',
      'throttle' => '0',
      'bootstrap' => '0',
      'schema_version' => 0,
      'weight' => '0',
      'info' => 
      array (
        'name' => 'Eldir',
        'description' => 'Companion theme for the Aegir hosting system.',
        'version' => '6.22',
        'core' => '6.x',
        'engine' => 'phptemplate',
        'stylesheets' => 
        array (
          'all' => 
          array (
            0 => 'style.css',
          ),
        ),
        'regions' => 
        array (
          'left' => 'Left sidebar',
          'right' => 'Right sidebar',
          'content' => 'Content',
          'header' => 'Header',
          'footer' => 'Footer',
        ),
        'dependencies' => 
        array (
        ),
        'php' => '4.3.5',
      ),
      'project' => '',
      'version' => '6.22',
    ),
  ),
);
$options['profile'] = 'hostmaster';
$options['language'] = 'en';
$options['aliases'] = array (
);
# Aegir additions
$_SERVER['db_type'] = $options['db_type'];
$_SERVER['db_port'] = $options['db_port'];
$_SERVER['db_host'] = $options['db_host'];
$_SERVER['db_user'] = $options['db_user'];
$_SERVER['db_passwd'] = $options['db_passwd'];
$_SERVER['db_name'] = $options['db_name'];
