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

if (isset($_POST)) {
    echo json_encode($_POST);
}

$_SESSION['filess'] =  $_FILES;

if (isset($_FILES['file']['name'])) {


  if (isset($_SESSION['tweetMedia'])) {
    $_SESSION['tweetMedia'] = $_SESSION['tweetMedia'];
  } else {
    $_SESSION['tweetMedia'] = [];
  }

  $photo = $_FILES['file']['name'];
  $photo_path = realpath($_FILES['file']['name']);

  $ext = pathinfo($photo, PATHINFO_EXTENSION);
  $time_id = time();
  $the_id = sha1($time_id);
  $new_filename = $the_id . '.' . $ext;
  $file_path = $file_path.'assets/uploads/' . $new_filename;

  move_uploaded_file($_FILES['file']['tmp_name'], $file_path);
  $filename = $new_filename;

  $media1 = $abraham_client->upload('media/upload', ['media' => $file_path]);
  array_push($_SESSION['tweetMedia'], $media1->media_id_string);
  unlink($file_path);
}



if(!isset($_FILES['file']['name'])) {

    // Extracting values into PHP variables
$project_type = $_POST['project_type'];
$settings_customer = $_POST['settings_customer'];
$settings_name = $_POST['settings_name'];
$settings_description = $_POST['settings_description'];
$settings_release_date = $_POST['settings_release_date'];
$settings_notifications = $_POST['settings_notifications'];
$budget_setup = $_POST['budget_setup'];
$budget_usage = $_POST['budget_usage'];
$budget_allow = $_POST['budget_allow'];
$invite_teammates = "";
$sub_county = $_POST['sub_county'];

$project_Launch = $_POST['Project_Launch'];
$target_assign = $_POST['target_assign'];
$target_due_date = $_POST['target_due_date'];
$target_details = $_POST['target_details'];
$target_tags = json_encode($_POST['target_tags']); // Parse nested JSON
$target_allow = $_POST['target_allow'];
$target_notifications = $_POST['target_notifications'];

$created_by = $user['id'];

$stmt = $conn->prepare("INSERT INTO projects (
     settings_name,
     settings_customer,
      project_type,
      settings_description,
       settings_release_date,
       sub_county,
       budget_setup,
       budget_usage,
       budget_allow,
       invite_teammates,
       created_by
       ) VALUES (
        :settings_name,
        :settings_customer,
        :project_type,
      :settings_description,
       :settings_release_date,
       :sub_county,
       :budget_setup,
       :budget_usage,
       :budget_allow,
       :invite_teammates,
       :created_by
       )");
$stmt->execute([
    "settings_name" => $settings_name,
    "settings_customer"=>$settings_customer,
    "project_type" => $project_type,
    "settings_description" => $settings_description,
    "settings_release_date" => $settings_release_date,
    "sub_county" => $sub_county,
    "budget_setup" => $budget_setup,
    "budget_usage" => $budget_usage,
    "budget_allow" => $budget_allow,
    "invite_teammates" => $invite_teammates,
    "created_by"=>$created_by
]);
$projectid = $conn->lastInsertId();

$stmt = $conn->prepare("INSERT INTO milestones (
    project_id,
    Project_Launch,
    target_assign,
    target_due_date,
    target_details,
    target_tags,
    target_allow,
    target_notifications
       ) VALUES (
        :project_id,
    :Project_Launch,
    :target_assign,
    :target_due_date,
    :target_details,
    :target_tags,
    :target_allow,
    :target_notifications
       )");
$stmt->execute([
    "project_id" => $projectid,
    "Project_Launch" => $project_Launch,
    "target_assign" => $target_assign,
    "target_due_date" => $target_due_date,
    "target_details" => $target_details,
    "target_tags" => $target_tags,
    "target_allow" => $target_allow,
    "target_notifications" => $target_notifications[0]
]);
$milestoneid = $conn->lastInsertId();

$_SESSION['success'] = 'Project Successfully Created!';
header('location: '.$filePath.'project/overview/'.$projectid);

}
