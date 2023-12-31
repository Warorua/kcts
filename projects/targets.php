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
								<?php include $filePath . 'projects/elements/details_block.php' ?>
								<!--end::Details-->
								<div class="separator"></div>
								<!--begin::Nav-->
								<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6" href="<?php echo $filePathScript ?>project/overview/<?php echo $last_segment ?>">Overview</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item">
										<a class="nav-link text-active-primary py-5 me-6 active" href="<?php echo $filePathScript ?>project/targets/<?php echo $last_segment ?>">Project Gallery</a>
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
						<!--begin::gallery-->
						<div class="mb-lg-n15 position-relative z-index-2">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Card-->
								<div class="card" style="filter: drop-shadow(0px 0px 40px rgba(68, 81, 96, 0.08))">
									<!--begin::Card body-->
									<div class="card-body p-lg-20">
										<!--begin::Heading-->
										<div class="text-center mb-5 mb-lg-10">
											<!--begin::Title-->
											<h3 class="fs-2hx text-dark mb-5" id="portfolio" data-kt-scroll-offset="{default: 100, lg: 150}">Project Gallery</h3>
											<!--end::Title-->
										</div>
										<!--end::Heading-->
										<!--begin::Tabs wrapper-->
										<div class="d-flex flex-center mb-5 mb-lg-15">
											<!--begin::Tabs-->
											<ul class="nav border-transparent flex-center fs-5 fw-bold">
												<li class="nav-item">
													<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_latest">Latest Uploads</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6 active" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_web_design">By Anthony</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_mobile_apps">By Alex</a>
												</li>
												<li class="nav-item">
													<a class="nav-link text-gray-500 text-active-primary px-3 px-lg-6" href="#" data-bs-toggle="tab" data-bs-target="#kt_landing_projects_development">By Seema</a>
												</li>
											</ul>
											<!--end::Tabs-->
										</div>
										<!--end::Tabs wrapper-->
										<!--begin::Tabs content-->
										<div class="tab-content">
											<!--begin::Tab pane-->
											<div class="tab-pane fade" id="kt_landing_projects_latest">
												<!--begin::Row-->
												<div class="row g-10">
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Item-->
														<a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-20.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-23.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Row-->
														<div class="row g-10 mb-10">
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-22.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-21.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
														<!--begin::Item-->
														<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-20.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Tab pane-->
											<!--begin::Tab pane-->
											<div class="tab-pane fade active show" id="kt_landing_projects_web_design">
												<!--begin::Row-->
												<div class="row g-10">
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Item-->
														<a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-11.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-11.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Row-->
														<div class="row g-10 mb-10">
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-12.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-21.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
														<!--begin::Item-->
														<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-20.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-20.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Tab pane-->
											<!--begin::Tab pane-->
											<div class="tab-pane fade" id="kt_landing_projects_mobile_apps">
												<!--begin::Row-->
												<div class="row g-10">
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Row-->
														<div class="row g-10 mb-10">
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-16.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-16.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-12.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-12.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
														<!--begin::Item-->
														<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-15.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-15.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Item-->
														<a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-23.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-23.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Tab pane-->
											<!--begin::Tab pane-->
											<div class="tab-pane fade" id="kt_landing_projects_development">
												<!--begin::Row-->
												<div class="row g-10">
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Item-->
														<a class="d-block card-rounded overlay h-lg-100" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-15.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-lg-100 min-h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-15.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-lg-6">
														<!--begin::Row-->
														<div class="row g-10 mb-10">
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-22.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-22.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-lg-6">
																<!--begin::Item-->
																<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x600/img-21.jpg">
																	<!--begin::Image-->
																	<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-21.jpg')"></div>
																	<!--end::Image-->
																	<!--begin::Action-->
																	<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																		<i class="bi bi-eye-fill fs-3x text-white"></i>
																	</div>
																	<!--end::Action-->
																</a>
																<!--end::Item-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Row-->
														<!--begin::Item-->
														<a class="d-block card-rounded overlay" data-fslightbox="lightbox-projects" href="assets/media/stock/600x400/img-14.jpg">
															<!--begin::Image-->
															<div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded h-250px" style="background-image:url('<?php echo $filePathScript ?>assets/media/stock/600x600/img-14.jpg')"></div>
															<!--end::Image-->
															<!--begin::Action-->
															<div class="overlay-layer card-rounded bg-dark bg-opacity-25">
																<i class="bi bi-eye-fill fs-3x text-white"></i>
															</div>
															<!--end::Action-->
														</a>
														<!--end::Item-->
													</div>
													<!--end::Col-->
												</div>
												<!--end::Row-->
											</div>
											<!--end::Tab pane-->
										</div>
										<!--end::Tabs content-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Card-->
							</div>
							<!--end::Container-->
						</div>
						<!--End gallery-->
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
	<!--end::Javascript-->
</body>
<!--end::Body-->

<!--apps/projects/targets.html :59:42-->

</html>