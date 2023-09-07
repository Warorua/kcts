<?php
include '../includes/head.php';
// Split the URL by "/"
$url_parts = explode('/', $current_url);

// Get the last element of the array
$last_segment = (int)end($url_parts);

//echo shout($last_segment);
if (is_int($last_segment)) {
	//echo shout('good');
	$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM users WHERE id=:id");
	$stmt->execute(['id' => $last_segment]);
	$pr = $stmt->fetch();
	if ($pr['numrows'] < 1) {
		$_SESSION['error'] = 'Invalid user Identity';
		header('location: ' . $filePath . 'users/list');
	} else {
		$stmt = $conn->prepare("SELECT * FROM users WHERE id=:id");
		$stmt->execute(['id' => $last_segment]);
		$puser = $stmt->fetch();
	}

	//echo shout($pr['numrows']);
} else {
	//echo shout('bad');
	$_SESSION['error'] = 'Invalid Request!';
	header('location: ' . $filePath . 'users/list');
}

?>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			<?php include $filePath . 'includes/menu.php' ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header tablet and mobile-->
				<div class="header-mobile py-3">
					<!--begin::Container-->
					<div class="container d-flex flex-stack">
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="index.html">
								<img alt="Logo" src="<?php echo $filePathScript ?>assets/media/logos/icon.png" class="h-35px" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Aside toggle-->
						<button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
							<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
							<span class="svg-icon svg-icon-2x me-n1">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
									<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</button>
						<!--end::Aside toggle-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header tablet and mobile-->
				<!--begin::Header-->

				<?php include $filePath . 'includes/header.php' ?>
				<!--end::Header-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">
						<!--begin::Layout-->
						<div class="d-flex flex-column flex-lg-row">
							<!--begin::Sidebar-->
							<div class="flex-column flex-lg-row-auto w-lg-250px w-xl-350px mb-10">
								<!--begin::Card-->
								<div class="card mb-5 mb-xl-8">
									<!--begin::Card body-->
									<div class="card-body">
										<!--begin::Summary-->
										<!--begin::User Info-->
										<div class="d-flex flex-center flex-column py-5">
											<!--begin::Avatar-->
											<div class="symbol symbol-100px symbol-circle mb-7">
												<?php echo userProfileHolder($puser['firstname']) ?>
											</div>
											<!--end::Avatar-->
											<!--begin::Name-->
											<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3"><?php echo $puser['firstname'] ?> <?php echo $puser['lastname'] ?></a>
											<!--end::Name-->
											<!--begin::Position-->
											<div class="mb-9">
												<!--begin::Badge-->
												<div class="badge badge-lg badge-light-primary d-inline"><?php echo searchEntity(systemRoles(), $puser['role'], 'title') ?>

												</div>
												<!--begin::Badge-->
											</div>
											<!--end::Position-->
											<!--begin::Info-->
											<!--begin::Info heading-->

											<!--end::Info heading-->
											<div class="d-flex flex-wrap flex-center">
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
													<div class="fs-4 fw-bolder text-gray-700">
														<span class="w-75px">1</span>
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<div class="fw-bold text-muted">All Projects</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded py-3 px-3 mx-4 mb-3">
													<div class="fs-4 fw-bolder text-gray-700">
														<span class="w-50px">0</span>
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-danger">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor"></rect>
																<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<div class="fw-bold text-muted">Open</div>
												</div>
												<!--end::Stats-->
												<!--begin::Stats-->
												<div class="border border-gray-300 border-dashed rounded py-3 px-3 mb-3">
													<div class="fs-4 fw-bolder text-gray-700">
														<span class="w-50px">0</span>
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
														<span class="svg-icon svg-icon-3 svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"></rect>
																<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</div>
													<div class="fw-bold text-muted">Completed</div>
												</div>
												<!--end::Stats-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::User Info-->
										<!--end::Summary-->
										<!--begin::Details toggle-->
										<div class="d-flex flex-stack fs-4 py-3">
											<div class="fw-bolder rotate collapsible active" data-bs-toggle="collapse" href="#kt_user_view_details" role="button" aria-expanded="true" aria-controls="kt_user_view_details">Details
												<span class="ms-2 rotate-180">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit customer details">
												<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
											</span>
										</div>
										<!--end::Details toggle-->
										<div class="separator"></div>
										<!--begin::Details content-->
										<div id="kt_user_view_details" class="collapse show">
											<div class="pb-5 fs-6">
												<!--begin::Details item-->
												<div class="fw-bolder mt-5">Account ID</div>
												<div class="text-gray-600">ID-KCTS<?php echo $puser['id'] ?></div>
												<!--begin::Details item-->
												<!--begin::Details item-->
												<div class="fw-bolder mt-5">Email</div>
												<div class="text-gray-600">
													<a href="#" class="text-gray-600 text-hover-primary"><?php echo $puser['email'] ?></a>
												</div>
												<!--begin::Details item-->
												<!--begin::Details item-->
												<div class="fw-bolder mt-5">Address</div>
												<div class="text-gray-600">
													<?php
													if ($puser['address'] != "") {
														echo $puser['address'];
													} else {
														echo 'Kenya, Kakamega';
													}

													?></div>
												<!--begin::Details item-->
												<!--begin::Details item-->
												<div class="fw-bolder mt-5">Language</div>
												<div class="text-gray-600">English</div>
												<!--begin::Details item-->
												<!--begin::Details item-->
												<div class="fw-bolder mt-5">Last Login</div>
												<?php
												$stmt = $conn->prepare("SELECT time FROM logs WHERE user_id=:user_id ORDER BY id DESC LIMIT 1");
												$stmt->execute(['user_id' => $puser['id']]);
												$log = $stmt->fetch();
												echo '<div class="text-gray-600">' . $log['time'] . '</div>';
												?>

												<!--begin::Details item-->
											</div>
										</div>
										<!--end::Details content-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
								<!--begin::Connected Accounts-->

								<!--end::Connected Accounts-->
							</div>
							<!--end::Sidebar-->
							<!--begin::Content-->
							<div class="flex-lg-row-fluid ms-lg-15">
								<!--begin:::Tabs-->
								<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-8">
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_user_view_overview_tab">Overview</a>
									</li>
									<!--end:::Tab item-->
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_user_view_overview_security">Security</a>
									</li>
									<!--end:::Tab item-->
									<!--begin:::Tab item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_user_view_overview_events_and_logs_tab">Events &amp; Logs</a>
									</li>
									<!--end:::Tab item-->
									<!--begin:::Tab item-->
									<li class="nav-item ms-auto">
										<!--begin::Action menu-->
										<a href="#" class="btn btn-primary ps-7" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">Actions
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-2 me-0">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></a>
										<!--begin::Menu-->
										<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold py-4 w-250px fs-6" data-kt-menu="true">
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Payments</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="#" class="menu-link px-5">Create invoice</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="#" class="menu-link flex-stack px-5">Create payments
													<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
												<a href="#" class="menu-link px-5">
													<span class="menu-title">Subscription</span>
													<span class="menu-arrow"></span>
												</a>
												<!--begin::Menu sub-->
												<div class="menu-sub menu-sub-dropdown w-175px py-4">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-5">Apps</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-5">Billing</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-5">Statements</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator my-2"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3">
															<label class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input w-30px h-20px" type="checkbox" value="" name="notifications" checked="checked" id="kt_user_menu_notifications" />
																<span class="form-check-label text-muted fs-6" for="kt_user_menu_notifications">Notifications</span>
															</label>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu sub-->
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-3"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<div class="menu-content text-muted pb-2 px-5 fs-7 text-uppercase">Account</div>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="#" class="menu-link px-5">Reports</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5 my-1">
												<a href="#" class="menu-link px-5">Account Settings</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-5">
												<a href="#" class="menu-link text-danger px-5">Delete customer</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu-->
										<!--end::Menu-->
									</li>
									<!--end:::Tab item-->
								</ul>
								<!--end:::Tabs-->
								<!--begin:::Tab content-->
								<div class="tab-content " id="myTabContent">
									<!--begin:::Tab pane-->
									<div class="tab-pane fade active show" id="kt_user_view_overview_tab" role="tabpanel">
										<!--begin::Projects-->
										<div class="col-md-12 col-xl-12 m-1 pt-6">
											<!--begin::Card-->
											<a href="project.html" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->

													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bolder text-dark">Agriculture</div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Agriculture Livestock Fisheries</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bolder">Aug 19, 2024</div>
															<div class="fw-bold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
															<div class="fw-bold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="" data-bs-original-title="This project 50% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->

														<!--begin::User-->
														<!--begin::User-->

														<!--begin::User-->
														<!--begin::User-->

														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Projects-->
										<!--begin::Projects-->
										<div class="col-md-12 col-xl-12 m-1 pt-6">
											<!--begin::Card-->
											<a href="project.html" class="card border-hover-primary">
												<!--begin::Card header-->
												<div class="card-header border-0 pt-9">
													<!--begin::Card Title-->

													<!--end::Car Title-->
													<!--begin::Card toolbar-->
													<div class="card-toolbar">
														<span class="badge badge-light-primary fw-bolder me-auto px-4 py-3">In Progress</span>
													</div>
													<!--end::Card toolbar-->
												</div>
												<!--end:: Card header-->
												<!--begin:: Card body-->
												<div class="card-body p-9">
													<!--begin::Name-->
													<div class="fs-3 fw-bolder text-dark">Public Administrator </div>
													<!--end::Name-->
													<!--begin::Description-->
													<p class="text-gray-400 fw-bold fs-5 mt-1 mb-7">Road Rehabilitation and Infrastructure Development in Shinyalu

													</p>
													<!--end::Description-->
													<!--begin::Info-->
													<div class="d-flex flex-wrap mb-5">
														<!--begin::Due-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-7 mb-3">
															<div class="fs-6 text-gray-800 fw-bolder">Aug 19, 2024</div>
															<div class="fw-bold text-gray-400">Due Date</div>
														</div>
														<!--end::Due-->
														<!--begin::Budget-->
														<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 mb-3">
															<div class="fs-6 text-gray-800 fw-bolder">$284,900.00</div>
															<div class="fw-bold text-gray-400">Budget</div>
														</div>
														<!--end::Budget-->
													</div>
													<!--end::Info-->
													<!--begin::Progress-->
													<div class="h-4px w-100 bg-light mb-5" data-bs-toggle="tooltip" title="" data-bs-original-title="This project 50% completed">
														<div class="bg-primary rounded h-4px" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
													<!--end::Progress-->
													<!--begin::Users-->
													<div class="symbol-group symbol-hover">
														<!--begin::User-->

														<!--begin::User-->
														<!--begin::User-->

														<!--begin::User-->
														<!--begin::User-->

														<!--begin::User-->
													</div>
													<!--end::Users-->
												</div>
												<!--end:: Card body-->
											</a>
											<!--end::Card-->
										</div>
										<!--end::Projects-->
										<!--begin::Tasks-->
										<div class="card card-flush mb-6 mb-xl-9">
											<!--begin::Card header-->
											<div class="card-header mt-6">
												<!--begin::Card title-->
												<div class="card-title flex-column">
													<h2 class="mb-1">User's Tasks</h2>
													<div class="fs-6 fw-bold text-muted">Total 25 tasks in backlog</div>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<button type="button" class="btn btn-light-primary btn-sm" data-bs-toggle="modal" data-bs-target="#kt_modal_add_task">
														<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13.5L12.5 13V10C12.5 9.4 12.6 9.5 12 9.5C11.4 9.5 11.5 9.4 11.5 10L11 13L8 13.5C7.4 13.5 7 13.4 7 14C7 14.6 7.4 14.5 8 14.5H11V18C11 18.6 11.4 19 12 19C12.6 19 12.5 18.6 12.5 18V14.5L16 14C16.6 14 17 14.6 17 14C17 13.4 16.6 13.5 16 13.5Z" fill="currentColor" />
																<rect x="11" y="19" width="10" height="2" rx="1" transform="rotate(-90 11 19)" fill="currentColor" />
																<rect x="7" y="13" width="10" height="2" rx="1" fill="currentColor" />
																<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Add Task</button>
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body d-flex flex-column">
												<!--begin::Item-->
												<div class="d-flex align-items-center position-relative mb-7">
													<!--begin::Label-->
													<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
													<!--end::Label-->
													<!--begin::Details-->
													<div class="fw-bold ms-5">
														<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Create FureStibe branding logo</a>
														<!--begin::Info-->
														<div class="fs-7 text-muted">Due in 1 day
															<a href="#">Karina Clark</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Details-->
													<!--begin::Menu-->
													<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Task menu-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Update Status</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
															<!--begin::Input group-->
															<div class="fv-row mb-10">
																<!--begin::Label-->
																<label class="form-label fs-6 fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="3">In Process</option>
																	<option value="4">Rejected</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																	<span class="indicator-label">Apply</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Task menu-->
													<!--end::Menu-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center position-relative mb-7">
													<!--begin::Label-->
													<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
													<!--end::Label-->
													<!--begin::Details-->
													<div class="fw-bold ms-5">
														<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Schedule a meeting with FireBear CTO John</a>
														<!--begin::Info-->
														<div class="fs-7 text-muted">Due in 3 days
															<a href="#">Rober Doe</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Details-->
													<!--begin::Menu-->
													<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Task menu-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Update Status</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
															<!--begin::Input group-->
															<div class="fv-row mb-10">
																<!--begin::Label-->
																<label class="form-label fs-6 fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="3">In Process</option>
																	<option value="4">Rejected</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																	<span class="indicator-label">Apply</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Task menu-->
													<!--end::Menu-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center position-relative mb-7">
													<!--begin::Label-->
													<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
													<!--end::Label-->
													<!--begin::Details-->
													<div class="fw-bold ms-5">
														<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">9 Degree Project Estimation</a>
														<!--begin::Info-->
														<div class="fs-7 text-muted">Due in 1 week
															<a href="#">Neil Owen</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Details-->
													<!--begin::Menu-->
													<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Task menu-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Update Status</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
															<!--begin::Input group-->
															<div class="fv-row mb-10">
																<!--begin::Label-->
																<label class="form-label fs-6 fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="3">In Process</option>
																	<option value="4">Rejected</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																	<span class="indicator-label">Apply</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Task menu-->
													<!--end::Menu-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center position-relative mb-7">
													<!--begin::Label-->
													<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
													<!--end::Label-->
													<!--begin::Details-->
													<div class="fw-bold ms-5">
														<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Dashboard UI &amp; UX for Leafr CRM</a>
														<!--begin::Info-->
														<div class="fs-7 text-muted">Due in 1 week
															<a href="#">Olivia Wild</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Details-->
													<!--begin::Menu-->
													<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Task menu-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Update Status</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
															<!--begin::Input group-->
															<div class="fv-row mb-10">
																<!--begin::Label-->
																<label class="form-label fs-6 fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="3">In Process</option>
																	<option value="4">Rejected</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																	<span class="indicator-label">Apply</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Task menu-->
													<!--end::Menu-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="d-flex align-items-center position-relative">
													<!--begin::Label-->
													<div class="position-absolute top-0 start-0 rounded h-100 bg-secondary w-4px"></div>
													<!--end::Label-->
													<!--begin::Details-->
													<div class="fw-bold ms-5">
														<a href="#" class="fs-5 fw-bolder text-dark text-hover-primary">Mivy App R&amp;D, Meeting with clients</a>
														<!--begin::Info-->
														<div class="fs-7 text-muted">Due in 2 weeks
															<a href="#">Sean Bean</a>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Details-->
													<!--begin::Menu-->
													<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
														<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
																<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
													</button>
													<!--begin::Task menu-->
													<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" data-kt-menu-id="kt-users-tasks">
														<!--begin::Header-->
														<div class="px-7 py-5">
															<div class="fs-5 text-dark fw-bolder">Update Status</div>
														</div>
														<!--end::Header-->
														<!--begin::Menu separator-->
														<div class="separator border-gray-200"></div>
														<!--end::Menu separator-->
														<!--begin::Form-->
														<form class="form px-7 py-5" data-kt-menu-id="kt-users-tasks-form">
															<!--begin::Input group-->
															<div class="fv-row mb-10">
																<!--begin::Label-->
																<label class="form-label fs-6 fw-bold">Status:</label>
																<!--end::Label-->
																<!--begin::Input-->
																<select class="form-select form-select-solid" name="task_status" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-hide-search="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="3">In Process</option>
																	<option value="4">Rejected</option>
																</select>
																<!--end::Input-->
															</div>
															<!--end::Input group-->
															<!--begin::Actions-->
															<div class="d-flex justify-content-end">
																<button type="button" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-users-update-task-status="reset">Reset</button>
																<button type="submit" class="btn btn-sm btn-primary" data-kt-users-update-task-status="submit">
																	<span class="indicator-label">Apply</span>
																	<span class="indicator-progress">Please wait...
																		<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
																</button>
															</div>
															<!--end::Actions-->
														</form>
														<!--end::Form-->
													</div>
													<!--end::Task menu-->
													<!--end::Menu-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Tasks-->
									</div>
									<!--end:::Tab pane-->
									<!--begin:::Tab pane-->
									<div class="tab-pane fade" id="kt_user_view_overview_security" role="tabpanel">
										<!--begin::Card-->
										<div class="card pt-4 mb-6 mb-xl-9">
											<!--begin::Card header-->
											<div class="card-header border-0">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Profile</h2>
												</div>
												<!--end::Card title-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body pt-0 pb-5">
												<!--begin::Table wrapper-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed gy-5" id="kt_table_users_login_session">
														<!--begin::Table body-->
														<tbody class="fs-6 fw-bold text-gray-600">
															<tr>
																<td>Email</td>
																<td><?php echo $puser['email'] ?></td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_email">
																		<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</button>
																</td>
															</tr>
															<tr>
																<td>Password</td>
																<td>******</td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
																		<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</button>
																</td>
															</tr>
															<tr>
																<td>Role</td>
																<td><?php echo searchEntity(systemRoles(), $puser['role'], 'title') ?></td>
																<td class="text-end">
																	<button type="button" class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">
																		<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
																		<span class="svg-icon svg-icon-3">
																			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																				<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor"></path>
																				<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor"></path>
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</button>
																</td>
															</tr>
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Table wrapper-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->

										<!--end::Card-->
										<!--begin::Card-->

										<!--end::Card-->
									</div>
									<!--end:::Tab pane-->
									<!--begin:::Tab pane-->
									<div class="tab-pane fade" id="kt_user_view_overview_events_and_logs_tab" role="tabpanel">
										<!--begin::Card-->
										<div class="card pt-4 mb-6 mb-xl-9">
											<!--begin::Card header-->
											<div class="card-header border-0">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Logs</h2>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<!--begin::Button-->
													<button type="button" class="btn btn-sm btn-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
																<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
																<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Download Report</button>
													<!--end::Button-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body py-0">
												<!--begin::Table wrapper-->
												<div class="table-responsive">
													<!--begin::Table-->
													<table class="table align-middle table-row-dashed fw-bold text-gray-600 fs-6 gy-5" id="kt_table_users_logs">
														<!--begin::Table body-->
														<tbody>
														<?php
												$stmt = $conn->prepare("SELECT * FROM logs WHERE user_id=:user_id ORDER BY id DESC LIMIT 3");
												$stmt->execute(['user_id'=>$puser['id']]);
												$log_ses = $stmt->fetchAll();
												foreach($log_ses as $row){
													if($row['status'] == 1){
														$statusBadge = '<div class="badge badge-light-success">200 OK</div>';
													}else{
														$statusBadge = '<div class="badge badge-light-warning">404 WRN</div>';
													}
													echo '
													<!--begin::Table row-->
															<tr>
																<!--begin::Badge=-->
																<td class="min-w-70px">
																	'.$statusBadge.'
																</td>
																<!--end::Badge=-->
																<!--begin::Status=-->
																<td>'.$row['status_info'].'</td>
																<!--end::Status=-->
																<!--begin::Timestamp=-->
																<td class="pe-0 text-end min-w-200px">'.$row['time'].'</td>
																<!--end::Timestamp=-->
															</tr>
															<!--end::Table row-->
													';

												}
												?>
														</tbody>
														<!--end::Table body-->
													</table>
													<!--end::Table-->
												</div>
												<!--end::Table wrapper-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
										<!--begin::Card-->
										<div class="card pt-4 mb-6 mb-xl-9">
											<!--begin::Card header-->
											<div class="card-header border-0">
												<!--begin::Card title-->
												<div class="card-title">
													<h2>Events</h2>
												</div>
												<!--end::Card title-->
												<!--begin::Card toolbar-->
												<div class="card-toolbar">
													<!--begin::Button-->
													<button type="button" class="btn btn-sm btn-light-primary">
														<!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3" d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z" fill="currentColor" />
																<path d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z" fill="currentColor" />
																<path opacity="0.3" d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->Download Report</button>
													<!--end::Button-->
												</div>
												<!--end::Card toolbar-->
											</div>
											<!--end::Card header-->
											<!--begin::Card body-->
											<div class="card-body py-0">
												<!--begin::Table-->
												<table class="table align-middle table-row-dashed fs-6 text-gray-600 fw-bold gy-5" id="kt_table_customers_events">
													<!--begin::Table body-->
													<tbody>
														<!--begin::Table row-->
														<tr>
															<!--begin::Event=-->
															<td class="min-w-400px">
																<a href="#" class="text-gray-600 text-hover-primary me-1"><?php echo $puser['firstname'] ?> <?php echo $puser['lastname'] ?></a>has created an account id
																<a href="#" class="fw-bolder text-gray-900 text-hover-primary">#KCTS<?php echo $puser['id'] ?></a>
															</td>
															<!--end::Event=-->
															<!--begin::Timestamp=-->
															<td class="pe-0 text-gray-600 text-end min-w-200px"><?php echo $puser['created_on'] ?></td>
															<!--end::Timestamp=-->
														</tr>
														<!--end::Table row-->
													</tbody>
													<!--end::Table body-->
												</table>
												<!--end::Table-->
											</div>
											<!--end::Card body-->
										</div>
										<!--end::Card-->
									</div>
									<!--end:::Tab pane-->
								</div>
								<!--end:::Tab content-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Layout-->
						<!--begin::Modals-->
						<!--Section in modals module-->
						<!--end::Modals-->
					</div>
					<!--end::Container-->
				</div>



			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<?php include $filePath . 'includes/drawers.php' ?>
	<!--end::Engage drawers-->
	<!--begin::Engage toolbar-->

	<!--end::Engage toolbar-->
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
				<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--begin::Modals-->
	<?php include $filePath . 'includes/modals.php' ?>
	<!--end::Modals-->
	<!--begin::Javascript-->
	<?php include $filePath . 'includes/scripts.php' ?>
	<!--end::Javascript-->
</body>
<!--end::Body-->

<!--index.html :55:59-->

</html>