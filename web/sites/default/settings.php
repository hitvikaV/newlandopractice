<?php
$databases = [];
$settings['hash_salt'] = 'utPsVKsQgJwB038uPv7WS1JY3BlsLP1UeuzGCqVgf0-vGcacFApKy9aHdN7M3_67yso78HIDOA';
$settings['update_free_access'] = FALSE;
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
$settings['entity_update_batch_size'] = 50;
$settings['entity_update_backup'] = TRUE;
if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}

;$databases['default']['default'] = array (
  'database' => 'drupal8',
  'username' => 'drupal8',
  'password' => 'drupal8',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['config_sync_directory'] = 'sites/default/files/config_J88sw6uaQ8IiY5t43WZAYOjN17TV_EMmDNRc4_Jwp1aPgCvKj8bcgyYJa_Kec1FBiXAYleMXzQ/sync';
