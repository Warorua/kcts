<?php
$start_time = microtime(true);
if (file_exists('../dash.php')) {
	$filePath = '../';
} elseif (file_exists('../../dash.php')) {
	$filePath = '../../';
}elseif (file_exists('../../../dash.php')) {
	$filePath = '../../../';
}elseif (file_exists('../../../../dash.php')) {
	$filePath = '../../../../';
}elseif (file_exists('../../../../../dash.php')) {
	$filePath = '../../../../../';
} else {
	$filePath = './';
}

$current_url = "https" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

if (strpos($current_url, "/project/") !== false || strpos($current_url, "/users/") !== false) {
    // "project" is found in the URL
    //echo "true";
	$filePathScript = $filePath.'../';
} else {
    // "project" is not found in the URL
    //echo "false";
	$filePathScript = $filePath;
}


if (isset($_SESSION['user_id'])) {
	$ajax_user_id = $_SESSION['user_id'];
} else {
	$ajax_user_id = 1;
}

?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">
    <title>Project Management System</title>

    <!-- Bootstrap Core CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../asset/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../asset/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- am chart --> 
    <script type="text/javascript" src="../am_chart/amcharts.js"></script>
    <script type="text/javascript" src="../am_chart/pie.js"></script>
    <script type="text/javascript" src="../am_chart/none.js"></script>
    <script type="text/javascript" src="../am_chart/serial.js"></script>
    <script type="text/javascript" src="../am_chart/light.js"></script>
     <script src="../am_chart/jquery.min.js"></script>
     <style>
     .chartdiv a {
      display: none !important;
     }
     .chartdiv {
      background-color: white;
     }
     </style>


    <script src="../assets/js/jquery.min.js"></script>

    <script src="../datatables/jquery.dataTables.js"></script>
    <script src="../datatables/dataTables.bootstrap.js"></script>
    <link href="../datatables/dataTables.bootstrap.css" rel="stylesheet">

    
    <script src="../asset/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <script src="../chosen/chosen.jquery.js"></script>
  <link href="../chosen/chosen.css" rel="stylesheet" media="screen">
  <link href="../asset/css/styles.css" rel="stylesheet">


  <!--end::Vendor Stylesheets-->
</head>