 <!--begin::Modal - Create Project-->
 <div class="modal fade" id="kt_modal_create_project" tabindex="-1" aria-hidden="true">
     <!--begin::Modal dialog-->
     <div class="modal-dialog modal-fullscreen p-9">
         <!--begin::Modal content-->
         <div class="modal-content modal-rounded">
             <!--begin::Modal header-->
             <div class="modal-header">
                 <!--begin::Modal title-->
                 <h2>Create Project</h2>
                 <!--end::Modal title-->
                 <!--begin::Close-->
                 <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                     <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                     <span class="svg-icon svg-icon-1">
                         <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                             <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                             <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                         </svg>
                     </span>
                     <!--end::Svg Icon-->
                 </div>
                 <!--end::Close-->
             </div>
             <!--end::Modal header-->
             <!--begin::Modal body-->
             <div class="modal-body scroll-y m-5">
                 <!--begin::Stepper-->
                 <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_project_stepper">
                     <!--begin::Container-->
                     <div class="container">
                         <!--begin::Nav-->
                         <div class="stepper-nav justify-content-center py-2">
                             <!--begin::Step 1-->
                             <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                 <h3 class="stepper-title">Project Type</h3>
                             </div>
                             <!--end::Step 1-->
                             <!--begin::Step 2-->
                             <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                 <h3 class="stepper-title">Project Settings</h3>
                             </div>
                             <!--end::Step 2-->
                             <!--begin::Step 3-->
                             <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                 <h3 class="stepper-title">Budget</h3>
                             </div>
                             <!--end::Step 3-->
                             <!--begin::Step 5-->
                             <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                 <h3 class="stepper-title">Set First Milestone</h3>
                             </div>
                             <!--end::Step 5-->
                             <!--begin::Step 7-->
                             <div class="stepper-item" data-kt-stepper-element="nav">
                                 <h3 class="stepper-title">Completed</h3>
                             </div>
                             <!--end::Step 7-->
                         </div>
                         <!--end::Nav-->
                         <!--begin::Form-->
                         <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_project_form" action="<?php echo $filePathScript ?>projects/process/data_process.php" method="post">
                             <!--begin::Type-->
                             <div class="current" data-kt-stepper-element="content">
                                 <!--begin::Wrapper-->
                                 <div class="w-100">
                                     <!--begin::Heading-->
                                     <div class="pb-7 pb-lg-12">
                                         <!--begin::Title-->
                                         <h1 class="fw-bolder text-dark">Project Type</h1>
                                         <!--end::Title-->
                                         <!--begin::Description-->
                                         <div class="text-muted fw-bold fs-4">
                                             If you need more info, please check out
                                             <a href="#" class="link-primary fw-bolder">FAQ Page</a>
                                         </div>
                                         <!--end::Description-->
                                     </div>
                                     <!--end::Heading-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-15" data-kt-buttons="true">
                                         <!--begin::Option-->
                                         <label for="scSelect1" class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 mb-6">
                                             <!--begin::Input-->
                                             <input class="btn-check" type="radio" checked="checked" name="project_type" value="1" />
                                             <!--end::Input-->
                                             <!--begin::Label-->
                                             <span class="d-flex">
                                                 <!--begin::Icon-->
                                                 <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                 <span class="svg-icon svg-icon-3hx">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                         <path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="currentColor" />
                                                         <path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="currentColor" />
                                                     </svg>
                                                 </span>
                                                 <!--end::Svg Icon-->
                                                 <!--end::Icon-->
                                                 <!--begin::Info-->
                                                 <span class="ms-4">
                                                     <span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">Sub County Project</span>
                                                     <span class="fw-bold fs-4 text-muted">Create a project only active in one sub-county</span>
                                                 </span>
                                                 <!--end::Info-->
                                             </span>
                                             <!--end::Label-->
                                         </label>
                                         <!--end::Option-->
                                         <!--begin::Option-->
                                         <label for="scSelect2" class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6 active">
                                             <!--begin::Input-->
                                             <input class="btn-check" type="radio" name="project_type" value="2" />
                                             <!--end::Input-->
                                             <!--begin::Label-->
                                             <span class="d-flex">
                                                 <!--begin::Icon-->
                                                 <!--begin::Svg Icon | path: icons/duotune/general/gen002.svg-->
                                                 <span class="svg-icon svg-icon-3hx">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                         <path opacity="0.3" d="M4.05424 15.1982C8.34524 7.76818 13.5782 3.26318 20.9282 2.01418C21.0729 1.98837 21.2216 1.99789 21.3618 2.04193C21.502 2.08597 21.6294 2.16323 21.7333 2.26712C21.8372 2.37101 21.9144 2.49846 21.9585 2.63863C22.0025 2.7788 22.012 2.92754 21.9862 3.07218C20.7372 10.4222 16.2322 15.6552 8.80224 19.9462L4.05424 15.1982ZM3.81924 17.3372L2.63324 20.4482C2.58427 20.5765 2.5735 20.7163 2.6022 20.8507C2.63091 20.9851 2.69788 21.1082 2.79503 21.2054C2.89218 21.3025 3.01536 21.3695 3.14972 21.3982C3.28408 21.4269 3.42387 21.4161 3.55224 21.3672L6.66524 20.1802L3.81924 17.3372ZM16.5002 5.99818C16.2036 5.99818 15.9136 6.08615 15.6669 6.25097C15.4202 6.41579 15.228 6.65006 15.1144 6.92415C15.0009 7.19824 14.9712 7.49984 15.0291 7.79081C15.0869 8.08178 15.2298 8.34906 15.4396 8.55884C15.6494 8.76862 15.9166 8.91148 16.2076 8.96935C16.4986 9.02723 16.8002 8.99753 17.0743 8.884C17.3484 8.77046 17.5826 8.5782 17.7474 8.33153C17.9123 8.08486 18.0002 7.79485 18.0002 7.49818C18.0002 7.10035 17.8422 6.71882 17.5609 6.43752C17.2796 6.15621 16.8981 5.99818 16.5002 5.99818Z" fill="currentColor" />
                                                         <path d="M4.05423 15.1982L2.24723 13.3912C2.15505 13.299 2.08547 13.1867 2.04395 13.0632C2.00243 12.9396 1.9901 12.8081 2.00793 12.679C2.02575 12.5498 2.07325 12.4266 2.14669 12.3189C2.22013 12.2112 2.31752 12.1219 2.43123 12.0582L9.15323 8.28918C7.17353 10.3717 5.4607 12.6926 4.05423 15.1982ZM8.80023 19.9442L10.6072 21.7512C10.6994 21.8434 10.8117 21.9129 10.9352 21.9545C11.0588 21.996 11.1903 22.0083 11.3195 21.9905C11.4486 21.9727 11.5718 21.9252 11.6795 21.8517C11.7872 21.7783 11.8765 21.6809 11.9402 21.5672L15.7092 14.8442C13.6269 16.8245 11.3061 18.5377 8.80023 19.9442ZM7.04023 18.1832L12.5832 12.6402C12.7381 12.4759 12.8228 12.2577 12.8195 12.032C12.8161 11.8063 12.725 11.5907 12.5653 11.4311C12.4057 11.2714 12.1901 11.1803 11.9644 11.1769C11.7387 11.1736 11.5205 11.2583 11.3562 11.4132L5.81323 16.9562L7.04023 18.1832Z" fill="currentColor" />
                                                     </svg>
                                                 </span>
                                                 <!--end::Svg Icon-->
                                                 <!--end::Icon-->
                                                 <!--begin::Info-->
                                                 <span class="ms-4">
                                                     <span class="fs-3 fw-bolder text-gray-900 mb-2 d-block">County Project</span>
                                                     <span class="fw-bold fs-4 text-muted">Create a project active in the whole county</span>
                                                 </span>
                                                 <!--end::Info-->
                                             </span>
                                             <!--end::Label-->
                                         </label>
                                         <!--end::Option-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Actions-->
                                     <div class="d-flex justify-content-end">
                                         <button type="button" class="btn btn-lg btn-primary" data-kt-element="type-next">
                                             <span class="indicator-label">Project Settings</span>
                                             <span class="indicator-progress">Please wait...
                                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                         </button>
                                     </div>
                                     <!--end::Actions-->
                                 </div>
                                 <!--end::Wrapper-->
                             </div>
                             <!--end::Type-->
                             <!--begin::Settings-->
                             <div data-kt-stepper-element="content">
                                 <!--begin::Wrapper-->
                                 <div class="w-100">
                                     <!--begin::Heading-->
                                     <div class="pb-12">
                                         <!--begin::Title-->
                                         <h1 class="fw-bolder text-dark">Project Settings</h1>
                                         <!--end::Title-->
                                         <!--begin::Description-->
                                         <div class="text-muted fw-bold fs-4">
                                             If you need more info, please check
                                             <a href="#" class="link-primary">Project Guidelines</a>
                                         </div>
                                         <!--end::Description-->
                                     </div>
                                     <!--end::Heading-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Dropzone-->
                                         <!--end::Dropzone-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Label-->
                                         <label class="required fs-6 fw-bold mb-2">Overall Project Manager</label>
                                         <!--end::Label-->
                                         <!--begin::Input-->
                                         <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="settings_customer">
                                             <option></option>
                                             <?php
                                                $users = systemUsers();
                                                foreach ($users as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['lastname'] . '</option>';
                                                }

                                                ?>
                                         </select>
                                         <!--end::Input-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8" style="display: none;" id="subCountiesProjectElement">
                                         <!--begin::Label-->
                                         <label class="required fs-6 fw-bold mb-2">Sub County</label>
                                         <!--end::Label-->
                                         <!--begin::Input-->
                                         <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select..." name="sub_county">
                                             <option selected></option>
                                             <?php
                                                $subCounties = subCounties();
                                                foreach ($subCounties as $row) {
                                                    echo '<option value="' . $row['id'] . '">' . $row['name'] . '</option>';
                                                }

                                                ?>
                                         </select>
                                         <!--end::Input-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Label-->
                                         <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                             <span class="required">Project Name</span>
                                             <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify project name"></i>
                                         </label>
                                         <!--end::Label-->
                                         <!--begin::Input-->
                                         <input type="text" class="form-control form-control-solid" placeholder="Enter Project Name" value="Agriculture project" name="settings_name" />
                                         <!--end::Input-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Label-->
                                         <label class="required fs-6 fw-bold mb-2">Project Description</label>
                                         <!--end::Label-->
                                         <!--begin::Input-->
                                         <textarea class="form-control form-control-solid" rows="3" placeholder="Enter Project Description" name="settings_description"></textarea>
                                         <!--end::Input-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Label-->
                                         <label class="required fs-6 fw-bold mb-2">Release Date</label>
                                         <!--end::Label-->
                                         <!--begin::Wrapper-->
                                         <div class="position-relative d-flex align-items-center">
                                             <!--begin::Icon-->
                                             <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                             <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                 <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                     <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                                     <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                                     <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                                 </svg>
                                             </span>
                                             <!--end::Svg Icon-->
                                             <!--end::Icon-->
                                             <!--begin::Input-->
                                             <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="settings_release_date" />
                                             <!--end::Input-->
                                         </div>
                                         <!--end::Wrapper-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-15">
                                         <!--begin::Wrapper-->
                                         <div class="d-flex flex-stack">
                                             <!--begin::Label-->
                                             <div class="me-5">
                                                 <label class="required fs-6 fw-bold">Notifications</label>
                                                 <div class="fs-7 fw-bold text-muted">
                                                     Allow Notifications by Phone or Email
                                                 </div>
                                             </div>
                                             <!--end::Label-->
                                             <!--begin::Checkboxes-->
                                             <div class="d-flex">
                                                 <!--begin::Checkbox-->
                                                 <label class="form-check form-check-custom form-check-solid me-10">
                                                     <!--begin::Input-->
                                                     <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="settings_notifications[]" />
                                                     <!--end::Input-->
                                                     <!--begin::Label-->
                                                     <span class="form-check-label fw-bold">Email</span>
                                                     <!--end::Label-->
                                                 </label>
                                                 <!--end::Checkbox-->
                                                 <!--begin::Checkbox-->
                                                 <label class="form-check form-check-custom form-check-solid">
                                                     <!--begin::Input-->
                                                     <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="settings_notifications[]" />
                                                     <!--end::Input-->
                                                     <!--begin::Label-->
                                                     <span class="form-check-label fw-bold">Phone</span>
                                                     <!--end::Label-->
                                                 </label>
                                                 <!--end::Checkbox-->
                                             </div>
                                             <!--end::Checkboxes-->
                                         </div>
                                         <!--begin::Wrapper-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Actions-->
                                     <div class="d-flex flex-stack">
                                         <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="settings-previous">
                                             Project Type
                                         </button>
                                         <button type="button" class="btn btn-lg btn-primary" data-kt-element="settings-next">
                                             <span class="indicator-label">Budget</span>
                                             <span class="indicator-progress">Please wait...
                                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                         </button>
                                     </div>
                                     <!--end::Actions-->
                                 </div>
                                 <!--end::Wrapper-->
                             </div>
                             <!--end::Settings-->
                             <!--begin::Budget-->
                             <div data-kt-stepper-element="content">
                                 <!--begin::Wrapper-->
                                 <div class="w-100">
                                     <!--begin::Heading-->
                                     <div class="pb-10 pb-lg-12">
                                         <!--begin::Title-->
                                         <h1 class="fw-bolder text-dark">Budget</h1>
                                         <!--end::Title-->
                                         <!--begin::Description-->
                                         <div class="text-muted fw-bold fs-4">
                                             If you need more info, please check
                                             <a href="#" class="link-primary">Project Guidelines</a>
                                         </div>
                                         <!--end::Description-->
                                     </div>
                                     <!--end::Heading-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Label-->
                                         <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                             <span class="required">Setup Budget</span>
                                             <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-content="&lt;div class='p-4 rounded bg-light'&gt; &lt;div class='d-flex flex-stack text-muted mb-4'&gt; &lt;i class='fas fa-university fs-3 me-3'&gt;&lt;/i&gt; &lt;div class='fw-bold'&gt;INCBANK **** 1245 STATEMENT&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack fw-bold text-gray-600'&gt; &lt;div&gt;Amount&lt;/div&gt; &lt;div&gt;Transaction&lt;/div&gt; &lt;/div&gt; &lt;div class='separator separator-dashed my-2'&gt;&lt;/div&gt; &lt;div class='d-flex flex-stack text-dark fw-bolder mb-2'&gt; &lt;div&gt;USD345.00&lt;/div&gt; &lt;div&gt;KEENTHEMES*&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted mb-2'&gt; &lt;div&gt;USD75.00&lt;/div&gt; &lt;div&gt;Hosting fee&lt;/div&gt; &lt;/div&gt; &lt;div class='d-flex flex-stack text-muted'&gt; &lt;div&gt;USD3,950.00&lt;/div&gt; &lt;div&gt;Payrol&lt;/div&gt; &lt;/div&gt; &lt;/div&gt;"></i>
                                         </label>
                                         <!--end::Label-->
                                         <!--begin::Dialer-->
                                         <div class="position-relative w-lg-250px" id="kt_modal_create_project_budget_setup" data-kt-dialer="true" data-kt-dialer-min="50" data-kt-dialer-max="50000000" data-kt-dialer-step="10000" data-kt-dialer-prefix="KES" data-kt-dialer-decimals="2">
                                             <!--begin::Decrease control-->
                                             <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 start-0" data-kt-dialer-control="decrease">
                                                 <!--begin::Svg Icon | path: icons/duotune/general/gen042.svg-->
                                                 <span class="svg-icon svg-icon-1">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                         <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                         <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                     </svg>
                                                 </span>
                                                 <!--end::Svg Icon-->
                                             </button>
                                             <!--end::Decrease control-->
                                             <!--begin::Input control-->
                                             <input type="text" class="form-control form-control-solid border-0 ps-12" data-kt-dialer-control="input" placeholder="Amount" name="budget_setup" readonly="readonly" value="KES5000" />
                                             <!--end::Input control-->
                                             <!--begin::Increase control-->
                                             <button type="button" class="btn btn-icon btn-active-color-gray-700 position-absolute translate-middle-y top-50 end-0" data-kt-dialer-control="increase">
                                                 <!--begin::Svg Icon | path: icons/duotune/general/gen041.svg-->
                                                 <span class="svg-icon svg-icon-1">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                         <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
                                                         <rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                                         <rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
                                                     </svg>
                                                 </span>
                                                 <!--end::Svg Icon-->
                                             </button>
                                             <!--end::Increase control-->
                                         </div>
                                         <!--end::Dialer-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Label-->
                                         <label class="fs-6 fw-bold mb-2">Budget Usage</label>
                                         <!--end::Label-->
                                         <!--begin::Row-->
                                         <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                             <!--begin::Col-->
                                             <div class="col-md-6 col-lg-12 col-xxl-6">
                                                 <!--begin::Option-->
                                                 <label class="btn btn-outline btn-outline-dashed btn-outline-default active d-flex text-start p-6" data-kt-button="true">
                                                     <!--begin::Radio-->
                                                     <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                         <input class="form-check-input" type="radio" name="budget_usage" value="1" checked="checked" />
                                                     </span>
                                                     <!--end::Radio-->
                                                     <!--begin::Info-->
                                                     <span class="ms-5">
                                                         <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Precise Usage</span>
                                                         <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per
                                                             transaction under KES50,000 budget</span>
                                                     </span>
                                                     <!--end::Info-->
                                                 </label>
                                                 <!--end::Option-->
                                             </div>
                                             <!--end::Col-->
                                             <!--begin::Col-->
                                             <div class="col-md-6 col-lg-12 col-xxl-6">
                                                 <!--begin::Option-->
                                                 <label class="btn btn-outline btn-outline-dashed btn-outline-default d-flex text-start p-6" data-kt-button="true">
                                                     <!--begin::Radio-->
                                                     <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                                         <input class="form-check-input" type="radio" name="budget_usage" value="2" />
                                                     </span>
                                                     <!--end::Radio-->
                                                     <!--begin::Info-->
                                                     <span class="ms-5">
                                                         <span class="fs-4 fw-bolder text-gray-800 mb-2 d-block">Extreme Usage</span>
                                                         <span class="fw-bold fs-7 text-gray-600">Withdraw money to your bank account per
                                                             transaction under KES50,000 budget</span>
                                                     </span>
                                                     <!--end::Info-->
                                                 </label>
                                                 <!--end::Option-->
                                             </div>
                                             <!--end::Col-->
                                         </div>
                                         <!--end::Row-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-15">
                                         <!--begin::Wrapper-->
                                         <div class="d-flex flex-stack">
                                             <!--begin::Label-->
                                             <div class="me-5">
                                                 <label class="fs-6 fw-bold">Allow Changes in Budget</label>
                                                 <div class="fs-7 fw-bold text-muted">
                                                     If you need more info, please check budget
                                                     planning
                                                 </div>
                                             </div>
                                             <!--end::Label-->
                                             <!--begin::Switch-->
                                             <label class="form-check form-switch form-check-custom form-check-solid">
                                                 <input class="form-check-input" type="checkbox" value="1" name="budget_allow" checked="checked" />
                                                 <span class="form-check-label fw-bold text-muted">Allowed</span>
                                             </label>
                                             <!--end::Switch-->
                                         </div>
                                         <!--end::Wrapper-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Actions-->
                                     <div class="d-flex flex-stack">
                                         <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="budget-previous">
                                             Project Settings
                                         </button>
                                         <button type="button" class="btn btn-lg btn-primary" data-kt-element="budget-next">
                                             <span class="indicator-label">Set Milestone</span>
                                             <span class="indicator-progress">Please wait...
                                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                         </button>
                                     </div>
                                     <!--end::Actions-->
                                 </div>
                                 <!--end::Wrapper-->
                             </div>
                             <!--end::Budget-->
                           
                             <!--begin::Targets-->
                             <div data-kt-stepper-element="content">
                                 <!--begin::Wrapper-->
                                 <div class="w-100">
                                     <!--begin::Heading-->
                                     <div class="pb-12">
                                         <!--begin::Title-->
                                         <h1 class="fw-bolder text-dark">Set First Milestone</h1>
                                         <!--end::Title-->
                                         <!--begin::Title-->
                                         <div class="text-muted fw-bold fs-4">
                                             If you need more info, please check
                                             <a href="#" class="link-primary">Project Guidelines</a>
                                         </div>
                                         <!--end::Title-->
                                     </div>
                                     <!--end::Heading-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <label class="fs-6 fw-bold mb-2">Milestone Title</label>
                                         <input type="text" class="form-control form-control-solid" placeholder="Enter Milestone Title" name="Project Launch" />
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="row g-9 mb-8">
                                         <!--begin::Col-->
                                         <div class="col-md-6 fv-row">
                                             <label class="required fs-6 fw-bold mb-2">Assign Manager</label>
                                             <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Milestone Manager" name="target_assign">
                                                 <option></option>
                                                 <?php
                                                    $users = systemUsers();
                                                    foreach ($users as $row) {
                                                        echo '<option value="' . $row['id'] . '">' . $row['firstname'] . ' ' . $row['lastname'] . '</option>';
                                                    }

                                                    ?>
                                             </select>
                                         </div>
                                         <!--end::Col-->
                                         <!--begin::Col-->
                                         <div class="col-md-6 fv-row">
                                             <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                             <div class="position-relative d-flex align-items-center">
                                                 <!--begin::Icon-->
                                                 <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                 <span class="svg-icon svg-icon-2 position-absolute mx-4">
                                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                         <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
                                                         <path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
                                                         <path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
                                                     </svg>
                                                 </span>
                                                 <!--end::Svg Icon-->
                                                 <!--end::Icon-->
                                                 <!--begin::Datepicker-->
                                                 <input class="form-control form-control-solid ps-12" placeholder="Pick date range" name="target_due_date" />
                                                 <!--end::Datepicker-->
                                             </div>
                                         </div>
                                         <!--end::Col-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <label class="fs-6 fw-bold mb-2">Milestone Details</label>
                                         <textarea class="form-control form-control-solid" rows="2" name="target_details" placeholder="Type Milestone Details">Experience share market at your fingertips with TICK PRO stock investment mobile trading app</textarea>
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <label class="required fs-6 fw-bold mb-2">Tags</label>
                                         <input class="form-control form-control-solid" value="Important, Urgent" name="target_tags" />
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-8">
                                         <!--begin::Wrapper-->
                                         <div class="d-flex flex-stack">
                                             <!--begin::Label-->
                                             <div class="me-5">
                                                 <label class="fs-6 fw-bold">Allow Changes in Budget</label>
                                                 <div class="fs-7 fw-bold text-muted">
                                                     If you need more info, please check budget
                                                     planning
                                                 </div>
                                             </div>
                                             <!--end::Label-->
                                             <!--begin::Switch-->
                                             <label class="form-check form-switch form-check-custom form-check-solid">
                                                 <input class="form-check-input" type="checkbox" value="1" name="target_allow" checked="checked" />
                                                 <span class="form-check-label fw-bold text-muted">Allowed</span>
                                             </label>
                                             <!--end::Switch-->
                                         </div>
                                         <!--end::Wrapper-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Input group-->
                                     <div class="fv-row mb-15">
                                         <!--begin::Wrapper-->
                                         <div class="d-flex flex-stack">
                                             <!--begin::Label-->
                                             <div class="me-5">
                                                 <label class="fs-6 fw-bold">Notifications</label>
                                                 <div class="fs-7 fw-bold text-muted">
                                                     Allow Notifications by Phone or Email
                                                 </div>
                                             </div>
                                             <!--end::Label-->
                                             <!--begin::Checkboxes-->
                                             <div class="d-flex">
                                                 <!--begin::Checkbox-->
                                                 <label class="form-check form-check-custom form-check-solid me-10">
                                                     <!--begin::Input-->
                                                     <input class="form-check-input h-20px w-20px" type="checkbox" value="email" name="target_notifications[]" />
                                                     <!--end::Input-->
                                                     <!--begin::Label-->
                                                     <span class="form-check-label fw-bold">Email</span>
                                                     <!--end::Label-->
                                                 </label>
                                                 <!--end::Checkbox-->
                                                 <!--begin::Checkbox-->
                                                 <label class="form-check form-check-custom form-check-solid">
                                                     <!--begin::Input-->
                                                     <input class="form-check-input h-20px w-20px" type="checkbox" value="phone" checked="checked" name="target_notifications[]" />
                                                     <!--end::Input-->
                                                     <!--begin::Label-->
                                                     <span class="form-check-label fw-bold">Phone</span>
                                                     <!--end::Label-->
                                                 </label>
                                                 <!--end::Checkbox-->
                                             </div>
                                             <!--end::Checkboxes-->
                                         </div>
                                         <!--end::Wrapper-->
                                     </div>
                                     <!--end::Input group-->
                                     <!--begin::Actions-->
                                     <div class="d-flex flex-stack">
                                         <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="targets-previous">
                                             Build a Team
                                         </button>
                                         <button type="button" class="btn btn-lg btn-primary" data-kt-element="targets-next">
                                             <span class="indicator-label">Finish</span>
                                             <span class="indicator-progress">Please wait...
                                                 <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                         </button>
                                     </div>
                                     <!--end::Actions-->
                                 </div>
                                 <!--end::Wrapper-->
                             </div>
                             <!--end::Targets-->
                             <!--begin::Complete-->
                             <div data-kt-stepper-element="content">
                                 <!--begin::Wrapper-->
                                 <div class="w-100">
                                     <!--begin::Heading-->
                                     <div class="pb-12 text-center">
                                         <!--begin::Title-->
                                         <h1 class="fw-bolder text-dark">Project information set!</h1>
                                         <!--end::Title-->
                                         <!--begin::Description-->
                                         <div class="text-muted fw-bold fs-4">
                                             Make sure you have set all the project information correctly before proceeding to project creation!
                                         </div>
                                         <!--end::Description-->
                                     </div>
                                     <!--end::Heading-->
                                     <!--begin::Actions-->
                                     <div class="d-flex flex-center pb-20">
                                         <button type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                                             Create New Project
                                         </button>
                                         <button class="btn btn-lg btn-primary" id="kt_project_submit" data-bs-toggle="tooltip" title="Create Project">Create Project</button>
                                     </div>
                                     <!--end::Actions-->
                                     <!--begin::Illustration-->
                                     <div class="text-center px-4">
                                         <img src="<?php echo $filePathScript ?>assets/media/illustrations/sigma-1/9.png" alt="" class="mww-100 mh-350px" />
                                     </div>
                                     <!--end::Illustration-->
                                 </div>
                             </div>
                             <!--end::Complete-->
                         </form>
                         <!--end::Form-->
                     </div>
                     <!--begin::Container-->
                 </div>
                 <!--end::Stepper-->
             </div>
             <!--end::Modal body-->
         </div>
         <!--end::Modal content-->
     </div>
     <!--end::Modal dialog-->
 </div>
 <!--end::Modal - Create Project-->