<?php
$dashHeadTitle = 'Procurements';
$dashHeadDesc = 'Kakamega County Procurements';
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
                                        <h3 class="card-title fw-bolder text-dark">Procurements</h3>
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
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-success"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Description-->
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Create FireStone Logo</a>
                                                <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                            </div>
                                            <!--end::Description-->
                                            <span class="badge badge-light-success fs-8 fw-bolder">3 Projects</span>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Description-->
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Stakeholder Meeting</a>
                                                <span class="text-muted fw-bold d-block">Due in 3 Days</span>
                                            </div>
                                            <!--end::Description-->
                                            <span class="badge badge-light-primary fs-8 fw-bolder">3 Projects</span>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-warning"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Description-->
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Scoping &amp; Estimations</a>
                                                <span class="text-muted fw-bold d-block">Due in 5 Days</span>
                                            </div>
                                            <!--end::Description-->
                                            <span class="badge badge-light-warning fs-8 fw-bolder">3 Projects</span>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-primary"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Description-->
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">KPI App Showcase</a>
                                                <span class="text-muted fw-bold d-block">Due in 2 Days</span>
                                            </div>
                                            <!--end::Description-->
                                            <span class="badge badge-light-primary fs-8 fw-bolder">3 Projects</span>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center mb-8">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-danger"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Description-->
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Project Meeting</a>
                                                <span class="text-muted fw-bold d-block">Due in 12 Days</span>
                                            </div>
                                            <!--end::Description-->
                                            <span class="badge badge-light-danger fs-8 fw-bolder">3 Projects</span>
                                        </div>
                                        <!--end:Item-->
                                        <!--begin::Item-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Bullet-->
                                            <span class="bullet bullet-vertical h-40px bg-success"></span>
                                            <!--end::Bullet-->
                                            <!--begin::Checkbox-->
                                            <div class="form-check form-check-custom form-check-solid mx-5">
                                                <input class="form-check-input" type="checkbox" value="" />
                                            </div>
                                            <!--end::Checkbox-->
                                            <!--begin::Description-->
                                            <div class="flex-grow-1">
                                                <a href="#" class="text-gray-800 text-hover-primary fw-bolder fs-6">Customers Update</a>
                                                <span class="text-muted fw-bold d-block">Due in 1 week</span>
                                            </div>
                                            <!--end::Description-->
                                            <span class="badge badge-light-success fs-8 fw-bolder">3 Projects</span>
                                        </div>
                                        <!--end:Item-->
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