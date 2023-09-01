<?php
$start_time = microtime(true);
if(file_exists('../vendor/autoload.php')){
	$filePath = '../';
}elseif(file_exists('../../vendor/autoload.php')){
	$filePath = '../../';
}else{
 $filePath = './';
}

include $filePath.'includes/conn.php';
include $filePath.'includes/session.php';
require $filePath.'vendor/autoload.php';
include $filePath.'includes/api_config.php';
?>

<head>
	<title>KCTS</title>
	<meta charset="utf-8" />
	<meta charset="utf-8" />
    <meta name="msapplication-TileColor" content="#ff5f6d" />
    <meta name="theme-color" content="#ff5f6d" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="index, follow" />
    <meta data-hid="charset" charset="utf-8" />
    <meta data-hid="mobile-web-app-capable" name="mobile-web-app-capable" content="yes" />
    <meta data-hid="apple-mobile-web-app-title" name="apple-mobile-web-app-title" content="KCTS" />
	<meta name="description" content="Grow and manage your Twitter account. Let us give you content for your Twitter account. Mass like tweets and replies. Mass delete old tweets from your account. Mass follow accounts on Twitter. Get to use a source label of your choice." />
	<meta name="keywords" content="Twitter, gain followers, twitter grow, likes, follows, tweets, auto-follow, auto-reply, twitter manage, follow for follow, KOT, Kenyans on twitter, Kenyan twitter" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="KCTS - Grow and manage your Twitter account with the KCTS Twitter Artificial Intelligence" />
	<meta property="og:url" content="https://techkira.net/" />
	<meta property="og:site_name" content="KCTS" />
	<meta name="twitter:title" content="The Twitter Manager and Growth Expert">
	<meta name="twitter:description" content="KCTS - Grow and manage your Twitter account with the KCTS Twitter Artificial Intelligence">
	<meta name="twitter:image" content="https://techkira.net/assets/media/logos/icon_b.png">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:url" content="https://www.techkira.net" />
	<meta name="twitter:site" content="@KCTSa" />
	<link rel="canonical" href="https://techkira.net/" />
	<link rel="shortcut icon" href="../assets/media/logos/icon_b.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used by this page)-->
	<link href="../assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />

	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
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