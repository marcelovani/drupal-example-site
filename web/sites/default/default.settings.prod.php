<?php
/**
 * @file Settings for dev environment.
 *
 * This file gets copied as settings.dev.php when Drupal Console environment is 'prod'
 *
 */
$settings['hash_salt'] = 'bwxzzrbNfkSaoRtLwVrw0ae41z_qizD4xqNHgYFKFfka3LqtarmQKt_Mh854YHDog3Tr9iAsgA';

// Errors.
error_reporting(0);
ini_set('display_errors', FALSE);
ini_set('html_errors', FALSE);
$conf['error_level'] = 0;
