<?php include '../includes/conn.php'; ?>
<?php

function alert_danger($error_head, $error_body)
{
	$alert_danger_box = '
<!--begin::Alert-->
<div class="py-5">
<div class="rounded border p-10 pb-0 d-flex flex-column align-items-center">
<div class="alert alert-danger d-flex align-items-center p-5 mb-10 col-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-danger me-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
                                        <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="d-flex flex-column">
                                    <h4 class="mb-1 text-danger">' . $error_head . '</h4>
                                    <span>' . $error_body . '</span>
                                </div>
                            </div>
      </div>
</div>

<!--end::Alert-->

';

	return $alert_danger_box;
}


function alert_success($error_head, $error_body)
{
	$alert_success_box = '

<!--begin::Alert-->
<div class="py-5">
<div class="rounded border p-10 pb-0 d-flex flex-column align-items-center">
<div class="alert alert-primary d-flex align-items-center p-5 mb-10 col-5">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
                                <span class="svg-icon svg-icon-2hx svg-icon-primary me-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
                                        <path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <div class="d-flex flex-column">
                                    <h4 class="mb-1 text-primary">' . $error_head . '</h4>
                                    <span>' . $error_body . '</span>
                                </div>
                            </div>
      </div>
</div>

<!--end::Alert-->

';

	return $alert_success_box;
}

/*
$wrapper_box = '
<!--begin::Wrapper-->
<div class="pt-lg-10 mb-10">
    <!--begin::Logo-->
    <h1 class="fw-bolder fs-2qx text-gray-800 mb-7">'.$wrapper_head.'</h1>
    <!--end::Logo-->
    <!--begin::Message-->
    <div class="fw-bold fs-3 text-muted mb-15">Plan your blog post by choosing a topic creating 
    <br />an outline and checking facts.</div>
    <!--end::Message-->
    <!--begin::Action-->
    <div class="text-center">
        <a href="../../index.html" class="btn btn-lg btn-primary fw-bolder">Go to homepage</a>
    </div>
    <!--end::Action-->
</div>
<!--end::Wrapper-->
'; */
$output = '';
if (!isset($_GET['code']) or !isset($_GET['user'])) {
	$error_head = 'Activation Error!';
	$error_body = 'Code to activate account not found.';
	//$wrapper_head =
	$output .= alert_danger($error_head, $error_body);
} else {
	$conn = $pdo->open();

	$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM users WHERE activate_code=:code AND id=:id");
	$stmt->execute(['code' => $_GET['code'], 'id' => $_GET['user']]);
	$row = $stmt->fetch();

	if ($row['numrows'] > 0) {
		if ($row['status']) {
			$error_head = 'Activation Error!';
			$error_body = ' Account already activated.';
			//$wrapper_head =
			$output .= alert_danger($error_head, $error_body);
		} else {
			try {
				$stmt = $conn->prepare("UPDATE users SET status=:status WHERE id=:id");
				$stmt->execute(['status' => 1, 'id' => $row['id']]);
				$error_head = 'Activation Successful!';
				$error_body = 'Account activated - Email: <b>' . $row['email'] . '</b>';
				//$wrapper_head = 
				$output .= alert_success($error_head, $error_body);
			} catch (PDOException $e) {
				$error_head = 'Activation Error!';
				$error_body = $e->getMessage();
				//$wrapper_head =
				$output .= alert_danger($error_head, $error_body);
			}
		}
	} else {
		$error_head = 'Activation Error!';
		$error_body = 'Cannot activate account. Wrong code.';
		//$wrapper_head =
		$output .= alert_danger($error_head, $error_body);
	}

	$pdo->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<!--authentication/general/welcome.html :58:30-->
<!-- Kejanie.com -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Kejanie.com -->

<head>
	<title>KCTS | Kakamega County Tracking System</title>
	<meta charset="utf-8" />
	<meta name="description" content="Explore government projects, procurement activities, and insightful reports from various counties in one convenient platform. Stay informed and engaged with our comprehensive information hub." />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="KCTS | Kakamega County Tracking System" />
	<meta property="og:url" content="https://kakamega.techkira.net" />
	<meta property="og:site_name" content="KCTS | Kakamega County Tracking System" />
	<link rel="canonical" href="https://preview.kakamega.techkira.net/metronic8" />
	<link rel="shortcut icon" href="../assets/media/logos/logo-3.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Vendor Stylesheets(used by this page)-->
	<link href="../assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Vendor Stylesheets-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="../assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="../assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="auth-bg">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Authentication - Signup Welcome Message -->
		<div class="d-flex flex-column flex-column-fluid">
			<!--begin::Content-->
			<div class="d-flex flex-column flex-column-fluid text-center p-10 py-lg-15">
				<!--begin::Logo-->
				<a href="../../index.html" class="mb-10 pt-lg-10">
					<img alt="Logo" src="https://kakamega.techkira.net/assets/media/logos/logo-3.png" class="h-100px mb-6" />
				</a>
				<!--end::Logo-->
				<!--begin::Alert-->
				<?php echo $output; ?>
				<!--end::Wrapper-->
				<!--begin::Illustration-->
				<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(/metronic8/demo9/assets/media/illustrations/sigma-1/17.png"></div>
				<!--end::Illustration-->
			</div>
			<!--end::Content-->
			<!--begin::Footer-->
			<div class="d-flex flex-center flex-column-auto p-10">
				<!--begin::Links-->
				<div class="d-flex align-items-center fw-bold fs-6">
					<a href="https://kakamega.techkira.net/" class="text-muted text-hover-primary px-2">About</a>
					<a href="mailto:support@kakamega.techkira.net" class="text-muted text-hover-primary px-2">Contact</a>
				</div>
				<!--end::Links-->
			</div>
			<!--end::Footer-->
		</div>
		<!--end::Authentication - Signup Welcome Message-->
	</div>
	<!--end::Root-->
	<!--end::Main-->
	<!--begin::Javascript-->
	<!--begin::Vendors Javascript(used by this page)-->
	<script src="../assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<!--end::Vendors Javascript-->
	<script>
		var hostUrl = "../assets/index.html";
	</script>
	<!--begin::Global Javascript Bundle(used by all pages)-->
	<script src="../assets/plugins/global/plugins.bundle.js"></script>
	<script src="../assets/js/scripts.bundle.js"></script>
	<!--end::Global Javascript Bundle-->
	<!--end::Javascript-->
</body>
<!--end::Body-->

<!--authentication/general/welcome.html :58:30-->

</html>