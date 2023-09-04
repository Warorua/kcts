<?php
if (file_exists('../includes/head.php')) {
	$filePath = '../';
} elseif (file_exists('../../includes/head.php')) {
	$filePath = '../../';
}elseif (file_exists('../../../includes/head.php')) {
	$filePath = '../../../';
}elseif (file_exists('../../../../includes/head.php')) {
	$filePath = '../../../../';
}elseif (file_exists('../../../../../includes/head.php')) {
	$filePath = '../../../../../';
} else {
	$filePath = './';
}
$filePath.'includes/head.php';
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
				<?php $filePath.'includes/menu.php' ?>
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
									<img alt="Logo" src="assets/media/logos/icon.png" class="h-35px" />
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
					
					<?php $filePath.'includes/header.php' ?>
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
													<img src="../../../assets/media/avatars/300-6.jpg" alt="image">
												</div>
												<!--end::Avatar-->
												<!--begin::Name-->
												<a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bolder mb-3">SS Hanita</a>
												<!--end::Name-->
												<!--begin::Position-->
												<div class="mb-9">
													<!--begin::Badge-->
													<div class="badge badge-lg badge-light-primary d-inline">County Admin 

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
															<span class="w-75px">50</span>
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
															<span class="w-50px">40</span>
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
															<span class="w-50px">10</span>
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
												</span></div>
												<span data-bs-toggle="tooltip" data-bs-trigger="hover" title="" data-bs-original-title="Edit customer details">
													<a href="#" class="btn btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_details">Edit</a>
												</span>
											</div>
											<!--end::Details toggle-->
											<div class="separator"></div>
											<!--begin::Details content-->
											<div id="kt_user_view_details" class="collapse show" style="">
												<div class="pb-5 fs-6">
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Account ID</div>
													<div class="text-gray-600">ID-45453423</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Email</div>
													<div class="text-gray-600">
														<a href="#" class="text-gray-600 text-hover-primary">ss.test@KCTS.com</a>
													</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Address</div>
													<div class="text-gray-600">TEST<br>KAKAMEGA<br>Africa</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Language</div>
													<div class="text-gray-600">English</div>
													<!--begin::Details item-->
													<!--begin::Details item-->
													<div class="fw-bolder mt-5">Last Login</div>
													<div class="text-gray-600">10 Aug 2023, 2:40 pm</div>
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
										
										<!--end:::Tab item-->
									</ul>
									<!--end:::Tabs-->
									<!--begin:::Tab content-->
									<div class="tab-content " id="myTabContent">
										<!--begin:::Tab pane-->
										<div class="tab-pane fade active show" id="kt_user_view_overview_tab" role="tabpanel">
											<!--begin::Card-->
											
											<!--end::Card-->
											<!--begin::Tasks-->
											
											<!--end::Tasks-->
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
																	<td>smith@kpmg.com</td>
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
																	<td>Administrator</td>
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
										
										<!--end:::Tab pane-->
									</div>
									<!--end:::Tab content-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Layout-->
							<!--begin::Modals-->
							<!--begin::Modal - Update user details-->
							<div class="modal fade" id="kt_modal_update_details" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Form-->
										<form class="form" action="#" id="kt_modal_update_user_form">
											<!--begin::Modal header-->
											<div class="modal-header" id="kt_modal_update_user_header">
												<!--begin::Modal title-->
												<h2 class="fw-bolder">Update User Details</h2>
												<!--end::Modal title-->
												<!--begin::Close-->
												<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
													<span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
															<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Close-->
											</div>
											<!--end::Modal header-->
											<!--begin::Modal body-->
											<div class="modal-body py-10 px-lg-17">
												<!--begin::Scroll-->
												<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_user_header" data-kt-scroll-wrappers="#kt_modal_update_user_scroll" data-kt-scroll-offset="300px" style="max-height: 67px;">
													<!--begin::User toggle-->
													<div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_user_info" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_user_info">User Information 
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<!--end::User toggle-->
													<!--begin::User form-->
													<div id="kt_modal_update_user_user_info" class="collapse show">
														<!--begin::Input group-->
														<div class="mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span>Update Avatar</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allowed file types: png, jpg, jpeg." aria-label="Allowed file types: png, jpg, jpeg."></i>
															</label>
															<!--end::Label-->
															<!--begin::Image input wrapper-->
															<div class="mt-1">
																<!--begin::Image input-->
																<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('../../../assets/media/svg/avatars/blank.svg')">
																	<!--begin::Preview existing avatar-->
																	<div class="image-input-wrapper w-125px h-125px" style="background-image: url(/metronic8/demo9/assets/media/avatars/300-6.jpg"></div>
																	<!--end::Preview existing avatar-->
																	<!--begin::Edit-->
																	<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="" data-bs-original-title="Change avatar">
																		<i class="bi bi-pencil-fill fs-7"></i>
																		<!--begin::Inputs-->
																		<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
																		<input type="hidden" name="avatar_remove">
																		<!--end::Inputs-->
																	</label>
																	<!--end::Edit-->
																	<!--begin::Cancel-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="" data-bs-original-title="Cancel avatar">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Cancel-->
																	<!--begin::Remove-->
																	<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="" data-bs-original-title="Remove avatar">
																		<i class="bi bi-x fs-2"></i>
																	</span>
																	<!--end::Remove-->
																</div>
																<!--end::Image input-->
															</div>
															<!--end::Image input wrapper-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="name" value="Emma Smith">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span>Email</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Email address must be active" aria-label="Email address must be active"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="email" class="form-control form-control-solid" placeholder="" name="email" value="smith@kpmg.com">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-7">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Description</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text" class="form-control form-control-solid" placeholder="" name="description">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row mb-15">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Language</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="language" aria-label="Select a Language" data-control="select2" data-placeholder="Select a Language..." class="form-select form-select-solid select2-hidden-accessible" data-dropdown-parent="#kt_modal_update_details" data-select2-id="select2-data-22-itqw" tabindex="-1" aria-hidden="true">
																<option data-select2-id="select2-data-24-b1mx"></option>
																<option value="id">Bahasa Indonesia - Indonesian</option>
																<option value="msa">Bahasa Melayu - Malay</option>
																<option value="ca">Català - Catalan</option>
																<option value="cs">Čeština - Czech</option>
																<option value="da">Dansk - Danish</option>
																<option value="de">Deutsch - German</option>
																<option value="en">English</option>
																<option value="en-gb">English UK - British English</option>
																<option value="es">Español - Spanish</option>
																<option value="fil">Filipino</option>
																<option value="fr">Français - French</option>
																<option value="ga">Gaeilge - Irish (beta)</option>
																<option value="gl">Galego - Galician (beta)</option>
																<option value="hr">Hrvatski - Croatian</option>
																<option value="it">Italiano - Italian</option>
																<option value="hu">Magyar - Hungarian</option>
																<option value="nl">Nederlands - Dutch</option>
																<option value="no">Norsk - Norwegian</option>
																<option value="pl">Polski - Polish</option>
																<option value="pt">Português - Portuguese</option>
																<option value="ro">Română - Romanian</option>
																<option value="sk">Slovenčina - Slovak</option>
																<option value="fi">Suomi - Finnish</option>
																<option value="sv">Svenska - Swedish</option>
																<option value="vi">Tiếng Việt - Vietnamese</option>
																<option value="tr">Türkçe - Turkish</option>
																<option value="el">Ελληνικά - Greek</option>
																<option value="bg">Български език - Bulgarian</option>
																<option value="ru">Русский - Russian</option>
																<option value="sr">Српски - Serbian</option>
																<option value="uk">Українська мова - Ukrainian</option>
																<option value="he">עִבְרִית - Hebrew</option>
																<option value="ur">اردو - Urdu (beta)</option>
																<option value="ar">العربية - Arabic</option>
																<option value="fa">فارسی - Persian</option>
																<option value="mr">मराठी - Marathi</option>
																<option value="hi">हिन्दी - Hindi</option>
																<option value="bn">বাংলা - Bangla</option>
																<option value="gu">ગુજરાતી - Gujarati</option>
																<option value="ta">தமிழ் - Tamil</option>
																<option value="kn">ಕನ್ನಡ - Kannada</option>
																<option value="th">ภาษาไทย - Thai</option>
																<option value="ko">한국어 - Korean</option>
																<option value="ja">日本語 - Japanese</option>
																<option value="zh-cn">简体中文 - Simplified Chinese</option>
																<option value="zh-tw">繁體中文 - Traditional Chinese</option>
															</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-23-2o8o" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-language-2a-container" aria-controls="select2-language-2a-container"><span class="select2-selection__rendered" id="select2-language-2a-container" role="textbox" aria-readonly="true" title="Select a Language..."><span class="select2-selection__placeholder">Select a Language...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::User form-->
													<!--begin::Address toggle-->
													<div class="fw-boldest fs-3 rotate collapsible mb-7" data-bs-toggle="collapse" href="#kt_modal_update_user_address" role="button" aria-expanded="false" aria-controls="kt_modal_update_user_address">Address Details 
													<span class="ms-2 rotate-180">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
														<span class="svg-icon svg-icon-3">
															<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
															</svg>
														</span>
														<!--end::Svg Icon-->
													</span></div>
													<!--end::Address toggle-->
													<!--begin::Address form-->
													<div id="kt_modal_update_user_address" class="collapse show">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Address Line 1</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address1" value="101, Collins Street">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Address Line 2</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="address2">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">Town</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input class="form-control form-control-solid" placeholder="" name="city" value="Melbourne">
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row g-9 mb-7">
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">State / Province</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="state" value="Victoria">
																<!--end::Input-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-6 fv-row">
																<!--begin::Label-->
																<label class="fs-6 fw-bold mb-2">Post Code</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="" name="postcode" value="3000">
																<!--end::Input-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="fs-6 fw-bold mb-2">
																<span>Country</span>
																<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Country of origination" aria-label="Country of origination"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<select name="country" aria-label="Select a Country" data-control="select2" data-placeholder="Select a Country..." class="form-select form-select-solid select2-hidden-accessible" data-dropdown-parent="#kt_modal_update_details" data-select2-id="select2-data-25-vdn1" tabindex="-1" aria-hidden="true">
																<option value="" data-select2-id="select2-data-27-sr7a">Select a Country...</option>
																<option value="AF">Afghanistan</option>
																<option value="AX">Aland Islands</option>
																<option value="AL">Albania</option>
																<option value="DZ">Algeria</option>
																<option value="AS">American Samoa</option>
																<option value="AD">Andorra</option>
																<option value="AO">Angola</option>
																<option value="AI">Anguilla</option>
																<option value="AG">Antigua and Barbuda</option>
																<option value="AR">Argentina</option>
																<option value="AM">Armenia</option>
																<option value="AW">Aruba</option>
																<option value="AU">Australia</option>
																<option value="AT">Austria</option>
																<option value="AZ">Azerbaijan</option>
																<option value="BS">Bahamas</option>
																<option value="BH">Bahrain</option>
																<option value="BD">Bangladesh</option>
																<option value="BB">Barbados</option>
																<option value="BY">Belarus</option>
																<option value="BE">Belgium</option>
																<option value="BZ">Belize</option>
																<option value="BJ">Benin</option>
																<option value="BM">Bermuda</option>
																<option value="BT">Bhutan</option>
																<option value="BO">Bolivia, Plurinational State of</option>
																<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
																<option value="BA">Bosnia and Herzegovina</option>
																<option value="BW">Botswana</option>
																<option value="BR">Brazil</option>
																<option value="IO">British Indian Ocean Territory</option>
																<option value="BN">Brunei Darussalam</option>
																<option value="BG">Bulgaria</option>
																<option value="BF">Burkina Faso</option>
																<option value="BI">Burundi</option>
																<option value="KH">Cambodia</option>
																<option value="CM">Cameroon</option>
																<option value="CA">Canada</option>
																<option value="CV">Cape Verde</option>
																<option value="KY">Cayman Islands</option>
																<option value="CF">Central African Republic</option>
																<option value="TD">Chad</option>
																<option value="CL">Chile</option>
																<option value="CN">China</option>
																<option value="CX">Christmas Island</option>
																<option value="CC">Cocos (Keeling) Islands</option>
																<option value="CO">Colombia</option>
																<option value="KM">Comoros</option>
																<option value="CK">Cook Islands</option>
																<option value="CR">Costa Rica</option>
																<option value="CI">Côte d'Ivoire</option>
																<option value="HR">Croatia</option>
																<option value="CU">Cuba</option>
																<option value="CW">Curaçao</option>
																<option value="CZ">Czech Republic</option>
																<option value="DK">Denmark</option>
																<option value="DJ">Djibouti</option>
																<option value="DM">Dominica</option>
																<option value="DO">Dominican Republic</option>
																<option value="EC">Ecuador</option>
																<option value="EG">Egypt</option>
																<option value="SV">El Salvador</option>
																<option value="GQ">Equatorial Guinea</option>
																<option value="ER">Eritrea</option>
																<option value="EE">Estonia</option>
																<option value="ET">Ethiopia</option>
																<option value="FK">Falkland Islands (Malvinas)</option>
																<option value="FJ">Fiji</option>
																<option value="FI">Finland</option>
																<option value="FR">France</option>
																<option value="PF">French Polynesia</option>
																<option value="GA">Gabon</option>
																<option value="GM">Gambia</option>
																<option value="GE">Georgia</option>
																<option value="DE">Germany</option>
																<option value="GH">Ghana</option>
																<option value="GI">Gibraltar</option>
																<option value="GR">Greece</option>
																<option value="GL">Greenland</option>
																<option value="GD">Grenada</option>
																<option value="GU">Guam</option>
																<option value="GT">Guatemala</option>
																<option value="GG">Guernsey</option>
																<option value="GN">Guinea</option>
																<option value="GW">Guinea-Bissau</option>
																<option value="HT">Haiti</option>
																<option value="VA">Holy See (Vatican City State)</option>
																<option value="HN">Honduras</option>
																<option value="HK">Hong Kong</option>
																<option value="HU">Hungary</option>
																<option value="IS">Iceland</option>
																<option value="IN">India</option>
																<option value="ID">Indonesia</option>
																<option value="IR">Iran, Islamic Republic of</option>
																<option value="IQ">Iraq</option>
																<option value="IE">Ireland</option>
																<option value="IM">Isle of Man</option>
																<option value="IL">Israel</option>
																<option value="IT">Italy</option>
																<option value="JM">Jamaica</option>
																<option value="JP">Japan</option>
																<option value="JE">Jersey</option>
																<option value="JO">Jordan</option>
																<option value="KZ">Kazakhstan</option>
																<option value="KE">Kenya</option>
																<option value="KI">Kiribati</option>
																<option value="KP">Korea, Democratic People's Republic of</option>
																<option value="KW">Kuwait</option>
																<option value="KG">Kyrgyzstan</option>
																<option value="LA">Lao People's Democratic Republic</option>
																<option value="LV">Latvia</option>
																<option value="LB">Lebanon</option>
																<option value="LS">Lesotho</option>
																<option value="LR">Liberia</option>
																<option value="LY">Libya</option>
																<option value="LI">Liechtenstein</option>
																<option value="LT">Lithuania</option>
																<option value="LU">Luxembourg</option>
																<option value="MO">Macao</option>
																<option value="MG">Madagascar</option>
																<option value="MW">Malawi</option>
																<option value="MY">Malaysia</option>
																<option value="MV">Maldives</option>
																<option value="ML">Mali</option>
																<option value="MT">Malta</option>
																<option value="MH">Marshall Islands</option>
																<option value="MQ">Martinique</option>
																<option value="MR">Mauritania</option>
																<option value="MU">Mauritius</option>
																<option value="MX">Mexico</option>
																<option value="FM">Micronesia, Federated States of</option>
																<option value="MD">Moldova, Republic of</option>
																<option value="MC">Monaco</option>
																<option value="MN">Mongolia</option>
																<option value="ME">Montenegro</option>
																<option value="MS">Montserrat</option>
																<option value="MA">Morocco</option>
																<option value="MZ">Mozambique</option>
																<option value="MM">Myanmar</option>
																<option value="NA">Namibia</option>
																<option value="NR">Nauru</option>
																<option value="NP">Nepal</option>
																<option value="NL">Netherlands</option>
																<option value="NZ">New Zealand</option>
																<option value="NI">Nicaragua</option>
																<option value="NE">Niger</option>
																<option value="NG">Nigeria</option>
																<option value="NU">Niue</option>
																<option value="NF">Norfolk Island</option>
																<option value="MP">Northern Mariana Islands</option>
																<option value="NO">Norway</option>
																<option value="OM">Oman</option>
																<option value="PK">Pakistan</option>
																<option value="PW">Palau</option>
																<option value="PS">Palestinian Territory, Occupied</option>
																<option value="PA">Panama</option>
																<option value="PG">Papua New Guinea</option>
																<option value="PY">Paraguay</option>
																<option value="PE">Peru</option>
																<option value="PH">Philippines</option>
																<option value="PL">Poland</option>
																<option value="PT">Portugal</option>
																<option value="PR">Puerto Rico</option>
																<option value="QA">Qatar</option>
																<option value="RO">Romania</option>
																<option value="RU">Russian Federation</option>
																<option value="RW">Rwanda</option>
																<option value="BL">Saint Barthélemy</option>
																<option value="KN">Saint Kitts and Nevis</option>
																<option value="LC">Saint Lucia</option>
																<option value="MF">Saint Martin (French part)</option>
																<option value="VC">Saint Vincent and the Grenadines</option>
																<option value="WS">Samoa</option>
																<option value="SM">San Marino</option>
																<option value="ST">Sao Tome and Principe</option>
																<option value="SA">Saudi Arabia</option>
																<option value="SN">Senegal</option>
																<option value="RS">Serbia</option>
																<option value="SC">Seychelles</option>
																<option value="SL">Sierra Leone</option>
																<option value="SG">Singapore</option>
																<option value="SX">Sint Maarten (Dutch part)</option>
																<option value="SK">Slovakia</option>
																<option value="SI">Slovenia</option>
																<option value="SB">Solomon Islands</option>
																<option value="SO">Somalia</option>
																<option value="ZA">South Africa</option>
																<option value="KR">South Korea</option>
																<option value="SS">South Sudan</option>
																<option value="ES">Spain</option>
																<option value="LK">Sri Lanka</option>
																<option value="SD">Sudan</option>
																<option value="SR">Suriname</option>
																<option value="SZ">Swaziland</option>
																<option value="SE">Sweden</option>
																<option value="CH">Switzerland</option>
																<option value="SY">Syrian Arab Republic</option>
																<option value="TW">Taiwan, Province of China</option>
																<option value="TJ">Tajikistan</option>
																<option value="TZ">Tanzania, United Republic of</option>
																<option value="TH">Thailand</option>
																<option value="TG">Togo</option>
																<option value="TK">Tokelau</option>
																<option value="TO">Tonga</option>
																<option value="TT">Trinidad and Tobago</option>
																<option value="TN">Tunisia</option>
																<option value="TR">Turkey</option>
																<option value="TM">Turkmenistan</option>
																<option value="TC">Turks and Caicos Islands</option>
																<option value="TV">Tuvalu</option>
																<option value="UG">Uganda</option>
																<option value="UA">Ukraine</option>
																<option value="AE">United Arab Emirates</option>
																<option value="GB">United Kingdom</option>
																<option value="US">United States</option>
																<option value="UY">Uruguay</option>
																<option value="UZ">Uzbekistan</option>
																<option value="VU">Vanuatu</option>
																<option value="VE">Venezuela, Bolivarian Republic of</option>
																<option value="VN">Vietnam</option>
																<option value="VI">Virgin Islands</option>
																<option value="YE">Yemen</option>
																<option value="ZM">Zambia</option>
																<option value="ZW">Zimbabwe</option>
															</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-26-druq" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-om-container" aria-controls="select2-country-om-container"><span class="select2-selection__rendered" id="select2-country-om-container" role="textbox" aria-readonly="true" title="Select a Country..."><span class="select2-selection__placeholder">Select a Country...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Address form-->
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Modal body-->
											<!--begin::Modal footer-->
											<div class="modal-footer flex-center">
												<!--begin::Button-->
												<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
												<!--end::Button-->
												<!--begin::Button-->
												<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
													<span class="indicator-label">Submit</span>
													<span class="indicator-progress">Please wait... 
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
												</button>
												<!--end::Button-->
											</div>
											<!--end::Modal footer-->
										</form>
										<!--end::Form-->
									</div>
								</div>
							</div>
							<!--end::Modal - Update user details-->
							<!--begin::Modal - Add schedule-->
							<div class="modal fade" id="kt_modal_add_schedule" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add an Event</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_add_schedule_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Event Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="event_name" value="">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Date &amp; Time</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a date &amp; time." data-bs-original-title="" title=""></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid flatpickr-input" placeholder="Pick date &amp; time" name="event_datetime" id="kt_modal_add_schedule_datepicker" type="text" readonly="readonly">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Event Organiser</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="event_org" value="">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Send Event Details To</label>
													<!--end::Label-->
													<!--begin::Input-->
													<tags class="tagify form-control form-control-solid" tabindex="-1">
            <tag title="smith@kpmg.com" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="smith@kpmg.com"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">smith@kpmg.com</span></div></tag><tag title="melody@altbox.com" contenteditable="false" spellcheck="false" tabindex="-1" class="tagify__tag tagify--noAnim" value="melody@altbox.com"><x title="" class="tagify__tag__removeBtn" role="button" aria-label="remove tag"></x><div><span class="tagify__tag-text">melody@altbox.com</span></div></tag><span contenteditable="" tabindex="0" data-placeholder="&ZeroWidthSpace;" aria-placeholder="" class="tagify__input" role="textbox" aria-autocomplete="both" aria-multiline="false"></span>
                &ZeroWidthSpace;
        </tags><input id="kt_modal_add_schedule_tagify" type="text" class="form-control form-control-solid" name="event_invitees" value="smith@kpmg.com, melody@altbox.com">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											<div></div></form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add schedule-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_task" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add a Task</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_add_task_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="required fs-6 fw-bold form-label mb-2">Task Name</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="task_name" value="">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Task Due Date</span>
														<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="Select a due date." data-bs-original-title="" title=""></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid flatpickr-input" placeholder="Pick date" name="task_duedate" id="kt_modal_add_task_datepicker" type="text" readonly="readonly">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">Task Description</label>
													<!--end::Label-->
													<!--begin::Input-->
													<textarea class="form-control form-control-solid rounded-3"></textarea>
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											<div></div></form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--begin::Modal - Update email-->
							<div class="modal fade" id="kt_modal_update_email" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Update Email Address</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_email_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
												<!--begin::Notice-->
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
													<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<div class="fs-6 text-gray-700">Please note that a valid email address is required to complete the email verification.</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--end::Notice-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Email Address</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input class="form-control form-control-solid" placeholder="" name="profile_email" value="smith@kpmg.com">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											<div></div></form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update email-->
							<!--begin::Modal - Update password-->
							<div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Update Password</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_password_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
												<!--begin::Input group=-->
												<div class="fv-row mb-10 fv-plugins-icon-container">
													<label class="required form-label fs-6 mb-2">Current Password</label>
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="current_password" autocomplete="off">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group=-->
												<!--begin::Input group-->
												<div class="mb-10 fv-row fv-plugins-icon-container" data-kt-password-meter="true">
													<!--begin::Wrapper-->
													<div class="mb-1">
														<!--begin::Label-->
														<label class="form-label fw-bold fs-6 mb-2">New Password</label>
														<!--end::Label-->
														<!--begin::Input wrapper-->
														<div class="position-relative mb-3">
															<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="new_password" autocomplete="off">
															<span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
																<i class="bi bi-eye-slash fs-2"></i>
																<i class="bi bi-eye fs-2 d-none"></i>
															</span>
														</div>
														<!--end::Input wrapper-->
														<!--begin::Meter-->
														<div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
															<div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
														</div>
														<!--end::Meter-->
													</div>
													<!--end::Wrapper-->
													<!--begin::Hint-->
													<div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp; symbols.</div>
													<!--end::Hint-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group=-->
												<!--begin::Input group=-->
												<div class="fv-row mb-10 fv-plugins-icon-container">
													<label class="form-label fw-bold fs-6 mb-2">Confirm New Password</label>
													<input class="form-control form-control-lg form-control-solid" type="password" placeholder="" name="confirm_password" autocomplete="off">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group=-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											<div></div></form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update password-->
							<!--begin::Modal - Update role-->
							<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Update User Role</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form id="kt_modal_update_role_form" class="form" action="#">
												<!--begin::Notice-->
												<!--begin::Notice-->
												<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
													<!--begin::Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
													<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"></rect>
															<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor"></rect>
															<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor"></rect>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--end::Icon-->
													<!--begin::Wrapper-->
													<div class="d-flex flex-stack flex-grow-1">
														<!--begin::Content-->
														<div class="fw-bold">
															<div class="fs-6 text-gray-700">Please note that reducing a user role rank, that user will lose all priviledges that was assigned to the previous role.</div>
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Notice-->
												<!--end::Notice-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-5">
														<span class="required">Select a user role</span>
													</label>
													<!--end::Label-->
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked="checked">
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_0">
																<div class="fw-bolder text-gray-800">County Admin</div>
																<div class="text-gray-600">Best for business owners and company administrators</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1">
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_1">
																<div class="fw-bolder text-gray-800">Support Group</div>
																<div class="text-gray-600">Answer the queries</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2">
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_2">
																<div class="fw-bolder text-gray-800">Executive </div>
																<div class="text-gray-600">Monitor the performance of the projects & Users</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3">
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_3">
																<div class="fw-bolder text-gray-800">Service Delivery Director</div>
																<div class="text-gray-600">Acess to major modules</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
													<div class="separator separator-dashed my-5"></div>
													<!--begin::Input row-->
													<div class="d-flex">
														<!--begin::Radio-->
														<div class="form-check form-check-custom form-check-solid">
															<!--begin::Input-->
															<input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4">
															<!--end::Input-->
															<!--begin::Label-->
															<label class="form-check-label" for="kt_modal_update_role_option_4">
																<div class="fw-bolder text-gray-800">Auditors</div>
																<div class="text-gray-600">Best for people who need to preview projects, but don't need to make any updates</div>
															</label>
															<!--end::Label-->
														</div>
														<!--end::Radio-->
													</div>
													<!--end::Input row-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Update</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Update role-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_auth_app" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Add Authenticator App</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Content-->
											<div class="fw-bolder d-flex flex-column justify-content-center mb-5">
												<!--begin::Label-->
												<div class="text-center mb-5" data-kt-add-auth-action="qr-code-label">Download the 
												<a href="#">Authenticator app</a>, add a new account, then scan this barcode to set up your account.</div>
												<div class="text-center mb-5 d-none" data-kt-add-auth-action="text-code-label">Download the 
												<a href="#">Authenticator app</a>, add a new account, then enter this code to set up your account.</div>
												<!--end::Label-->
												<!--begin::QR code-->
												<div class="d-flex flex-center" data-kt-add-auth-action="qr-code">
													<img src="../../../assets/media/misc/qr.png" alt="Scan this QR code">
												</div>
												<!--end::QR code-->
												<!--begin::Text code-->
												<div class="border rounded p-5 d-flex flex-center d-none" data-kt-add-auth-action="text-code">
													<div class="fs-1">gi2kdnb54is709j</div>
												</div>
												<!--end::Text code-->
											</div>
											<!--end::Content-->
											<!--begin::Action-->
											<div class="d-flex flex-center">
												<div class="btn btn-light-primary" data-kt-add-auth-action="text-code-button">Enter code manually</div>
												<div class="btn btn-light-primary d-none" data-kt-add-auth-action="qr-code-button">Scan barcode instead</div>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
							<!--begin::Modal - Add task-->
							<div class="modal fade" id="kt_modal_add_one_time_password" tabindex="-1" aria-hidden="true">
								<!--begin::Modal dialog-->
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<!--begin::Modal content-->
									<div class="modal-content">
										<!--begin::Modal header-->
										<div class="modal-header">
											<!--begin::Modal title-->
											<h2 class="fw-bolder">Enable One Time Password</h2>
											<!--end::Modal title-->
											<!--begin::Close-->
											<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"></rect>
														<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"></rect>
													</svg>
												</span>
												<!--end::Svg Icon-->
											</div>
											<!--end::Close-->
										</div>
										<!--end::Modal header-->
										<!--begin::Modal body-->
										<div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
											<!--begin::Form-->
											<form class="form fv-plugins-bootstrap5 fv-plugins-framework" id="kt_modal_add_one_time_password_form">
												<!--begin::Label-->
												<div class="fw-bolder mb-9">Enter the new phone number to receive an SMS to when you log in.</div>
												<!--end::Label-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Mobile number</span>
														<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="A valid mobile number is required to receive the one-time password to validate your account login." aria-label="A valid mobile number is required to receive the one-time password to validate your account login."></i>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="text" class="form-control form-control-solid" name="otp_mobile_number" placeholder="+6123 456 789" value="">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Separator-->
												<div class="separator saperator-dashed my-5"></div>
												<!--end::Separator-->
												<!--begin::Input group-->
												<div class="fv-row mb-7">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Email</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="email" class="form-control form-control-solid" name="otp_email" value="smith@kpmg.com" readonly="readonly">
													<!--end::Input-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="fv-row mb-7 fv-plugins-icon-container">
													<!--begin::Label-->
													<label class="fs-6 fw-bold form-label mb-2">
														<span class="required">Confirm password</span>
													</label>
													<!--end::Label-->
													<!--begin::Input-->
													<input type="password" class="form-control form-control-solid" name="otp_confirm_password" value="">
													<!--end::Input-->
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="text-center pt-15">
													<button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Cancel</button>
													<button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
														<span class="indicator-label">Submit</span>
														<span class="indicator-progress">Please wait... 
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</button>
												</div>
												<!--end::Actions-->
											<div></div></form>
											<!--end::Form-->
										</div>
										<!--end::Modal body-->
									</div>
									<!--end::Modal content-->
								</div>
								<!--end::Modal dialog-->
							</div>
							<!--end::Modal - Add task-->
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
		<?php $filePath.'includes/drawers.php' ?>
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
		<?php $filePath.'includes/modals.php' ?>
		<!--end::Modals-->
		<!--begin::Javascript-->
		<?php $filePath.'includes/scripts.php' ?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

<!--index.html :55:59-->
</html>

