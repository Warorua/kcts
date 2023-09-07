<?php
$start_time = microtime(true);
if (file_exists('../includes/head.php')) {
    $filePath = '../';
} elseif (file_exists('../../includes/head.php')) {
    $filePath = '../../';
} elseif (file_exists('../../../includes/head.php')) {
    $filePath = '../../../';
} elseif (file_exists('../../../../includes/head.php')) {
    $filePath = '../../../../';
} elseif (file_exists('../../../../../includes/head.php')) {
    $filePath = '../../../../../';
} else {
    $filePath = './';
}

include $filePath . 'includes/conn.php';
include $filePath . 'includes/session.php';
require $filePath . 'vendor/autoload.php';
include $filePath . 'includes/api_config.php';

//echo json_encode(systemUsers());

echo searchEntity(systemUsers(), 19, 'firstname');