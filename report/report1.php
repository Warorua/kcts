<?php
$dashHeadTitle = 'Reports';
$dashHeadDesc = 'Kakamega County Reports';
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

                <?php include '../includes/header.php' ?>
                <?php
                $subCounties = ['Lurambi', 'Shinyalu', 'Ikolomani', 'Mumias West', 'Matungu', 'Navakholo', 'Malava', 'Lugari', 'Likuyani', 'Butere'];
                ?>
                <!--end::Header-->
                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    <!--begin::Container-->
                    <div class="container-xxl" id="kt_content_container">
                        <!--begin::Row-->
                        <div class="row g-5 g-xl-8">
                            <!--begin::Col-->
                            <div class="col-xl-12">
                                <!--begin::List Widget 3-->
                                <div class="card card-xl-stretch mb-5 mb-xl-8">
                                    <!--begin::Header-->
                                    <div class="card-header border-0">
                                        <h3 class="card-title fw-bolder text-dark">Reports</h3>
                                        <div class="card-toolbar">
                                            <!--begin::Menu-->
                                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                <span class="svg-icon svg-icon-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="currentColor" />
                                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
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
                                            <!--end::Menu-->
                                        </div>
                                    </div>
                                    <!--end::Header-->
                                    <!--begin::Body-->
                                    <div class="card-body pt-2">
                                        <div class="py-5">
                                            <div class="d-flex flex-column flex-md-row rounded border p-10">
                                                <ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6">
                                                    <?php
                                                    foreach ($subCounties as $id => $sc) {
                                                        if ($id == 0) {
                                                            $actbt = 'active';
                                                        } else {
                                                            $actbt = '';
                                                        }
                                                        $actbtlght = ['btn-active-light-success', 'btn-active-light-info', 'btn-active-light-danger', 'btn-active-light-primary', 'btn-active-light-warning'];

                                                        $svg = '<span class="svg-icon svg-icon-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M13.625 22H9.625V3C9.625 2.4 10.025 2 10.625 2H12.625C13.225 2 13.625 2.4 13.625 3V22Z" fill="currentColor" />
                                                <path d="M19.625 10H12.625V4H19.625L21.025 6.09998C21.325 6.59998 21.325 7.30005 21.025 7.80005L19.625 10Z" fill="currentColor" />
                                                <path d="M3.62499 16H10.625V10H3.62499L2.225 12.1001C1.925 12.6001 1.925 13.3 2.225 13.8L3.62499 16Z" fill="currentColor" />
                                            </svg></span>';


                                                        echo '
                                            <li class="nav-item me-0 mb-md-2">
                                                <a class="nav-link btn ' . $actbt . ' btn-flex ' . $actbtlght[rand(0, 4)] . '" data-bs-toggle="tab" href="#kt_vtab_pane_' . $id . '">
                                                    ' . $svg . '
                                                    <span class="d-flex flex-column align-items-start">
                                                        <span class="fs-4 fw-bolder">' . $sc . '</span>
                                                        <span class="fs-7">Description</span>
                                                    </span>
                                                </a>
                                            </li>
                                            ';
                                                    }
                                                    ?>
                                                </ul>
                                                <div class="tab-content" id="myTabContent">
                                                    <?php
                                                    foreach ($subCounties as $id => $sc) {
                                                        if ($id == 0) {
                                                            $actdec = 'show active';
                                                        } else {
                                                            $actdec = '';
                                                        }

                                                        for($i=0;$i<=5;$i++){
                                                                echo '<div class="tab-pane fade '.$actdec.'" id="kt_vtab_pane_' . $id . '" role="tabpanel">
                                                        <div class="card card-flush border-0 h-md-100">
										<!--begin::Body-->
										<div class="card-body py-9">
										<a href="../report/projectsreport.php">	<!--begin::Row-->
											<div class="row gx-9 h-100">
												<!--begin::Col-->
												<div class="col-sm-6 mb-10 mb-sm-0">
													<!--begin::Image-->
													<div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100" style="background-size: 100% 100%;background-image:url('."../assets/media/stock/600x600/img-".rand(9,46).".jpg".');"></div>
													<!--end::Image-->
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-sm-6">
													<!--begin::Wrapper-->
													<div class="d-flex flex-column h-100">
														<!--begin::Header-->
														<div class="mb-7">
															<!--begin::Headin-->
															<div class="d-flex flex-stack mb-6">
																<!--begin::Title-->
																<div class="flex-shrink-0 me-5">
																	<span class="text-gray-400 fs-7 fw-bolder me-2 d-block lh-1 pb-1">Featured</span>
																	<span class="text-gray-800 fs-1 fw-bolder">'.$sc.'</span>
																</div>
																<!--end::Title-->
																<span class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In Process</span>
															</div>
															<!--end::Heading-->
															<!--begin::Items-->
															<div class="d-flex align-items-center flex-wrap d-grid gap-2">
																<!--begin::Item-->
																<div class="d-flex align-items-center me-5 me-xl-13">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px symbol-circle me-3">
																		<img src="../assets/media/avatars/300-3.jpg" class="" alt="" />
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<span class="fw-bold text-gray-400 d-block fs-8">Contractor</span>
																		<span class="fw-bolder text-gray-800 fs-7">Robert Fox</span>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-30px symbol-circle me-3">
																		<span class="symbol-label bg-success">
																			<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
																			<span class="svg-icon svg-icon-5 svg-icon-white">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="currentColor" />
																					<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="currentColor" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Info-->
																	<div class="m-0">
																		<span class="fw-bold text-gray-400 d-block fs-8">Budget</span>
																		<span class="fw-bolder text-gray-800 fs-7">$64.800</span>
																	</div>
																	<!--end::Info-->
																</div>
																<!--end::Item-->
															</div>
															<!--end::Items-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="mb-6">
															<!--begin::Text-->
                                                            <span class="fw-regular text-gray-600 fs-8 mb-8 d-block">Explore our comprehensive project reports for a detailed overview of ongoing initiatives, procurement details, and progress updates, contributing to the growth and development of Kakamega County.</span>															<!--end::Text-->
															<!--begin::Stats-->
															<div class="d-flex">
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
																	<!--begin::Date-->
																	<span class="fs-6 text-gray-700 fw-bolder">40%</span>
																	<!--end::Date-->
																	<!--begin::Label-->
																	<div class="fw-bold text-gray-400">Project Completion</div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
																<!--begin::Stat-->
																<div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
																	<!--begin::Number-->
																	<span class="fs-6 text-gray-700 fw-bolder">$
																	<span class="ms-n1" data-kt-countup="true" data-kt-countup-value="60%">0</span></span>
																	<!--end::Number-->
																	<!--begin::Label-->
																	<div class="fw-bold text-gray-400">Project Remaining </div>
																	<!--end::Label-->
																</div>
																<!--end::Stat-->
															</div>
															<!--end::Stats-->
														</div>
														<!--end::Body-->
														<!--begin::Footer-->
														<div class="d-flex flex-stack mt-auto bd-highlight">
															<!--begin::Users group-->
															<div class="symbol-group symbol-hover flex-nowrap">
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
																	<img alt="Pic" src="../assets/media/avatars/300-2.jpg" />
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
																	<img alt="Pic" src="../assets/media/avatars/300-3.jpg" />
																</div>
																<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
																	<span class="symbol-label bg-primary text-inverse-primary fw-bolder">S</span>
																</div>
															</div>
															<!--end::Users group-->
															<!--begin::Actions-->
															<a href="../apps/projects/project.html" class="text-primary opacity-75-hover fs-6 fw-bold">View Project 
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
															<span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z" fill="currentColor" />
																	<rect x="21.9497" y="3.46448" width="13" height="2" rx="1" transform="rotate(135 21.9497 3.46448)" fill="currentColor" />
																	<path d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--end::Actions-->
														</div>
														<!--end::Footer-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Col-->
											</div>
                                            </a>
											<!--end::Row-->
										</div>
										<!--end::Body-->
									</div>
                                                        </div>'
                                                        ;
                                                        }
                                                    
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end:List Widget 3-->

                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
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

<!--index.html :55:59-->

</html>