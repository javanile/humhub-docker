<?php return array (
  'components' => 
  array (
    'db' => 
    array (
      'class' => 'yii\\db\\Connection',
      'dsn' => 'pgsql:host=db;dbname=humhub',
      'username' => 'humhub',
      'password' => 'Secret.1234',
      'schemaMap' => 
      array (
        'pgsql' => 
        array (
          'class' => 'yii\\db\\pgsql\\Schema',
          'defaultSchema' => 'public',
        ),
      ),
    ),
    'user' => 
    array (
    ),
    'mailer' => 
    array (
      'transport' => 
      array (
        'class' => 'Swift_MailTransport',
      ),
    ),
    'cache' => 
    array (
      'class' => 'yii\\caching\\FileCache',
      'keyPrefix' => 'humhub',
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => 'db',
        'installer_database' => 'humhub',
      ),
    ),
    'config_created_at' => 1652982295,
    'horImageScrollOnMobile' => '1',
    'databaseInstalled' => true,
    'installed' => true,
  ),
  'name' => 'HumHub',
  'language' => 'it',
); ?>