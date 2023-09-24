<?php
include '../includes/head.php';
$current_url;
// Split the URL by "/"
$url_parts = explode('/', $current_url);

// Get the last element of the array
$last_segment = (int)end($url_parts);

//echo shout($last_segment);
if (is_int($last_segment)) {
	//echo shout('good');
	$stmt = $conn->prepare("SELECT COUNT(*) AS numrows FROM projects WHERE id=:id");
	$stmt->execute(['id' => $last_segment]);
	$pr = $stmt->fetch();
	if ($pr['numrows'] < 1) {
		$_SESSION['error'] = 'Invalid Project Identity';
		header('location: ' . $filePath . 'projects/list');
	} else {
		$stmt = $conn->prepare("SELECT * FROM projects WHERE id=:id");
		$stmt->execute(['id' => $last_segment]);
		$project = $stmt->fetch();
	}

	//echo shout($pr['numrows']);
} else {
	//echo shout('bad');
	$_SESSION['error'] = 'Invalid Request!';
	header('location: ' . $filePath . 'projects/list');
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
			<?php include '../includes/menu.php' ?>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header tablet and mobile-->
				<div class="header-mobile py-3">
					<!--begin::Container-->
					<div class="container d-flex flex-stack">
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="../index.html">
								<img alt="Logo" src="<?php echo $filePathScript ?>assets/media/logos/logo-3.png" class="h-35px" />
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
				<?php include '../includes/header.php' ?>
				<!--end::Header-->
				<!--begin::Content-->
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Container-->
					<div class="container-xxl" id="kt_content_container">
						<!--begin::Navbar-->
						<div class="card mb-6 mb-xl-9">
							<div class="card-body pt-9 pb-0">
								<!--begin::Details-->
								<?php include $filePath.'projects/elements/details_block.php' ?>
								<!--end::Details-->
								<div class="separator"></div>
								<!--begin::Nav-->
								<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6 active" href="<?php echo $filePathScript ?>project/overview/<?php echo $last_segment ?>">Overview</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6" href="<?php echo $filePathScript ?>project/targets/<?php echo $last_segment ?>">Project Gallery</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6" href="<?php echo $filePathScript ?>project/budget/<?php echo $last_segment ?>">Communication</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6" href="<?php echo $filePathScript ?>project/users/<?php echo $last_segment ?>">Recommendations</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6" href="<?php echo $filePathScript ?>project/files/<?php echo $last_segment ?>">Files</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->

									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6" href="<?php echo $filePathScript ?>project/settings/<?php echo $last_segment ?>">Settings</a>
									</li>
									<!--end::Nav item-->
								</ul>
								<!--end::Nav-->
							</div>
						</div>
						<!--end::Navbar-->
						<div class="row g-6 g-xl-9">
							<!--Project overview-->
							<div class="col-xxl-6 mb-6">
								<!--begin::Engage widget 8-->
								<div class="card h-md-100" style="background: linear-gradient(112.14deg, #8a782e 0%, #4b9539 100%);">
									<!--begin::Body-->
									<div class="card-body">
										<!--begin::Row-->
										<div class="row align-items-center h-100">
											<!--begin::Col-->
											<div class="col-7 ps-xl-13">
												<!--begin::Title-->
												<div class="text-white mb-6 pt-6">
													<span class="fs-4 fw-bold me-2 d-block lh-1 pb-2 opacity-75"><?php echo $project['settings_name'] ?></span>
													<span class="fs-2qx fw-bolder"><?php echo $project['settings_description'] ?></span>
												</div>
												<!--end::Title-->
												<!--begin::Text-->

												<!--end::Text-->
												<!--begin::Items-->
												<div class="d-flex align-items-center flex-wrap d-grid gap-2 mb-10 mb-xl-20">
													<!--begin::Item-->
													<div class="d-flex align-items-center me-5 me-xl-13">
														<!--begin::Symbol-->
														<div class="symbol symbol-30px symbol-circle me-3">
															<span class="symbol-label" style="background: #35C7FF">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																<span class="svg-icon svg-icon-5 svg-icon-white">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
																		<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Info-->
														<div class="text-white">
															<span class="fw-bold d-block fs-8 opacity-75">Project Manager</span>
															<span class="fw-bolder fs-7"><?php echo searchEntity(systemUsers(), (int)$project['settings_customer'], 'firstname') ?> <?php echo searchEntity(systemUsers(), (int)$project['settings_customer'], 'lastname') ?></span>
														</div>
														<!--end::Info-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->

													<!--end::Item-->

													<div class="d-flex align-items-center me-5 me-xl-13">
														<!--begin::Symbol-->
														<div class="symbol symbol-30px symbol-circle me-3">
															<span class="symbol-label" style="background: #35C7FF">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																<span class="svg-icon svg-icon-5 svg-icon-white">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
																		<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Info-->
														<div class="text-white">
															<span class="fw-bold d-block fs-8 opacity-75">Project Sub County</span>
															<span class="fw-bolder fs-7"><?php echo searchEntity(subCounties(), (int)$project['sub_county'], 'name') ?></span>
														</div>
														<!--end::Info-->
													</div>

													<div class="d-flex align-items-center me-5 me-xl-13">
														<!--begin::Symbol-->
														<div class="symbol symbol-30px symbol-circle me-3">
															<span class="symbol-label" style="background: #35C7FF">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																<span class="svg-icon svg-icon-5 svg-icon-white">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
																		<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Info-->
														<div class="text-white">
															<span class="fw-bold d-block fs-8 opacity-75">Project Created By</span>
															<span class="fw-bolder fs-7"><?php echo searchEntity(systemUsers(), (int)$project['created_by'], 'firstname') ?> <?php echo searchEntity(systemUsers(), (int)$project['created_by'], 'lastname') ?></span>
														</div>
														<!--end::Info-->
													</div>

													<div class="d-flex align-items-center me-5 me-xl-13">
														<!--begin::Symbol-->
														<div class="symbol symbol-30px symbol-circle me-3">
															<span class="symbol-label" style="background: #35C7FF">
																<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																<span class="svg-icon svg-icon-5 svg-icon-white">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor"></path>
																		<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor"></path>
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Info-->
														<div class="text-white">
															<span class="fw-bold d-block fs-8 opacity-75">Date Created</span>
															<span class="fw-bolder fs-7"><?php echo $project['date_created'] ?></span>
														</div>
														<!--end::Info-->
													</div>


												</div>
												<!--end::Items-->
												<!--begin::Action-->

												<!--end::Action-->
											</div>
											<!--end::Col-->
											<!--begin::Col-->
											<div class="col-5 pt-10">
												<!--begin::Illustration-->
												<div class="bgi-no-repeat bgi-size-contain bgi-position-x-end h-225px" style="background-image:url('<?php echo $filePathScript ?>assets/media/svg/illustrations/easy/5.svg');"></div>
												<!--end::Illustration-->
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Engage widget 8-->
							</div>
							<!--Project Overview end-->
							<!--Project overview-->
							<div class="col-xxl-6 mb-6">
								<!--begin::Charts Widget 3-->
								<div class="card card-xl-stretch mb-xl-8 h-md-100">
									<!--begin::Header-->
									<div class="card-header border-0 pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bolder fs-3 mb-1">Budget Expenditure</span>
											<span class="text-muted fw-bold fs-7">Expenditure tracking visual representation</span>
										</h3>
										<!--begin::Toolbar-->
										<div class="card-toolbar" data-kt-buttons="true">
											<a class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4 me-1" id="kt_charts_widget_3_month_btn">Month</a>
										</div>
										<!--end::Toolbar-->
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
										<!--begin::Chart-->
										<div id="kt_charts_project_expenditure" class="h-100" ></div>
										<!--end::Chart-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Charts Widget 3-->
							</div>
							<!--Project Overview end-->
						</div>

						<!--begin::Row-->
						<div class="row g-6 g-xl-9">
							<!--begin::Col-->

							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-lg-12">
								<!--begin::Card-->
								<div class="card card-flush h-lg-100">
									<!--begin::Card header-->
									<div class="card-header mt-6">
										<!--begin::Card title-->
										<div class="card-title flex-column">
											<h3 class="fw-bolder mb-1">Project Paperwork</h3>
											<div class="fs-6 text-gray-400">Latest Files </div>
										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->
										<div class="card-toolbar">
											<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
										</div>
										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9 pt-3">
										<!--begin::Files-->
										<div class="d-flex flex-column mb-9">
											<!--begin::File-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Icon-->
												<div class="symbol symbol-30px me-5">
													<img alt="Icon" src="<?php echo $filePathScript ?>assets/media/svg/files/pdf.svg" />
												</div>
												<!--end::Icon-->
												<!--begin::Details-->
												<div class="fw-bold">
													<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">ADDENDUM No.2 SECOND KENYA INFORMAL SETTLEMENTS IMPROVEMENT PROJECT (KISIP 2) LOT 1 BQs</a>
													<div class="text-gray-400">2 days ago
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Icon-->
												<div class="symbol symbol-30px me-5">
													<img alt="Icon" src="<?php echo $filePathScript ?>assets/media/svg/files/doc.svg" />
												</div>
												<!--end::Icon-->
												<!--begin::Details-->
												<div class="fw-bold">
													<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">SUPPLY & DELIVERY OF LABORATORY REAGENTS FOR KAKAMEGA COUNTY GENERAL HOSPITAL 15-09-2023</a>
													<div class="text-gray-400"> 5 days ago
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex align-items-center mb-5">
												<!--begin::Icon-->
												<div class="symbol symbol-30px me-5">
													<img alt="Icon" src="<?php echo $filePathScript ?>assets/media/svg/files/css.svg" />
												</div>
												<!--end::Icon-->
												<!--begin::Details-->
												<div class="fw-bold">
													<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">PROVISION OF CONTRACTED SECURITY SERVICES 15-09-2023</a>
													<div class="text-gray-400">2-Aug-2023
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::File-->
											<!--begin::File-->
											<div class="d-flex align-items-center">
												<!--begin::Icon-->
												<div class="symbol symbol-30px me-5">
													<img alt="Icon" src="<?php echo $filePathScript ?>assets/media/svg/files/ai.svg" />
												</div>
												<!--end::Icon-->
												<!--begin::Details-->
												<div class="fw-bold">
													<a class="fs-6 fw-bolder text-dark text-hover-primary" href="#">TENDER NOTICE ADDENDUM 25-08-2023</a>
													<div class="text-gray-400">1 day ago
													</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::File-->
										</div>
										<!--end::Files-->
										<!--begin::Notice-->
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
											<!--begin::Icon-->
											<!--begin::Svg Icon | path: svg/files/upload.svg-->
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg xmlns="http://www.w3.org/2000/svg" width="67" height="67" viewBox="0 0 67 67" fill="none">
													<path opacity="0.25" d="M8.375 11.167C8.375 6.54161 12.1246 2.79199 16.75 2.79199H43.9893C46.2105 2.79199 48.3407 3.67436 49.9113 5.24497L56.172 11.5057C57.7426 13.0763 58.625 15.2065 58.625 17.4277V55.8337C58.625 60.459 54.8754 64.2087 50.25 64.2087H16.75C12.1246 64.2087 8.375 60.459 8.375 55.8337V11.167Z" fill="#00A3FF" />
													<path d="M41.875 5.28162C41.875 3.90663 42.9896 2.79199 44.3646 2.79199V2.79199C46.3455 2.79199 48.2452 3.57889 49.6459 4.97957L56.4374 11.7711C57.8381 13.1718 58.625 15.0715 58.625 17.0524V17.0524C58.625 18.4274 57.5104 19.542 56.1354 19.542H44.6667C43.1249 19.542 41.875 18.2921 41.875 16.7503V5.28162Z" fill="#00A3FF" />
													<path d="M32.4311 25.3368C32.1018 25.4731 31.7933 25.675 31.5257 25.9427L23.1507 34.3177C22.0605 35.4079 22.0605 37.1755 23.1507 38.2657C24.2409 39.3559 26.0085 39.3559 27.0987 38.2657L30.708 34.6563V47.4583C30.708 49.0001 31.9579 50.25 33.4997 50.25C35.0415 50.25 36.2913 49.0001 36.2913 47.4583V34.6563L39.9007 38.2657C40.9909 39.3559 42.7585 39.3559 43.8487 38.2657C44.9389 37.1755 44.9389 35.4079 43.8487 34.3177L35.4737 25.9427C34.6511 25.1201 33.443 24.9182 32.4311 25.3368Z" fill="#00A3FF" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<!--end::Icon-->
											<!--begin::Wrapper-->
											<div class="d-flex flex-stack flex-grow-1">
												<!--begin::Content-->
												<div class="fw-bold">
													<h4 class="text-gray-900 fw-bolder">Quick file uploader</h4>
													<div class="fs-6 text-gray-700">Drag &amp; Drop or choose files from computer</div>
												</div>
												<!--end::Content-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Notice-->
									</div>
									<!--end::Card body -->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Col-->


						</div>
						<!--end::Row-->

						<!--end::Card-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Content-->

			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Root-->
	<!--begin::Drawers-->
	<?php include '../includes/drawers.php' ?>
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
	<?php include '../includes/modals.php' ?>
	<!--end::Modals-->


	<!--begin::Javascript-->
	<?php include '../includes/scripts.php' ?>
	<script>
		var KTWidgets2 = {
			init: function() {
				var element = document.getElementById("kt_charts_project_expenditure");

				var height = parseInt(KTUtil.css(element, 'height'));
				var labelColor = KTUtil.getCssVariableValue('--bs-gray-500');
				var borderColor = KTUtil.getCssVariableValue('--bs-gray-200');
				var baseColor = KTUtil.getCssVariableValue('--bs-info');
				var lightColor = KTUtil.getCssVariableValue('--bs-light-info');

				if (!element) {
					return;
				}

				var options = {
					series: [{
						name: 'Net Expenditure',
						data: [30, 40, 40, 90, 90, 70, 70]
					}],
					chart: {
						fontFamily: 'inherit',
						type: 'area',
						height: 350,
						toolbar: {
							show: false
						}
					},
					plotOptions: {

					},
					legend: {
						show: false
					},
					dataLabels: {
						enabled: false
					},
					fill: {
						type: 'solid',
						opacity: 1
					},
					stroke: {
						curve: 'smooth',
						show: true,
						width: 3,
						colors: [baseColor]
					},
					xaxis: {
						categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug'],
						axisBorder: {
							show: false,
						},
						axisTicks: {
							show: false
						},
						labels: {
							style: {
								colors: labelColor,
								fontSize: '12px'
							}
						},
						crosshairs: {
							position: 'front',
							stroke: {
								color: baseColor,
								width: 1,
								dashArray: 3
							}
						},
						tooltip: {
							enabled: true,
							formatter: undefined,
							offsetY: 0,
							style: {
								fontSize: '12px'
							}
						}
					},
					yaxis: {
						labels: {
							style: {
								colors: labelColor,
								fontSize: '12px'
							}
						}
					},
					states: {
						normal: {
							filter: {
								type: 'none',
								value: 0
							}
						},
						hover: {
							filter: {
								type: 'none',
								value: 0
							}
						},
						active: {
							allowMultipleDataPointsSelection: false,
							filter: {
								type: 'none',
								value: 0
							}
						}
					},
					tooltip: {
						style: {
							fontSize: '12px'
						},
						y: {
							formatter: function(val) {
								return "KES" + val + " thousands"
							}
						}
					},
					colors: [lightColor],
					grid: {
						borderColor: borderColor,
						strokeDashArray: 4,
						yaxis: {
							lines: {
								show: true
							}
						}
					},
					markers: {
						strokeColor: baseColor,
						strokeWidth: 3
					}
				};

				var chart = new ApexCharts(element, options);
				chart.render();
			},
		};

		// Webpack support
		if (typeof module !== 'undefined') {
			module.exports = KTWidgets2;
		}

		// On document ready
		KTUtil.onDOMContentLoaded(function() {
			KTWidgets2.init();
		})
	</script>
	<!--end::Javascript-->
</body>
<!--end::Body-->

<!--apps/projects/project.html :59:41-->

</html>