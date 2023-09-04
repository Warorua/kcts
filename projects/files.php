<?php
include '../includes/head.php';
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
									<img alt="Logo" src="../assets/media/logos/logo-3.png" class="h-35px" />
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
									<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
										<!--begin::Image-->
										<div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
											<img class="mw-50px mw-lg-75px" src="../assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
										</div>
										<!--end::Image-->
										<!--begin::Wrapper-->
										<div class="flex-grow-1">
											<!--begin::Head-->
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<!--begin::Details-->
												<div class="d-flex flex-column">
													<!--begin::Status-->
													<div class="d-flex align-items-center mb-1">
														<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">Project Dashboard</a>
														<span class="badge badge-light-success me-auto">In Progress</span>
													</div>
													<!--end::Status-->
													<!--begin::Description-->
													<div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">Enhancement of healthcare accessibility in Kakamega County</div>
													<!--end::Description-->
												</div>
												<!--end::Details-->
												<!--begin::Actions-->
												
												<!--end::Actions-->
											</div>
											<!--end::Head-->
											<!--begin::Info-->
											<div class="d-flex flex-wrap justify-content-start">
												<!--begin::Stats-->
												<div class="d-flex flex-wrap">
													<!--begin::Stat-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-4 fw-bolder">29 Jan, 2024</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-bold fs-6 text-gray-400">Due Date</div>
														<!--end::Label-->
													</div>
													<!--end::Stat-->
													<!--begin::Stat-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">Sub-County</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-bold fs-6 text-gray-400">Lurambi</div>
														<!--end::Label-->
													</div>
													<!--end::Stat-->
													<!--begin::Stat-->
													<div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
														<!--begin::Number-->
														<div class="d-flex align-items-center">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
															<span class="svg-icon svg-icon-3 svg-icon-success me-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
																	<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="15000" data-kt-countup-prefix="$">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-bold fs-6 text-gray-400">Budget Spent</div>
														<!--end::Label-->
													</div>
													<!--end::Stat-->
												</div>
												<!--end::Stats-->
												<!--begin::Users-->
												<div class="symbol-group symbol-hover mb-3">
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Alan Warden">
														<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
													</div>
													<!--end::User-->
    												<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Alan Warden">
														<span class="symbol-label bg-warning text-inverse-warning fw-bolder">S</span>
													</div>
													<!--end::User-->
   													 <!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="" data-bs-original-title="Alan Warden">
														<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
													</div>
													<!--end::User-->
													<!--begin::All users-->
													<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="View more users">+2</span>
													</a>
													<!--end::All users-->
												</div>
												<!--end::Users-->
											</div>
											<!--end::Info-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Details-->
									<div class="separator"></div>
									<!--begin::Nav-->
									<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bolder">
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6 " href="project.php">Overview</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="targets.php">Project Gallery</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="budget.php">Communication</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="users.php">Recommendations</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6 active" href="files.php">Files</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="settings.php">Settings</a>
										</li>
										<!--end::Nav item-->
									</ul>
									<!--end::Nav-->
								</div>
							</div>
							<!--end::Navbar-->
							<!--begin::Toolbar-->
							<div class="d-flex flex-wrap flex-stack my-5">
								<!--begin::Heading-->
								<h3 class="fw-bolder my-2">Project Files 
								<span class="fs-6 text-gray-400 fw-bold ms-1">30+</span></h3>
								<!--end::Heading-->
								<!--begin::Controls-->
								<div class="d-flex my-2">
									<!--begin::Search-->
									<div class="d-flex align-items-center position-relative me-4">
										<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
										<span class="svg-icon svg-icon-3 position-absolute translate-middle-y top-50 ms-4">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
												<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<input type="text" id="kt_filter_search" class="form-control form-control-sm form-control-solid bg-body fw-bold fs-7 w-150px ps-11" placeholder="Search" />
									</div>
									<!--end::Search-->
									<a href="../file-manager/folders.html" class='btn btn-primary btn-sm fw-bolder'>File Manager</a>
								</div>
								<!--end::Controls-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Row-->
							<div class="row g-6 g-xl-9 mb-6 mb-xl-9">
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/pdf.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Project Documents</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">3 days ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/doc.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Budget Purposal</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">3 days ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/css.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Legal Documents</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">4 days ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/ai.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Agreement</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">5 days ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/sql.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Project Details</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">1 week ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/xml.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Project Presentation</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">2 weeks ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100">
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-center text-center flex-column p-8">
											<!--begin::Name-->
											<a href="../file-manager/files.html" class="text-gray-800 text-hover-primary d-flex flex-column">
												<!--begin::Image-->
												<div class="symbol symbol-60px mb-5">
													<img src="../assets/media/svg/files/tif.svg" alt="" />
												</div>
												<!--end::Image-->
												<!--begin::Title-->
												<div class="fs-5 fw-bolder mb-2">Project flow</div>
												<!--end::Title-->
											</a>
											<!--end::Name-->
											<!--begin::Description-->
											<div class="fs-7 fw-bold text-gray-400">3 weeks ago</div>
											<!--end::Description-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-4 col-xl-3">
									<!--begin::Card-->
									<div class="card h-100 flex-center bg-light-primary border-primary border border-dashed p-8">
										<!--begin::Image-->
										<img src="../assets/media/svg/files/upload.svg" class="mb-5" alt="" />
										<!--end::Image-->
										<!--begin::Link-->
										<a href="#" class="text-hover-primary fs-5 fw-bolder mb-2">File Upload</a>
										<!--end::Link-->
										<!--begin::Description-->
										<div class="fs-7 fw-bold text-gray-400">Drag and drop files here</div>
										<!--end::Description-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Col-->
							</div>
							<!--end:Row-->
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
		<?php include '../includes/modals.php' ?>
		<!--end::Modals-->
		<!--begin::Javascript-->
		<?php include '../includes/scripts.php' ?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

<!--apps/projects/files.html :59:47-->
</html>