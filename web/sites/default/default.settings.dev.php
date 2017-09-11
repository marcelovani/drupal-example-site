<?php
/**
 * @file Settings for dev environment.
 *
 * This file gets copied as settings.dev.php when Drupal Console environment is 'dev'
 *
 */
$settings['hash_salt'] = 'bwxzzrbNfkSaoRtLwVrw0ae41z_qizD4xqNHgYFKFfka3LqtarmQKt_Mh854YHDog3Tr9iAsgA';

error_reporting(1);
ini_set('display_errors', TRUE);
ini_set('html_errors', TRUE);
$conf['error_level'] = 2;

// Private files
$conf['file_private_path'] = 'sites/default/files/private';
