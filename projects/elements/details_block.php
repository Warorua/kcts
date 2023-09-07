<div class="d-flex flex-wrap flex-sm-nowrap mb-6">
    <!--begin::Image-->
    <div class="d-flex flex-center flex-shrink-0 bg-light rounded w-100px h-100px w-lg-150px h-lg-150px me-7 mb-4">
        <img class="mw-50px mw-lg-75px" src="<?php echo $filePathScript ?>assets/media/svg/brand-logos/volicity-9.svg" alt="image" />
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
                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-3"><?php echo $project['settings_name'] ?></a>
                    <?php
                    if ($project['status'] == 0) {
                        $projectProgressTitle = 'Not Active';
                        $projectProgressTheme = 'danger';
                    } else {
                        $projectProgressTitle = 'In Progress';
                        $projectProgressTheme = 'success';
                    }
                    ?>
                    <span class="badge badge-light-<?php echo $projectProgressTheme ?> me-auto"><?php echo $projectProgressTitle ?></span>
                </div>
                <!--end::Status-->
                <!--begin::Description-->
                <div class="d-flex flex-wrap fw-bold mb-4 fs-5 text-gray-400"><?php echo $project['settings_description'] ?></div>
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
                        <div class="fs-4 fw-bolder"><?php echo $project['settings_release_date'] ?></div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <div class="fw-bold fs-6 text-gray-400">Release Date</div>
                    <!--end::Label-->
                </div>
                <!--end::Stat-->
                <!--begin::Stat-->
                <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                    <!--begin::Number-->
                    <div class="d-flex align-items-center">
                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="<?php echo number_format(str_replace('KES', '', $project['budget_setup']), 0, '', '') ?>" data-kt-countup-prefix="KES">0</div>
                    </div>
                    <!--end::Number-->
                    <!--begin::Label-->
                    <?php


                    ?>
                    <div class="fw-bold fs-6 text-gray-400">Project Budget</div>
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
                        <div class="fs-4 fw-bolder" data-kt-countup="true" data-kt-countup-value="0" data-kt-countup-prefix="KES">0</div>
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