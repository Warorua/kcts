<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
    <!--begin::Logo-->
    <div class="aside-logo flex-column-auto pt-10 pt-lg-20" id="kt_aside_logo">
        <a href="index.php">
            <img alt="Logo" src="<?php echo $filePathScript ?>assets/media/logos/logo-3.png" class="h-80px" />
        </a>
    </div>
    <!--end::Logo-->
    <!--begin::Nav-->
    <div class="aside-menu flex-column-fluid pt-0 pb-7 py-lg-10" id="kt_aside_menu">
        <!--begin::Aside menu-->
        <div id="kt_aside_menu_wrapper" class="w-100 hover-scroll-overlay-y scroll-ps d-flex" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu" data-kt-scroll-offset="0">
            <div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-icon-gray-400 menu-arrow-gray-400 fw-bold fs-6 my-auto" data-kt-menu="true">
                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item here show py-3">
                    <span class="menu-link" title="Dashboards" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="menu-sub menu-sub-dropdown w-225px w-lg-250px px-1 py-4">
                        <div class="menu-item">
                            <a class="menu-link active" href="<?php echo $filePathScript ?>dashboard">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Dashboard</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
                    <span class="menu-link" title="Users" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M16.0173 9H15.3945C14.2833 9 13.263 9.61425 12.7431 10.5963L12.154 11.7091C12.0645 11.8781 12.1072 12.0868 12.2559 12.2071L12.6402 12.5183C13.2631 13.0225 13.7556 13.6691 14.0764 14.4035L14.2321 14.7601C14.2957 14.9058 14.4396 15 14.5987 15H18.6747C19.7297 15 20.4057 13.8774 19.912 12.945L18.6686 10.5963C18.1487 9.61425 17.1285 9 16.0173 9Z" fill="currentColor" />
                                    <rect opacity="0.3" x="14" y="4" width="4" height="4" rx="2" fill="currentColor" />
                                    <path d="M4.65486 14.8559C5.40389 13.1224 7.11161 12 9 12C10.8884 12 12.5961 13.1224 13.3451 14.8559L14.793 18.2067C15.3636 19.5271 14.3955 21 12.9571 21H5.04292C3.60453 21 2.63644 19.5271 3.20698 18.2067L4.65486 14.8559Z" fill="currentColor" />
                                    <rect opacity="0.3" x="6" y="5" width="6" height="6" rx="3" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="menu-sub menu-sub-dropdown w-225px w-lg-250px px-1 py-4">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">User Management</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        <div class="menu-item">
                                            <a class="menu-link" href="<?php echo $filePathScript ?>user/list">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">Users List</span>
                                            </a>
                                        </div>
                                        <div class="menu-item">
                                            <a class="menu-link" href="<?php echo $filePathScript ?>users/view">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View User</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <span class="menu-link">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Roles</span>
                                        <span class="menu-arrow"></span>
                                    </span>
                                    <div class="menu-sub menu-sub-accordion">
                                        
                                        <div class="menu-item">
                                            <a class="menu-link" href="<?php echo $filePathScript ?>users/role">
                                                <span class="menu-bullet">
                                                    <span class="bullet bullet-dot"></span>
                                                </span>
                                                <span class="menu-title">View Role</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>users/permissions">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Permissions</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
                    <span class="menu-link" title="Procurement" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M11.425 7.325C12.925 5.825 15.225 5.825 16.725 7.325C18.225 8.825 18.225 11.125 16.725 12.625C15.225 14.125 12.925 14.125 11.425 12.625C9.92501 11.225 9.92501 8.825 11.425 7.325ZM8.42501 4.325C5.32501 7.425 5.32501 12.525 8.42501 15.625C11.525 18.725 16.625 18.725 19.725 15.625C22.825 12.525 22.825 7.425 19.725 4.325C16.525 1.225 11.525 1.225 8.42501 4.325Z" fill="currentColor" />
                                    <path d="M11.325 17.525C10.025 18.025 8.425 17.725 7.325 16.725C5.825 15.225 5.825 12.925 7.325 11.425C8.825 9.92498 11.125 9.92498 12.625 11.425C13.225 12.025 13.625 12.925 13.725 13.725C14.825 13.825 15.925 13.525 16.725 12.625C17.125 12.225 17.425 11.825 17.525 11.325C17.125 10.225 16.525 9.22498 15.625 8.42498C12.525 5.32498 7.425 5.32498 4.325 8.42498C1.225 11.525 1.225 16.625 4.325 19.725C7.425 22.825 12.525 22.825 15.625 19.725C16.325 19.025 16.925 18.225 17.225 17.325C15.425 18.125 13.225 18.225 11.325 17.525Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="menu-sub menu-sub-dropdown w-225px w-lg-250px px-1 py-4">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Procurement</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>procurement/proc1.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Listing</span>
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
                    <span class="menu-link" title="Projects" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs037.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M20.0381 4V10C20.0381 10.6 19.6381 11 19.0381 11H17.0381C16.4381 11 16.0381 10.6 16.0381 10V4C16.0381 2.9 16.9381 2 18.0381 2C19.1381 2 20.0381 2.9 20.0381 4ZM9.73808 18.9C10.7381 18.5 11.2381 17.3 10.8381 16.3L5.83808 3.29999C5.43808 2.29999 4.23808 1.80001 3.23808 2.20001C2.23808 2.60001 1.73809 3.79999 2.13809 4.79999L7.13809 17.8C7.43809 18.6 8.23808 19.1 9.03808 19.1C9.23808 19 9.53808 19 9.73808 18.9ZM19.0381 18H17.0381V20H19.0381V18Z" fill="currentColor" />
                                    <path d="M18.0381 6H4.03809C2.93809 6 2.03809 5.1 2.03809 4C2.03809 2.9 2.93809 2 4.03809 2H18.0381C19.1381 2 20.0381 2.9 20.0381 4C20.0381 5.1 19.1381 6 18.0381 6ZM4.03809 3C3.43809 3 3.03809 3.4 3.03809 4C3.03809 4.6 3.43809 5 4.03809 5C4.63809 5 5.03809 4.6 5.03809 4C5.03809 3.4 4.63809 3 4.03809 3ZM18.0381 3C17.4381 3 17.0381 3.4 17.0381 4C17.0381 4.6 17.4381 5 18.0381 5C18.6381 5 19.0381 4.6 19.0381 4C19.0381 3.4 18.6381 3 18.0381 3ZM12.0381 17V22H6.03809V17C6.03809 15.3 7.33809 14 9.03809 14C10.7381 14 12.0381 15.3 12.0381 17ZM9.03809 15.5C8.23809 15.5 7.53809 16.2 7.53809 17C7.53809 17.8 8.23809 18.5 9.03809 18.5C9.83809 18.5 10.5381 17.8 10.5381 17C10.5381 16.2 9.83809 15.5 9.03809 15.5ZM15.0381 15H17.0381V13H16.0381V8L14.0381 10V14C14.0381 14.6 14.4381 15 15.0381 15ZM19.0381 15H21.0381C21.6381 15 22.0381 14.6 22.0381 14V10L20.0381 8V13H19.0381V15ZM21.0381 20H15.0381V22H21.0381V20Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="menu-sub menu-sub-dropdown w-225px w-lg-250px px-1 py-4">
                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                            <span class="menu-link">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Projects</span>
                                <span class="menu-arrow"></span>
                            </span>
                            <div class="menu-sub menu-sub-accordion">
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/list">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">My Projects</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/project.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">View Project</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/targets.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Targets</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/budget.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Budget</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/users.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Users</span>
                                    </a>
                                </div>
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/files.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Files</span>
                                    </a>
                                </div>
                                
                                <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>projects/settings.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Settings</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" class="menu-item py-3">
                    <span class="menu-link" title="Reports" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
                        <span class="menu-icon">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                            <span class="svg-icon svg-icon-2x">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M8.4 14L15.6 8.79999L20 9.90002V6L16 4L9 11L5 12V14H8.4Z" fill="currentColor" />
                                    <path d="M21 18H20V12L16 11L9 16H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                    <div class="menu-sub menu-sub-dropdown w-225px w-lg-250px px-1 py-4">
                    <div class="menu-item">
                                    <a class="menu-link" href="<?php echo $filePathScript ?>report/report1.php">
                                        <span class="menu-bullet">
                                            <span class="bullet bullet-dot"></span>
                                        </span>
                                        <span class="menu-title">Reports</span>
                                    </a>
                                </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Aside menu-->
    </div>
    <!--end::Nav-->
    <!--begin::Footer-->
    <div class="aside-footer flex-column-auto pb-5 pb-lg-10" id="kt_aside_footer">
        <!--begin::Menu-->
        <div class="d-flex flex-center w-100 scroll-px" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-dismiss="click" title="Quick actions">
            <button type="button" class="btn btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                <span class="svg-icon svg-icon-2x">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor" />
                        <path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor" />
                        <path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </button>
            <!--begin::Menu 2-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mb-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Project</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">New Procurement</a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                
                <!--end::Menu item-->
                <!--begin::Menu separator-->
                <div class="separator mt-3 opacity-75"></div>
                <!--end::Menu separator-->
                <!--begin::Menu item-->
                <div class="menu-item px-3">
                    <div class="menu-content px-3 py-3">
                        <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                    </div>
                </div>
                <!--end::Menu item-->
            </div>
            <!--end::Menu 2-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Footer-->
</div>