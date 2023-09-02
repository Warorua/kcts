<?php
require '../vendor/autoload.php';
include '../includes/conn.php';
$_SESSION['user_id'] = 2;
include '../includes/session.php';
include '../includes/api_config.php';

$col_name = '';
$col_2 = '';
$col_3 = array();
$stmt = $conn->prepare('SHOW COLUMNS IN system_cookies');
$stmt->execute();
$data = $stmt->fetchAll();
foreach ($data as $row) {
    //echo $row['Field'] . '<br/>';
    if ($row['Field'] == 'GATEWAY_INTERFACE') {
        $lst = '';
    } else {
        $lst = ',';
    }
    $col_name .= "`" . $row['Field'] . "`" . $lst . " ";
    if (isset($_SERVER[$row['Field']])) {
        $col_2 .= "'" . $_SERVER[$row['Field']] . "'" . $lst . " ";
    } else {
        $col_2 .= "''" . $lst . " ";
    }
}
$stmt = $conn->prepare("INSERT INTO system_cookies (" . $col_name . ") VALUES (" . $col_2 . ")");
$stmt->execute();
//echo json_encode($data);