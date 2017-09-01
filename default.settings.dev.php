<?php
/**
 * @file Settings for dev environment.
 *
 * This file gets copied as settings.dev.php when Drupal Console environment is 'dev'
 *
 */

error_reporting(1);
ini_set('display_errors', TRUE);
ini_set('html_errors', TRUE);
$conf['error_level'] = 2;

$conf['stage_file_proxy_hotlink'] = 0;
$conf['stage_file_proxy_origin'] = 'http://csvconverter.biz';
$conf['stage_file_proxy_origin_dir'] = 'sites/csvconverter/files';
$conf['stage_file_proxy_use_imagecache_root'] = 0;

// Private files
$conf['file_private_path'] = 'sites/default/files/private';
