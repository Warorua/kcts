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
							<div class="card mb-5 mb-xxl-8">
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
														<a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3">CRM Dashboard</a>
														<span class="badge badge-light-success me-auto">In Progress</span>
													</div>
													<!--end::Status-->
													<!--begin::Description-->
													<div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400">#1 Tool to get started with Web Apps any Kind &amp; size</div>
													<!--end::Description-->
												</div>
												<!--end::Details-->
												<!--begin::Actions-->
												<div class="d-flex mb-4">
													<a href="#" class="btn btn-sm btn-bg-light btn-active-color-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">Add User</a>
													<a href="#" class="btn btn-sm btn-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Target</a>
													<!--begin::Menu-->
													<div class="me-0">
														<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="bi bi-three-dots fs-3"></i>
														</button>
														<!--begin::Menu 3-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
															<!--begin::Heading-->
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
															</div>
															<!--end::Heading-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Create Invoice</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link flex-stack px-3">Create Payment 
																<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Generate Bill</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
																<a href="#" class="menu-link px-3">
																	<span class="menu-title">Subscription</span>
																	<span class="menu-arrow"></span>
																</a>
																<!--begin::Menu sub-->
																<div class="menu-sub menu-sub-dropdown w-175px py-4">
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Plans</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Billing</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<a href="#" class="menu-link px-3">Statements</a>
																	</div>
																	<!--end::Menu item-->
																	<!--begin::Menu separator-->
																	<div class="separator my-2"></div>
																	<!--end::Menu separator-->
																	<!--begin::Menu item-->
																	<div class="menu-item px-3">
																		<div class="menu-content px-3">
																			<!--begin::Switch-->
																			<label class="form-check form-switch form-check-custom form-check-solid">
																				<!--begin::Input-->
																				<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
																				<!--end::Input-->
																				<!--end::Label-->
																				<span class="form-check-label text-muted fs-6">Recuring</span>
																				<!--end::Label-->
																			</label>
																			<!--end::Switch-->
																		</div>
																	</div>
																	<!--end::Menu item-->
																</div>
																<!--end::Menu sub-->
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3 my-1">
																<a href="#" class="menu-link px-3">Settings</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu 3-->
													</div>
													<!--end::Menu-->
												</div>
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
															<div class="fs-4 fw-bolder">29 Jan, 2022</div>
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
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
															<span class="svg-icon svg-icon-3 svg-icon-danger me-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																	<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="75">0</div>
														</div>
														<!--end::Number-->
														<!--begin::Label-->
														<div class="fw-bold fs-6 text-gray-400">Open Tasks</div>
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
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
														<span class="symbol-label bg-warning text-inverse-warning fw-bolder">A</span>
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
														<img alt="Pic" src="../assets/media/avatars/300-11.jpg" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michelle Swanston">
														<img alt="Pic" src="../assets/media/avatars/300-7.jpg" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Francis Mitcham">
														<img alt="Pic" src="../assets/media/avatars/300-20.jpg" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
														<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
														<img alt="Pic" src="../assets/media/avatars/300-2.jpg" />
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
														<span class="symbol-label bg-info text-inverse-info fw-bolder">P</span>
													</div>
													<!--end::User-->
													<!--begin::User-->
													<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
														<img alt="Pic" src="../assets/media/avatars/300-12.jpg" />
													</div>
													<!--end::User-->
													<!--begin::All users-->
													<a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
														<span class="symbol-label bg-dark text-inverse-dark fs-8 fw-bolder" data-bs-toggle="tooltip" data-bs-trigger="hover" title="View more users">+42</span>
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
											<a class="nav-link text-active-primary py-5 me-6" href="project.html">Overview</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="targets.html">Targets</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="budget.html">Budget</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="users.html">Users</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="files.html">Files</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6 active" href="activity.html">Activity</a>
										</li>
										<!--end::Nav item-->
										<!--begin::Nav item-->
										<li class="nav-item">
											<a class="nav-link text-active-primary py-5 me-6" href="settings.html">Settings</a>
										</li>
										<!--end::Nav item-->
									</ul>
									<!--end::Nav-->
								</div>
							</div>
							<!--end::Navbar-->
							<!--begin::Timeline-->
							<div class="card">
								<!--begin::Card head-->
								<div class="card-header card-header-stretch">
									<!--begin::Title-->
									<div class="card-title d-flex align-items-center">
										<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-primary me-3 lh-0">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
												<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
												<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<h3 class="fw-bolder m-0 text-gray-800">Jan 23, 2022</h3>
									</div>
									<!--end::Title-->
									<!--begin::Toolbar-->
									<div class="card-toolbar m-0">
										<!--begin::Tab nav-->
										<ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bolder" role="tablist">
											<li class="nav-item" role="presentation">
												<a id="kt_activity_today_tab" class="nav-link justify-content-center text-active-gray-800 active" data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
											</li>
											<li class="nav-item" role="presentation">
												<a id="kt_activity_week_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
											</li>
											<li class="nav-item" role="presentation">
												<a id="kt_activity_month_tab" class="nav-link justify-content-center text-active-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
											</li>
											<li class="nav-item" role="presentation">
												<a id="kt_activity_year_tab" class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800" data-bs-toggle="tab" role="tab" href="#kt_activity_year">2022</a>
											</li>
										</ul>
										<!--end::Tab nav-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Card head-->
								<!--begin::Card body-->
								<div class="card-body">
									<!--begin::Tab Content-->
									<div class="tab-content">
										<!--begin::Tab panel-->
										<div id="kt_activity_today" class="card-body p-0 tab-pane fade show active" role="tabpanel" aria-labelledby="kt_activity_today_tab">
											<!--begin::Timeline-->
											<div class="timeline">
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px me-4">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
																	<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																	<img src="../assets/media/avatars/300-14.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<!--begin::Record-->
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
																<!--begin::Title-->
																<a href="project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting with customer</a>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="min-w-175px pe-2">
																	<span class="badge badge-light text-muted">Application Design</span>
																</div>
																<!--end::Label-->
																<!--begin::Users-->
																<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
																	<!--begin::User-->
																	<div class="symbol symbol-circle symbol-25px">
																		<img src="../assets/media/avatars/300-2.jpg" alt="img" />
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="symbol symbol-circle symbol-25px">
																		<img src="../assets/media/avatars/300-14.jpg" alt="img" />
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="symbol symbol-circle symbol-25px">
																		<div class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">A</div>
																	</div>
																	<!--end::User-->
																</div>
																<!--end::Users-->
																<!--begin::Progress-->
																<div class="min-w-125px pe-2">
																	<span class="badge badge-light-primary">In Progress</span>
																</div>
																<!--end::Progress-->
																<!--begin::Action-->
																<a href="project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
																<!--end::Action-->
															</div>
															<!--end::Record-->
															<!--begin::Record-->
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
																<!--begin::Title-->
																<a href="project.html" class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project Delivery Preparation</a>
																<!--end::Title-->
																<!--begin::Label-->
																<div class="min-w-175px">
																	<span class="badge badge-light text-muted">CRM System Development</span>
																</div>
																<!--end::Label-->
																<!--begin::Users-->
																<div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
																	<!--begin::User-->
																	<div class="symbol symbol-circle symbol-25px">
																		<img src="../assets/media/avatars/300-20.jpg" alt="img" />
																	</div>
																	<!--end::User-->
																	<!--begin::User-->
																	<div class="symbol symbol-circle symbol-25px">
																		<div class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">B</div>
																	</div>
																	<!--end::User-->
																</div>
																<!--end::Users-->
																<!--begin::Progress-->
																<div class="min-w-125px">
																	<span class="badge badge-light-success">Completed</span>
																</div>
																<!--end::Progress-->
																<!--begin::Action-->
																<a href="project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>
																<!--end::Action-->
															</div>
															<!--end::Record-->
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
																	<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n2">
														<!--begin::Timeline heading-->
														<div class="overflow-auto pe-3">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
																	<img src="../assets/media/avatars/300-1.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																	<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="mb-5 pe-3">
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																	<img src="../assets/media/avatars/300-23.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="" class="w-30px me-3" src="../assets/media/svg/files/pdf.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="project.html" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">1.9mb</div>
																		<!--end::Number-->
																	</div>
																	<!--begin::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/doc.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">18kb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/css.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">20mb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Icon-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Task 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																	<img src="../assets/media/avatars/300-14.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																	<img src="../assets/media/avatars/300-2.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-29.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-31.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-40.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																	<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New case 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="overflow-auto pb-5">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center mt-1 fs-6">
																	<!--begin::Info-->
																	<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																	<!--end::Info-->
																	<!--begin::User-->
																	<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
																	<!--end::User-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">You have received a new order:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
																	<img src="../assets/media/avatars/300-4.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<!--begin::Notice-->
															<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
																<!--begin::Icon-->
																<!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
																<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																		<path opacity="0.3" d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z" fill="currentColor" />
																		<path d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--end::Icon-->
																<!--begin::Wrapper-->
																<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
																	<!--begin::Content-->
																	<div class="mb-3 mb-md-0 fw-bold">
																		<h4 class="text-gray-900 fw-bolder">Database Backup Process Completed!</h4>
																		<div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
																	</div>
																	<!--end::Content-->
																	<!--begin::Action-->
																	<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
																	<!--end::Action-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Notice-->
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
																	<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
																	<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New order 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div id="kt_activity_week" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_week_tab">
											<!--begin::Timeline-->
											<div class="timeline">
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
																	<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n2">
														<!--begin::Timeline heading-->
														<div class="overflow-auto pe-3">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
																	<img src="../assets/media/avatars/300-1.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																	<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="mb-5 pe-3">
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																	<img src="../assets/media/avatars/300-23.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="" class="w-30px me-3" src="../assets/media/svg/files/pdf.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="project.html" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">1.9mb</div>
																		<!--end::Number-->
																	</div>
																	<!--begin::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/doc.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">18kb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/css.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">20mb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Icon-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Task 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																	<img src="../assets/media/avatars/300-14.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																	<img src="../assets/media/avatars/300-2.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-29.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-31.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-40.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																	<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New case 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="overflow-auto pb-5">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center mt-1 fs-6">
																	<!--begin::Info-->
																	<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																	<!--end::Info-->
																	<!--begin::User-->
																	<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
																	<!--end::User-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div id="kt_activity_month" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_month_tab">
											<!--begin::Timeline-->
											<div class="timeline">
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																	<img src="../assets/media/avatars/300-2.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-29.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-31.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-40.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																	<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New case 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="overflow-auto pb-5">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center mt-1 fs-6">
																	<!--begin::Info-->
																	<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																	<!--end::Info-->
																	<!--begin::User-->
																	<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
																	<!--end::User-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
																	<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
																	<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New order 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z" fill="currentColor" />
																	<path d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n2">
														<!--begin::Timeline heading-->
														<div class="overflow-auto pe-3">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
																	<img src="../assets/media/avatars/300-1.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																	<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="mb-5 pe-3">
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																	<img src="../assets/media/avatars/300-23.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="" class="w-30px me-3" src="../assets/media/svg/files/pdf.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="project.html" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">1.9mb</div>
																		<!--end::Number-->
																	</div>
																	<!--begin::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/doc.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">18kb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/css.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">20mb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Icon-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Task 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																	<img src="../assets/media/avatars/300-14.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end::Tab panel-->
										<!--begin::Tab panel-->
										<div id="kt_activity_year" class="card-body p-0 tab-pane fade show" role="tabpanel" aria-labelledby="kt_activity_year_tab">
											<!--begin::Timeline-->
											<div class="timeline">
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z" fill="currentColor" />
																	<path opacity="0.3" d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="mb-5 pe-3">
															<!--begin::Title-->
															<a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
																	<img src="../assets/media/avatars/300-23.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="" class="w-30px me-3" src="../assets/media/svg/files/pdf.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="project.html" class="fs-6 text-hover-primary fw-bolder">Finance KPI App Guidelines</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">1.9mb</div>
																		<!--end::Number-->
																	</div>
																	<!--begin::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center pe-10 pe-lg-20">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/doc.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Client UAT Testing Results</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">18kb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-aligns-center">
																	<!--begin::Icon-->
																	<img alt="/metronic8/demo9/../demo9/apps/projects/project.html" class="w-30px me-3" src="../assets/media/svg/files/css.svg" />
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<div class="ms-1 fw-bold">
																		<!--begin::Desc-->
																		<a href="#" class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
																		<!--end::Desc-->
																		<!--begin::Number-->
																		<div class="text-gray-400">20mb</div>
																		<!--end::Number-->
																	</div>
																	<!--end::Icon-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z" fill="currentColor" />
																	<path d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">Task 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>merged with 
															<a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads Pro Admin Dashboard project:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
																	<img src="../assets/media/avatars/300-14.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
																	<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
																	<img src="../assets/media/avatars/300-2.jpg" alt="img" />
																</div>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
														<!--begin::Timeline details-->
														<div class="overflow-auto pb-5">
															<div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-29.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay me-10">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-31.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="overlay">
																	<!--begin::Image-->
																	<div class="overlay-wrapper">
																		<img alt="img" class="rounded w-150px" src="../assets/media/stock/600x400/img-40.jpg" />
																	</div>
																	<!--end::Image-->
																	<!--begin::Link-->
																	<div class="overlay-layer bg-dark bg-opacity-10 rounded">
																		<a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
																	</div>
																	<!--end::Link-->
																</div>
																<!--end::Item-->
															</div>
														</div>
														<!--end::Timeline details-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																	<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mb-10 mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New case 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is assigned to you in Multi-platform Database Design project</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="overflow-auto pb-5">
																<!--begin::Wrapper-->
																<div class="d-flex align-items-center mt-1 fs-6">
																	<!--begin::Info-->
																	<div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
																	<!--end::Info-->
																	<!--begin::User-->
																	<a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
																	<!--end::User-->
																</div>
																<!--end::Wrapper-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
												<!--begin::Timeline item-->
												<div class="timeline-item">
													<!--begin::Timeline line-->
													<div class="timeline-line w-40px"></div>
													<!--end::Timeline line-->
													<!--begin::Timeline icon-->
													<div class="timeline-icon symbol symbol-circle symbol-40px">
														<div class="symbol-label bg-light">
															<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
															<span class="svg-icon svg-icon-2 svg-icon-gray-500">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
																	<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
																	<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
													</div>
													<!--end::Timeline icon-->
													<!--begin::Timeline content-->
													<div class="timeline-content mt-n1">
														<!--begin::Timeline heading-->
														<div class="pe-3 mb-5">
															<!--begin::Title-->
															<div class="fs-5 fw-bold mb-2">New order 
															<a href="#" class="text-primary fw-bolder me-1">#67890</a>is placed for Workshow Planning &amp; Budget Estimation</div>
															<!--end::Title-->
															<!--begin::Description-->
															<div class="d-flex align-items-center mt-1 fs-6">
																<!--begin::Info-->
																<div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
																<!--end::Info-->
																<!--begin::User-->
																<a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
																<!--end::User-->
															</div>
															<!--end::Description-->
														</div>
														<!--end::Timeline heading-->
													</div>
													<!--end::Timeline content-->
												</div>
												<!--end::Timeline item-->
											</div>
											<!--end::Timeline-->
										</div>
										<!--end::Tab panel-->
									</div>
									<!--end::Tab Content-->
								</div>
								<!--end::Card body-->
							</div>
							<!--end::Timeline-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<?php include '../includes/footer.php' ?>
					<!--end::Footer-->
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
		<div class="engage-toolbar d-flex position-fixed px-5 fw-bolder zindex-2 top-50 end-0 transform-90 mt-20 gap-2">
			<!--begin::Demos drawer toggle-->
			<button id="kt_engage_demos_toggle" class="engage-demos-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm fs-6 px-4 rounded-top-0" title="Check out 22 more demos" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
				<span id="kt_engage_demos_label">Demos</span>
			</button>
			<!--end::Demos drawer toggle-->
			<!--begin::Help drawer toggle-->
			<button id="kt_help_toggle" class="engage-help-toggle btn btn-flex h-35px bg-body btn-color-gray-700 btn-active-color-gray-900 shadow-sm px-5 rounded-top-0" title="Learn &amp; Get Inspired" data-bs-toggle="tooltip" data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">Help</button>
			<!--end::Help drawer toggle-->
			<!--begin::Purchase link-->
			<a href="https://1.envato.market/EA4JP" target="_blank" class="engage-purchase-link btn btn-color-gray-700 bg-body btn-active-color-gray-900' btn-flex h-35px px-5 shadow-sm rounded-top-0">Buy now</a>
			<!--end::Purchase link-->
		</div>
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

<!--apps/projects/activity.html :59:48-->
</html>