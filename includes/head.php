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



include $filePath . 'includes/conn.php';
include $filePath . 'includes/session.php';
require $filePath . 'vendor/autoload.php';
include $filePath . 'includes/api_config.php';
if (isset($_SESSION['user_id'])) {
	$ajax_user_id = $_SESSION['user_id'];
} else {
	$ajax_user_id = 1;
}

?>

<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<!--index.html :55:58-->
<!-- Kejanie.com -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Kejanie.com -->

<head>
	<title>KCTS | Kakamega County Tracking Development System</title>
	<meta charset="utf-8" />
	<meta name="description" content="Explore government projects, procurement activities, and insightful reports from various counties in one convenient platform. Stay informed and engaged with our comprehensive information hub." />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="KCTS | Kakamega County Tracking System" />
	<meta property="og:url" content="https://techkira.net" />
	<meta property="og:site_name" content="KCTS | Kakamega County Tracking System" />
	<link rel="canonical" href="https://kakamega.techkira.net" />
	<link rel="shortcut icon" href="<?php echo $filePathScript ?>assets/media/logos/logo-3.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Page Vendor Stylesheets(used by this page)-->
	<link href="<?php echo $filePathScript ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $filePathScript ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Page Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo $filePathScript ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $filePathScript ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used by this page)-->
	<link href="<?php echo $filePathScript ?>assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $filePathScript ?>assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?php echo $filePathScript ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo $filePathScript ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<script src="https://twemoji.maxcdn.com/v/latest/twemoji.min.js" crossorigin="anonymous"></script>

	<!--end::Global Stylesheets Bundle-->
	<!--Begin::Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-MDKZXTL');
	</script>
	<link href="https://vjs.zencdn.net/7.20.3/video-js.css" rel="stylesheet" />
	<link href="https://unpkg.com/@videojs/themes@1/dist/city/index.css" rel="stylesheet" />
	<!--End::Google Tag Manager www.googletagmanager.com/ns.html?id=GTM-PVW2LQ2-->
	<style>
		@media screen and (max-width: 600px) {
			#tweetRef {
				visibility: hidden;
				display: none;
			}
		}
	</style>
</head>