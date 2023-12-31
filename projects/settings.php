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
	<!--Begin::Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!--End::Google Tag Manager (noscript) -->
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
										<a class="nav-link text-active-primary py-5 me-6 active" href="<?php echo $filePathScript ?>project/settings/<?php echo $last_segment ?>">Settings</a>
									</li>
									<!--end::Nav item-->
								</ul>
								<!--end::Nav-->
							</div>
						</div>
						<!--end::Navbar-->
						<!--begin::Card-->
						<div class="card">
							<!--begin::Card header-->
							<div class="card-header">
								<!--begin::Card title-->
								<div class="card-title fs-3 fw-bolder">Project Settings</div>
								<!--end::Card title-->
							</div>
							<!--end::Card header-->
							<!--begin::Form-->
							<form id="kt_project_settings_form" class="form">
								<!--begin::Card body-->
								<div class="card-body p-9">
									<!--begin::Row-->
									<div class="row mb-5">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Project Logo</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Image input-->
											<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?php echo $filePathScript ?>assets/media/svg/avatars/blank.svg')">
												<!--begin::Preview existing avatar-->
												<div class="image-input-wrapper w-125px h-125px bgi-position-center" style="background-size: 75%; background-image: url('<?php echo $filePathScript ?>assets/media/svg/brand-logos/volicity-9.svg')"></div>
												<!--end::Preview existing avatar-->
												<!--begin::Label-->
												<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="bi bi-pencil-fill fs-7"></i>
													<!--begin::Inputs-->
													<input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" />
													<!--end::Inputs-->
												</label>
												<!--end::Label-->
												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-white shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Project Name</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-9 fv-row">
											<input type="text" class="form-control form-control-solid" name="name" value="Kakamega County Health Center Expansion Project" />
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Sub-County</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-9 fv-row">
											<input type="text" class="form-control form-control-solid" name="type" value="Lurambi" />
										</div>
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Project Description</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-9 fv-row">
											<textarea name="description" class="form-control form-control-solid h-100px">Enhancing healthcare accessibility by expanding and upgrading our county health centers, ensuring quality medical services for all residents.</textarea>
										</div>
										<!--begin::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Due Date</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-9 fv-row">
											<div class="position-relative d-flex align-items-center">
												<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
												<span class="svg-icon position-absolute ms-4 mb-1 svg-icon-2">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
														<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
														<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
												<input class="form-control form-control-solid ps-12" name="date" placeholder="Pick a date" id="kt_datepicker_1" />
											</div>
										</div>
										<!--begin::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row mb-8">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Notifications</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-9">
											<div class="d-flex fw-bold h-100">
												<div class="form-check form-check-custom form-check-solid me-9">
													<input class="form-check-input" type="checkbox" value="" id="email" />
													<label class="form-check-label ms-3" for="email">Email</label>
												</div>
												<div class="form-check form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="" id="phone" checked="checked" />
													<label class="form-check-label ms-3" for="phone">Phone</label>
												</div>
											</div>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
									<!--begin::Row-->
									<div class="row">
										<!--begin::Col-->
										<div class="col-xl-3">
											<div class="fs-6 fw-bold mt-2 mb-3">Status</div>
										</div>
										<!--end::Col-->
										<!--begin::Col-->
										<div class="col-xl-9">
											<div class="form-check form-switch form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" id="status" name="status" checked="checked" />
												<label class="form-check-label fw-bold text-gray-400 ms-3" for="status">Active</label>
											</div>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Row-->
								</div>
								<!--end::Card body-->
								<!--begin::Card footer-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
									<button type="submit" class="btn btn-primary" id="kt_project_settings_submit">Save Changes</button>
								</div>
								<!--end::Card footer-->
							</form>
							<!--end:Form-->
						</div>
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
	<!--end::Javascript-->
</body>
<!--end::Body-->

<!--apps/projects/settings.html :59:50-->

</html>