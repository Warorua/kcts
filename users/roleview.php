
<?php
include './includes/head.php';
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
				<?php include $filePath.'includes/menu.php' ?>
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
					
					<?php include $filePath.'includes/header.php' ?>
					<!--end::Header-->

                
					<!--begin::Header tablet and mobile-->
				 <div class="header-mobile py-3">
						<!--begin::Container-->
						<div class="container d-flex flex-stack">
							<!--begin::Mobile logo-->
							<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
								<a href="<?php echo $filePathScript ?>index.html">
									<img alt="Logo" src="<?php echo $filePathScript ?>assets/media/logos/logo-demo9.svg" class="h-35px">
								</a>
							</div>
							<!--end::Mobile logo-->
							<!--begin::Aside toggle-->
							<button class="btn btn-icon btn-active-color-primary" id="kt_aside_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-2x me-n1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor"></path>
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor"></path>
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
					
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl" id="kt_content_container">
							<!--begin::Layout-->
							<div class="d-flex flex-column flex-lg-row">
								<!--begin::Sidebar-->
								<div class="flex-column flex-lg-row-auto w-100 w-lg-200px w-xl-300px mb-10">
									<!--begin::Card-->
									<div class="card card-flush">
										<!--begin::Card header-->
										<div class="card-header">
											<!--begin::Card title-->
											<div class="card-title">
												<h2 class="mb-0">County Admin</h2>
											</div>
											<!--end::Card title-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Permissions-->
											<div class="d-flex flex-column text-gray-600">
												<div class="d-flex align-items-center py-2">
												<span class="bullet bg-primary me-3"></span>Admin Controls</div>
												<div class="d-flex align-items-center py-2">
												<span class="bullet bg-primary me-3"></span>Manage Users</div>
												<div class="d-flex align-items-center py-2">
												<span class="bullet bg-primary me-3"></span>Manage Procurements </div>
												<div class="d-flex align-items-center py-2">
												<span class="bullet bg-primary me-3"></span>Manage Projects</div>
												<div class="d-flex align-items-center py-2">
												<span class="bullet bg-primary me-3"></span>Access to Reporting</div>
												<div class="d-flex align-items-center py-2 d-none">
													<span class="bullet bg-primary me-3"></span>
													<em>and 3 more...</em>
												</div>
											</div>
											<!--end::Permissions-->
										</div>
										<!--end::Card body-->
										<!--begin::Card footer-->
										<div class="card-footer pt-0">
											<button type="button" class="btn btn-light btn-active-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_update_role">Edit Role</button>
										</div>
										<!--end::Card footer-->
									</div>
									<!--end::Card-->
									<!--begin::Modal-->
									<!--begin::Modal - Update role-->
									<div class="modal fade" id="kt_modal_update_role" tabindex="-1" aria-hidden="true">
										<!--begin::Modal dialog-->
										<div class="modal-dialog modal-dialog-centered mw-750px">
											<!--begin::Modal content-->
											<div class="modal-content">
												<!--begin::Modal header-->
												<div class="modal-header">
													<!--begin::Modal title-->
													<h2 class="fw-bolder">Update Role</h2>
													<!--end::Modal title-->
													<!--begin::Close-->
													<div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-roles-modal-action="close">
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
												<div class="modal-body scroll-y mx-5 my-7">
													<!--begin::Form-->
													<form id="kt_modal_update_role_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
														<!--begin::Scroll-->
														<div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_update_role_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_update_role_header" data-kt-scroll-wrappers="#kt_modal_update_role_scroll" data-kt-scroll-offset="300px" style="max-height: 67px;">
															<!--begin::Input group-->
															<div class="fv-row mb-10 fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="fs-5 fw-bolder form-label mb-2">
																	<span class="required">Role name</span>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input class="form-control form-control-solid" placeholder="Enter a role name" name="role_name" value="Developer">
																<!--end::Input-->
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
															<!--end::Input group-->
															<!--begin::Permissions-->
															<div class="fv-row">
																<!--begin::Label-->
																<label class="fs-5 fw-bolder form-label mb-2">Role Permissions</label>
																<!--end::Label-->
																<!--begin::Table wrapper-->
																<div class="table-responsive">
																	<!--begin::Table-->
																	<table class="table align-middle table-row-dashed fs-6 gy-5">
																		<!--begin::Table body-->
																		<tbody class="text-gray-600 fw-bold">
																			<!--begin::Table row-->
																			<tr>
																				<td class="text-gray-800">Administrator Access 
																				<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Allows a full access to the system" aria-label="Allows a full access to the system"></i></td>
																				<td>
																					<!--begin::Checkbox-->
																					<label class="form-check form-check-sm form-check-custom form-check-solid me-9">
																						<input class="form-check-input" type="checkbox" value="" id="kt_roles_select_all">
																						<span class="form-check-label" for="kt_roles_select_all">Select all</span>
																					</label>
																					<!--end::Checkbox-->
																				</td>
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">User Management</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="user_management_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="user_management_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="user_management_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Content Management</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="content_management_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="content_management_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="content_management_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Financial Management</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="financial_management_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="financial_management_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="financial_management_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Reporting</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="reporting_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="reporting_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="reporting_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Payroll</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="payroll_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="payroll_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="payroll_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Disputes Management</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="disputes_management_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="disputes_management_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="disputes_management_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">API Controls</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="api_controls_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="api_controls_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="api_controls_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Database Management</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="database_management_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="database_management_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="database_management_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																			<!--begin::Table row-->
																			<tr>
																				<!--begin::Label-->
																				<td class="text-gray-800">Repository Management</td>
																				<!--end::Label-->
																				<!--begin::Input group-->
																				<td>
																					<!--begin::Wrapper-->
																					<div class="d-flex">
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-sm form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="repository_management_read">
																							<span class="form-check-label">Read</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid me-5 me-lg-20">
																							<input class="form-check-input" type="checkbox" value="" name="repository_management_write">
																							<span class="form-check-label">Write</span>
																						</label>
																						<!--end::Checkbox-->
																						<!--begin::Checkbox-->
																						<label class="form-check form-check-custom form-check-solid">
																							<input class="form-check-input" type="checkbox" value="" name="repository_management_create">
																							<span class="form-check-label">Create</span>
																						</label>
																						<!--end::Checkbox-->
																					</div>
																					<!--end::Wrapper-->
																				</td>
																				<!--end::Input group-->
																			</tr>
																			<!--end::Table row-->
																		</tbody>
																		<!--end::Table body-->
																	</table>
																	<!--end::Table-->
																</div>
																<!--end::Table wrapper-->
															</div>
															<!--end::Permissions-->
														</div>
														<!--end::Scroll-->
														<!--begin::Actions-->
														<div class="text-center pt-15">
															<button type="reset" class="btn btn-light me-3" data-kt-roles-modal-action="cancel">Discard</button>
															<button type="submit" class="btn btn-primary" data-kt-roles-modal-action="submit">
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
									<!--end::Modal - Update role-->
									<!--end::Modal-->
								</div>
								<!--end::Sidebar-->
								<!--begin::Content-->
								<div class="flex-lg-row-fluid ms-lg-10">
									<!--begin::Card-->
									<div class="card card-flush mb-6 mb-xl-9">
										<!--begin::Card header-->
										<div class="card-header pt-5">
											<!--begin::Card title-->
											<div class="card-title">
												<h2 class="d-flex align-items-center">Users Assigned
												<span class="text-gray-600 fs-6 ms-1">(14)</span></h2>
											</div>
											<!--end::Card title-->
											<!--begin::Card toolbar-->
											<div class="card-toolbar">
												<!--begin::Search-->
												<div class="d-flex align-items-center position-relative my-1" data-kt-view-roles-table-toolbar="base">
													<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
													<span class="svg-icon svg-icon-1 position-absolute ms-6">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
															<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"></path>
														</svg>
													</span>
													<!--end::Svg Icon-->
													<input type="text" data-kt-roles-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Users">
												</div>
												<!--end::Search-->
												<!--begin::Group actions-->
												<div class="d-flex justify-content-end align-items-center d-none" data-kt-view-roles-table-toolbar="selected">
													<div class="fw-bolder me-5">
													<span class="me-2" data-kt-view-roles-table-select="selected_count"></span>Selected</div>
													<button type="button" class="btn btn-danger" data-kt-view-roles-table-select="delete_selected">Delete Selected</button>
												</div>
												<!--end::Group actions-->
											</div>
											<!--end::Card toolbar-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-0">
											<!--begin::Table-->
											<div id="kt_roles_view_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer" id="kt_roles_view_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0"><th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label="
															
																
															
														" style="width: 29.25px;">
															<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
																<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_roles_view_table .form-check-input" value="1">
															</div>
														</th><th class="min-w-50px sorting" tabindex="0" aria-controls="kt_roles_view_table" rowspan="1" colspan="1" aria-label="ID: activate to sort column ascending" style="width: 75.0625px;">ID</th><th class="min-w-150px sorting" tabindex="0" aria-controls="kt_roles_view_table" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 280.672px;">User</th><th class="min-w-125px sorting sorting_asc" tabindex="0" aria-controls="kt_roles_view_table" rowspan="1" colspan="1" aria-label="Joined Date: activate to sort column descending" style="width: 202.25px;" aria-sort="ascending">Joined Date</th><th class="text-end min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Actions" style="width: 125.266px;">Actions</th></tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-bold text-gray-600">
													
													
													
													
													
													
													
													
													
													
													
													
													
													
												<tr class="odd">
														<!--begin::Checkbox-->
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<!--end::Checkbox-->
														<!--begin::ID-->
														<td>ID3986</td>
														<!--begin::ID-->
														<!--begin::User=-->
														<td class="d-flex align-items-center">
															<!--begin:: Avatar -->
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="../users/view.html">
																	<div class="symbol-label fs-3 bg-light-danger text-danger">E</div>
																</a>
															</div>
															<!--end::Avatar-->
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="../users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Bold</a>
																<span>emma@intenso.com</span>
															</div>
															<!--begin::User details-->
														</td>
														<!--end::user=-->
														<!--begin::Joined date=-->
														<td data-order="2022-02-21T10:30:00+05:00" class="sorting_1">21 Feb 2022, 10:30 am</td>
														<!--end::Joined date=-->
														<!--begin::Action=-->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="../users/view.html" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
														<!--end::Action=-->
													</tr><tr class="even">
														<!--begin::Checkbox-->
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<!--end::Checkbox-->
														<!--begin::ID-->
														<td>ID5110</td>
														<!--begin::ID-->
														<!--begin::User=-->
														<td class="d-flex align-items-center">
															<!--begin:: Avatar -->
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="../users/view.html">
																	<div class="symbol-label">
																		<img src="<?php echo $filePathScript ?>assets/media/avatars/300-5.jpg" alt="Sean Bean" class="w-100">
																	</div>
																</a>
															</div>
															<!--end::Avatar-->
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="../users/view.html" class="text-gray-800 text-hover-primary mb-1">Sean Bean</a>
																<span>sean@dellito.com</span>
															</div>
															<!--begin::User details-->
														</td>
														<!--end::user=-->
														<!--begin::Joined date=-->
														<td data-order="2022-02-21T11:05:00+05:00" class="sorting_1">21 Feb 2022, 11:05 am</td>
														<!--end::Joined date=-->
														<!--begin::Action=-->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="../users/view.html" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
														<!--end::Action=-->
													</tr><tr class="odd">
														<!--begin::Checkbox-->
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<!--end::Checkbox-->
														<!--begin::ID-->
														<td>ID9544</td>
														<!--begin::ID-->
														<!--begin::User=-->
														<td class="d-flex align-items-center">
															<!--begin:: Avatar -->
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="../users/view.html">
																	<div class="symbol-label">
																		<img src="<?php echo $filePathScript ?>assets/media/avatars/300-9.jpg" alt="Francis Mitcham" class="w-100">
																	</div>
																</a>
															</div>
															<!--end::Avatar-->
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="../users/view.html" class="text-gray-800 text-hover-primary mb-1">Francis Mitcham</a>
																<span>f.mit@kpmg.com</span>
															</div>
															<!--begin::User details-->
														</td>
														<!--end::user=-->
														<!--begin::Joined date=-->
														<td data-order="2022-02-21T17:30:00+05:00" class="sorting_1">21 Feb 2022, 5:30 pm</td>
														<!--end::Joined date=-->
														<!--begin::Action=-->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="../users/view.html" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
														<!--end::Action=-->
													</tr><tr class="even">
														<!--begin::Checkbox-->
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<!--end::Checkbox-->
														<!--begin::ID-->
														<td>ID3471</td>
														<!--begin::ID-->
														<!--begin::User=-->
														<td class="d-flex align-items-center">
															<!--begin:: Avatar -->
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="../users/view.html">
																	<div class="symbol-label fs-3 bg-light-warning text-warning">C</div>
																</a>
															</div>
															<!--end::Avatar-->
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="../users/view.html" class="text-gray-800 text-hover-primary mb-1">Mikaela Collins</a>
																<span>mik@pex.com</span>
															</div>
															<!--begin::User details-->
														</td>
														<!--end::user=-->
														<!--begin::Joined date=-->
														<td data-order="2022-03-10T14:40:00+05:00" class="sorting_1">10 Mar 2022, 2:40 pm</td>
														<!--end::Joined date=-->
														<!--begin::Action=-->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="../users/view.html" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
														<!--end::Action=-->
													</tr><tr class="odd">
														<!--begin::Checkbox-->
														<td>
															<div class="form-check form-check-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="1">
															</div>
														</td>
														<!--end::Checkbox-->
														<!--begin::ID-->
														<td>ID9546</td>
														<!--begin::ID-->
														<!--begin::User=-->
														<td class="d-flex align-items-center">
															<!--begin:: Avatar -->
															<div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
																<a href="../users/view.html">
																	<div class="symbol-label">
																		<img src="<?php echo $filePathScript ?>assets/media/avatars/300-12.jpg" alt="Ana Crown" class="w-100">
																	</div>
																</a>
															</div>
															<!--end::Avatar-->
															<!--begin::User details-->
															<div class="d-flex flex-column">
																<a href="../users/view.html" class="text-gray-800 text-hover-primary mb-1">Ana Crown</a>
																<span>ana.cf@limtel.com</span>
															</div>
															<!--begin::User details-->
														</td>
														<!--end::user=-->
														<!--begin::Joined date=-->
														<td data-order="2022-03-10T14:40:00+05:00" class="sorting_1">10 Mar 2022, 2:40 pm</td>
														<!--end::Joined date=-->
														<!--begin::Action=-->
														<td class="text-end">
															<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions 
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"></path>
																</svg>
															</span>
															<!--end::Svg Icon--></a>
															<!--begin::Menu-->
															<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="../users/view.html" class="menu-link px-3">View</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="#" class="menu-link px-3" data-kt-roles-table-filter="delete_row">Delete</a>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu-->
														</td>
														<!--end::Action=-->
													</tr></tbody>
												<!--end::Table body-->
											</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_roles_view_table_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_roles_view_table_previous"><a href="#" aria-controls="kt_roles_view_table" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_roles_view_table" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_roles_view_table" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_roles_view_table" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_roles_view_table_next"><a href="#" aria-controls="kt_roles_view_table" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card-->
								</div>
								<!--end::Content-->
							</div>
							<!--end::Layout-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					
					<!--end::Footer-->
				 </div>

                    </div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--begin::Drawers-->
		<?php include $filePath.'includes/drawers.php' ?>
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
		<?php include $filePath.'includes/modals.php' ?>
		<!--end::Modals-->
		<!--begin::Javascript-->
		<?php include $filePath.'includes/scripts.php' ?>
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

<!--index.html :55:59-->
</html>

