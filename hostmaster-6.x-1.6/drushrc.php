<?php 


$options['sites'] = array (
  0 => 'drudrops',
);
$options['profiles'] = array (
  0 => 'default',
  1 => 'hostmaster',
);
$options['packages'] = array (
  'base' => 
  array (
    'modules' => 
    array (
      'blogapi' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/blogapi/blogapi.module',
        'basename' => 'blogapi.module',
        'name' => 'blogapi',
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
        'schema_version' => '6001',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'user' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/user/user.module',
        'basename' => 'user.module',
        'name' => 'user',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'dblog' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/dblog/dblog.module',
        'basename' => 'dblog.module',
        'name' => 'dblog',
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
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'throttle' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/throttle/throttle.module',
        'basename' => 'throttle.module',
        'name' => 'throttle',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'ping' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/ping/ping.module',
        'basename' => 'ping.module',
        'name' => 'ping',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'help' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/help/help.module',
        'basename' => 'help.module',
        'name' => 'help',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'book' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/book/book.module',
        'basename' => 'book.module',
        'name' => 'book',
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
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'filter' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/filter/filter.module',
        'basename' => 'filter.module',
        'name' => 'filter',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'node' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/node/node.module',
        'basename' => 'node.module',
        'name' => 'node',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'aggregator' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/aggregator/aggregator.module',
        'basename' => 'aggregator.module',
        'name' => 'aggregator',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'contact' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/contact/contact.module',
        'basename' => 'contact.module',
        'name' => 'contact',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'menu' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/menu/menu.module',
        'basename' => 'menu.module',
        'name' => 'menu',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'tracker' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/tracker/tracker.module',
        'basename' => 'tracker.module',
        'name' => 'tracker',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'color' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/color/color.module',
        'basename' => 'color.module',
        'name' => 'color',
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
        'schema_version' => '6001',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'openid' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/openid/openid.module',
        'basename' => 'openid.module',
        'name' => 'openid',
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
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'blog' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/blog/blog.module',
        'basename' => 'blog.module',
        'name' => 'blog',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'poll' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/poll/poll.module',
        'basename' => 'poll.module',
        'name' => 'poll',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'update' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/update/update.module',
        'basename' => 'update.module',
        'name' => 'update',
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
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'locale' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/locale/locale.module',
        'basename' => 'locale.module',
        'name' => 'locale',
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
        'schema_version' => '6006',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'translation' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/translation/translation.module',
        'basename' => 'translation.module',
        'name' => 'translation',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'forum' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/forum/forum.module',
        'basename' => 'forum.module',
        'name' => 'forum',
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
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'block' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/block/block.module',
        'basename' => 'block.module',
        'name' => 'block',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'path' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/path/path.module',
        'basename' => 'path.module',
        'name' => 'path',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'trigger' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/trigger/trigger.module',
        'basename' => 'trigger.module',
        'name' => 'trigger',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'syslog' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/syslog/syslog.module',
        'basename' => 'syslog.module',
        'name' => 'syslog',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'system' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/system/system.module',
        'basename' => 'system.module',
        'name' => 'system',
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
        'schema_version' => '6055',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'php' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/php/php.module',
        'basename' => 'php.module',
        'name' => 'php',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'profile' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/profile/profile.module',
        'basename' => 'profile.module',
        'name' => 'profile',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'statistics' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/statistics/statistics.module',
        'basename' => 'statistics.module',
        'name' => 'statistics',
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
        'schema_version' => '6000',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'comment' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/comment/comment.module',
        'basename' => 'comment.module',
        'name' => 'comment',
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
        'schema_version' => '6003',
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'search' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/search/search.module',
        'basename' => 'search.module',
        'name' => 'search',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'taxonomy' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/taxonomy/taxonomy.module',
        'basename' => 'taxonomy.module',
        'name' => 'taxonomy',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'upload' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/modules/upload/upload.module',
        'basename' => 'upload.module',
        'name' => 'upload',
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
        'schema_version' => 0,
        'project' => 'drupal',
        'version' => '6.22',
      ),
    ),
    'themes' => 
    array (
      'marvin' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/chameleon/marvin/marvin.info',
        'basename' => 'marvin.info',
        'name' => 'Marvin',
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
        ),
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'chameleon' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/chameleon/chameleon.info',
        'basename' => 'chameleon.info',
        'name' => 'Chameleon',
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
        ),
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'pushbutton' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/pushbutton/pushbutton.info',
        'basename' => 'pushbutton.info',
        'name' => 'Pushbutton',
        'info' => 
        array (
          'name' => 'Pushbutton',
          'description' => 'Tabled, multi-column theme in blue and orange tones.',
          'version' => '6.22',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1306357015',
        ),
        'owner' => '/var/aegir/hostmaster-6.x-1.6/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'minnelli' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/garland/minnelli/minnelli.info',
        'basename' => 'minnelli.info',
        'name' => 'Minnelli',
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
        ),
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'garland' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/garland/garland.info',
        'basename' => 'garland.info',
        'name' => 'Garland',
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
        ),
        'owner' => '/var/aegir/hostmaster-6.x-1.6/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.22',
      ),
      'bluemarine' => 
      array (
        'filename' => '/var/aegir/hostmaster-6.x-1.6/themes/bluemarine/bluemarine.info',
        'basename' => 'bluemarine.info',
        'name' => 'Bluemarine',
        'info' => 
        array (
          'name' => 'Bluemarine',
          'description' => 'Table-based multi-column theme with a marine and ash color scheme.',
          'version' => '6.22',
          'core' => '6.x',
          'engine' => 'phptemplate',
          'project' => 'drupal',
          'datestamp' => '1306357015',
        ),
        'owner' => '/var/aegir/hostmaster-6.x-1.6/themes/engines/phptemplate/phptemplate.engine',
        'prefix' => 'phptemplate',
        'template' => true,
        'project' => 'drupal',
        'version' => '6.22',
      ),
    ),
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
      'default' => 
      array (
        'name' => 'default',
        'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/default/default.profile',
        'project' => '',
        'info' => 
        array (
          'name' => 'Drupal',
          'description' => 'Select this profile to enable some basic Drupal functionality and the default theme.',
          'languages' => 
          array (
            0 => 'en',
          ),
          'version' => NULL,
        ),
        'version' => '6.22',
      ),
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
      ),
    ),
  ),
  'profiles' => 
  array (
    'default' => 
    array (
      'modules' => 
      array (
      ),
      'themes' => 
      array (
      ),
    ),
    'hostmaster' => 
    array (
      'modules' => 
      array (
        'jquery_ui' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/jquery_ui/jquery_ui.module',
          'basename' => 'jquery_ui.module',
          'name' => 'jquery_ui',
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
          'schema_version' => 0,
          'project' => 'jquery_ui',
          'version' => '6.x-1.3',
        ),
        'admin_menu' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/admin_menu/admin_menu.module',
          'basename' => 'admin_menu.module',
          'name' => 'admin_menu',
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
          'schema_version' => '6001',
          'project' => 'admin_menu',
          'version' => '6.x-1.8',
        ),
        'openidadmin' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/openidadmin/openidadmin.module',
          'basename' => 'openidadmin.module',
          'name' => 'openidadmin',
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
          'schema_version' => 0,
          'project' => 'openidadmin',
          'version' => '6.x-1.2',
        ),
        'hosting_example' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/example/hosting_example.module',
          'basename' => 'hosting_example.module',
          'name' => 'hosting_example',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_web_cluster' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_cluster/hosting_web_cluster.module',
          'basename' => 'hosting_web_cluster.module',
          'name' => 'hosting_web_cluster',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_server' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/server/hosting_server.module',
          'basename' => 'hosting_server.module',
          'name' => 'hosting_server',
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
          'schema_version' => '6005',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_quota' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/quota/hosting_quota.module',
          'basename' => 'hosting_quota.module',
          'name' => 'hosting_quota',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_migrate' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/migrate/hosting_migrate.module',
          'basename' => 'hosting_migrate.module',
          'name' => 'hosting_migrate',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_task' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/task/hosting_task.module',
          'basename' => 'hosting_task.module',
          'name' => 'hosting_task',
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
          'schema_version' => '6005',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_client' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/client/hosting_client.module',
          'basename' => 'hosting_client.module',
          'name' => 'hosting_client',
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
          'schema_version' => '6002',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_dns' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/dns/hosting_dns.module',
          'basename' => 'hosting_dns.module',
          'name' => 'hosting_dns',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_signup' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/signup/hosting_signup.module',
          'basename' => 'hosting_signup.module',
          'name' => 'hosting_signup',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_clone' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/clone/hosting_clone.module',
          'basename' => 'hosting_clone.module',
          'name' => 'hosting_clone',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_platform' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/platform/hosting_platform.module',
          'basename' => 'hosting_platform.module',
          'name' => 'hosting_platform',
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
          'schema_version' => '6004',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_ssl' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/ssl/hosting_ssl.module',
          'basename' => 'hosting_ssl.module',
          'name' => 'hosting_ssl',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_nginx_ssl' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/nginx/ssl/hosting_nginx_ssl.module',
          'basename' => 'hosting_nginx_ssl.module',
          'name' => 'hosting_nginx_ssl',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_nginx' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/nginx/hosting_nginx.module',
          'basename' => 'hosting_nginx.module',
          'name' => 'hosting_nginx',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting_web_server' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/web_server/hosting_web_server.module',
          'basename' => 'hosting_web_server.module',
          'name' => 'hosting_web_server',
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
          'schema_version' => '6002',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_db_server' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/db_server/hosting_db_server.module',
          'basename' => 'hosting_db_server.module',
          'name' => 'hosting_db_server',
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
          'schema_version' => '6001',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_site' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/site/hosting_site.module',
          'basename' => 'hosting_site.module',
          'name' => 'hosting_site',
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
          'schema_version' => '6008',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_alias' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/alias/hosting_alias.module',
          'basename' => 'hosting_alias.module',
          'name' => 'hosting_alias',
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
          'schema_version' => '2',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_package' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/package/hosting_package.module',
          'basename' => 'hosting_package.module',
          'name' => 'hosting_package',
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
          'schema_version' => '6006',
          'project' => '',
          'version' => NULL,
        ),
        'hosting_cron' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/cron/hosting_cron.module',
          'basename' => 'hosting_cron.module',
          'name' => 'hosting_cron',
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
          'schema_version' => 0,
          'project' => '',
          'version' => NULL,
        ),
        'hosting' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/hosting/hosting.module',
          'basename' => 'hosting.module',
          'name' => 'hosting',
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
          'schema_version' => '6014',
          'project' => '',
          'version' => NULL,
        ),
        'modalframe_example' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/modalframe/modules/modalframe_example/modalframe_example.module',
          'basename' => 'modalframe_example.module',
          'name' => 'modalframe_example',
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
          'schema_version' => 0,
          'project' => 'modalframe',
          'version' => '6.x-1.6',
        ),
        'modalframe' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/modalframe/modalframe.module',
          'basename' => 'modalframe.module',
          'name' => 'modalframe',
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
          'schema_version' => 0,
          'project' => 'modalframe',
          'version' => '6.x-1.6',
        ),
        'install_profile_api' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/modules/install_profile_api/install_profile_api.module',
          'basename' => 'install_profile_api.module',
          'name' => 'install_profile_api',
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
          'schema_version' => 0,
          'project' => 'install_profile_api',
          'version' => '6.x-2.1',
        ),
      ),
      'themes' => 
      array (
        'eldir' => 
        array (
          'filename' => '/var/aegir/hostmaster-6.x-1.6/profiles/hostmaster/themes/eldir/eldir.info',
          'basename' => 'eldir.info',
          'name' => 'Eldir',
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
          ),
          'project' => '',
          'version' => '6.22',
        ),
      ),
    ),
  ),
);