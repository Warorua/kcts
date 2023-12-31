<?php
include '../includes/head.php';
$dashHeadTitle = 'Profile';
$dashHeadDesc = $user_firstname."'s profile dashboard";

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
				<!--begin::Header-->
				<?php include '../includes/header.php' ?>
				<!--end::Header-->
				<!--begin::Toolbar-->
				<?php include '../includes/toolbar.php' ?>
				<!--end::Toolbar-->
				<!--begin::Container-->
				<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
					<!--begin::Post-->
					<div class="content flex-row-fluid" id="kt_content">
						<!--begin::Navbar-->
						<div class="card mb-5 mb-xl-10">
							<div class="card-body pt-9 pb-0">
								<!--begin::Details-->
								<?php include './blocks/details_block.php' ?>
								<!--end::Details-->
								<!--begin::Navs-->
								<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="user">Overview</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5" href="settings">Settings</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5" href="security">Security</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5" href="billing">Billing</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5" href="statements">Campaigns</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5" href="referrals">Referrals</a>
									</li>
									<!--end::Nav item-->
									<!--begin::Nav item-->
									<li class="nav-item mt-2">
										<a class="nav-link text-active-primary ms-0 me-10 py-5" href="logs">Logs</a>
									</li>
									<!--end::Nav item-->
								</ul>
								<!--begin::Navs-->
							</div>
						</div>
						<!--end::Navbar-->










						<!--begin::Row-->
						<div class="row g-5 g-xxl-8 ">
							<!--begin::Col-->
							<div class="col-xl-6">
								<!--begin::Feeds Widget 1-->


								<?php

								if (isset($_SESSION['tweetMedia'])) {
									unset($_SESSION['tweetMedia']);
								}
								$form_action = '/process/post/tweet.php';
								$form_id = 'tweet_process_09';
								$rep_status = '';
								$rep_text = 'tweet';
								include '../includes/elements/tweet_form.php';
								?>


								<!--end::Feeds Widget 1-->



								<!--begin::Posts-->
								<div class="mb-10">
									<!--begin::Post 1-->
									<!--begin::Card-->




									<div id="activeTweet"></div>
									<div id="placeholderTweet">
									
									</div>








								</div>
								<!--end::Posts-->






















							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-6">
								<!--begin::Charts Widget 1-->
								<div class="card mb-5 mb-xxl-8">
									<!--begin::Card header-->
									<div class="card-header cursor-pointer">
										<!--begin::Card title-->
										<div class="card-title m-0">
											<h3 class="fw-bold m-0">Profile Details</h3>
										</div>
										<!--end::Card title-->
										<!--begin::Action-->
										<a href="settings" class="btn btn-primary align-self-center">Edit Profile</a>
										<!--end::Action-->
									</div>
									<!--begin::Card header-->
									<!--begin::Card body-->
									<div class="card-body p-9">
										<!--begin::Row-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Twitter ID Number</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<span class="badge badge-light-info fw-bold fs-6"><?php echo $user['t_id'] ?></span>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Row-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Full Name</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<span class="fw-bold fs-6 text-gray-800"><?php echo $user_fullname ?></span>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Row-->
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Contact Phone
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i></label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8 d-flex align-items-center">
												<span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $user_contact ?></span>
												<?php echo $user_contact_verify ?>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Projects</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php echo number_format($user_points) ?></a>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Country
												<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i></label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<span class="fw-bold fs-6 text-gray-800"><?php echo $user_country ?></span>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-7">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Communication</label>
											<!--end::Label-->
											<!--begin::Col-->
											<div class="col-lg-8">
												<span class="fw-bold fs-6 text-gray-800"><?php echo $user_communication ?></span>
											</div>
											<!--end::Col-->
										</div>
										<!--end::Input group-->
										<!--begin::Input group-->
										<div class="row mb-10">
											<!--begin::Label-->
											<label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>
											<!--begin::Label-->
											<!--begin::Label-->
											<div class="col-lg-8">
												<span class="fw-semibold fs-6 text-gray-800">Yes</span>
											</div>
											<!--begin::Label-->
										</div>
										<!--end::Input group-->
										
										<!--end::Notice-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Charts Widget 1-->
								<!--begin::Stats widget widget 2-->
								<div class="card card-flush mb-5 mb-xxl-8">
									<!--begin::Header-->
									<div class="card-header pt-5">
										<h3 class="card-title align-items-start flex-column">
											<span class="card-label fw-bold text-dark">Earnings</span>
											<span class="text-muted mt-1 fw-semibold fs-7">Projects</span>
										</h3>
									</div>
									<!--end::Header-->
									<!--begin::Body-->
									<div class="card-body">
										<!--begin::Chart-->
										<div class="card card-bordered">
											<div class="card-body">
												<div id="kt_amcharts_5" style="height: 500px;"></div>
											</div>
										</div>
										<!--end::Chart-->
									</div>
									<!--end::Body-->
								</div>
								<!--end::Stats widget widget 2-->
								<?php
								$profile_stats = $user_metrics;
								//$profile_stats = user_metrics('1462050191662538757');

								//include '../includes/elements/profile_stats.php';


								?>
								<?php
								//$following_list_data = get_following($user['t_id']);
								//$follower_list_data = get_followers('1462050191662538757');

								//include '../includes/elements/following_list.php';


								?>

								<?php
								//$follower_list_data = get_followers($user['t_id']);
								//$follower_list_data = get_followers('1462050191662538757');


								//include '../includes/elements/follower_list.php';


								?>
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->










					</div>
					<!--end::Post-->
				</div>
				<!--end::Container-->
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

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
	<?php include '../includes/scripts.php';
	//$_SESSION['error'] = $fbemail;
	?>


	<script>
		const Toast2 = Swal.mixin({
			toast: true,
			position: 'bottom',
			showConfirmButton: false,
			timer: 100000,
			width: '100%',
			timerProgressBar: true,
			background: 'rgba(223, 204, 255, 0.9)',
			customClass: {
				//title: 'loader_content_processor',
			},
			didOpen: (toast) => {
				toast.addEventListener('mouseenter', Swal.stopTimer)
				toast.addEventListener('mouseleave', Swal.resumeTimer)
			}
		});

		Toast2.fire({
			icon: 'info',
			iconColor: '#0d6efd',
			title: '?',
		})
	</script>


	<script>
		$(document).ready(function() {
			$.ajax({
				type: "POST",
				url: "../process/get/tweet_card.php",
				data: {
					user: '<?php echo $user['t_id'] ?>'
				},
				success: function(data) {
					$("#placeholderTweet").css('display', 'none');
					Toast2.close();
					$("#activeTweet").html(data);
					setInterval(function() {
						$('a#tweetRef').css('display', '');
					}, 30000);



				}
			});
		});

		$('a#tweetRef').click(function() {
			$('a#tweetRef').css('display', 'none');
			Toast2.fire({
				icon: 'info',
				iconColor: '#0d6efd',
				title: '?',
			});
			$("#activeTweet").css('display', 'none');
			$("#placeholderTweet").css('display', '');

			$.ajax({
				type: "POST",
				url: "../process/get/tweet_card.php",
				data: {
					user: '<?php echo $user['t_id'] ?>'
				},
				success: function(data) {
					$("#placeholderTweet").css('display', 'none');
					Toast2.close();
					$("#activeTweet").html(data);
					$("#activeTweet").css('display', '');
					setInterval(function() {
						$('a#tweetRef').css('display', '');
					}, 30000);

				}
			});
			var typed = new Typed("#swal2-title", {
				strings: ["restarting the engine...", "bargaining...", "profiling...", "arguing...", "receiving data..."],
				typeSpeed: 30,
				showCursor: false,
				loop: true,
				shuffle: true,
			});

		});
	</script>
	<script>
		var typed = new Typed("#swal2-title", {
			strings: ["restarting the engine...", "bargaining...", "profiling...", "arguing...", "receiving data..."],
			typeSpeed: 30,
			showCursor: false,
			loop: true,
			shuffle: true,
		});
	</script>


	<script>
		// set the dropzone container id
		const id = "#<?php echo $form_id ?>";
		const dropzone = document.querySelector(id);

		// set the preview element template
		var previewNode = dropzone.querySelector(".dropzone-item");
		previewNode.id = "";
		var previewTemplate = previewNode.parentNode.innerHTML;
		previewNode.parentNode.removeChild(previewNode);

		var myDropzone = new Dropzone(id, { // Make the whole body a dropzone
			//url: "", // Set the url for your upload script location
			//method: "post",
			parallelUploads: 20,
			paramName: "file",
			maxFiles: 4,
			maxFilesize: 15, // Max filesize in MB
			acceptedFiles: ".jpeg,.png,.gif,.mp4,.jpg,.jfif",
			previewTemplate: previewTemplate,
			previewsContainer: id + " .dropzone-items", // Define the container to display the previews
			clickable: id + " .dropzone-select", // Define the element that should be used as click trigger to select files.
			maxfilesexceeded: function() {
				const Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000,
					timerProgressBar: true,
					didOpen: (toast) => {
						toast.addEventListener('mouseenter', Swal.stopTimer)
						toast.addEventListener('mouseleave', Swal.resumeTimer)
					}
				})

				Toast.fire({
					icon: 'error',
					title: 'Maximum files allowed is 4.'
				})
			},
		});

		myDropzone.on("addedfile", function(file) {
			// Hookup the start button
			const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
			dropzoneItems.forEach(dropzoneItem => {
				dropzoneItem.style.display = '';
			});
		});

		// Update the total progress bar
		myDropzone.on("totaluploadprogress", function(progress) {
			const progressBars = dropzone.querySelectorAll('.progress-bar');
			progressBars.forEach(progressBar => {
				progressBar.style.width = progress + "%";
			});
		});

		myDropzone.on("sending", function(file) {
			$('.tweetPosting').addClass('disabled');
			$('.tweetPosting').text("Uploading...");
			$('.tweetPosting').prepend('<span class="spinner-border spinner-border-sm" role="status"></span> ');
			// Show the total progress bar when upload starts
			const progressBars = dropzone.querySelectorAll('.progress-bar');
			progressBars.forEach(progressBar => {
				progressBar.style.opacity = "1";
			});
		});

		// Hide the total progress bar when nothing"s uploading anymore
		myDropzone.on("complete", function(progress) {
			$('.tweetPosting').removeClass('disabled');
			$('.tweetPosting').text("Tweet");
			const progressBars = dropzone.querySelectorAll('.dz-complete');

			setTimeout(function() {
				progressBars.forEach(progressBar => {
					progressBar.querySelector('.progress-bar').style.opacity = "0";
					progressBar.querySelector('.progress').style.opacity = "0";
				});
			}, 300);
		});



		/////////////////////////final form process
		$(document).on('submit', '#<?php echo $form_id ?>', function(e) {
			e.preventDefault();

			formData = new FormData(this);
			//formData.append('avatar', $('#upload_file_fr').files);


			$.ajax({
				method: "POST",
				url: "..<?php echo $form_action ?>",
				data: formData,
				processData: false, // tell jQuery not to process the data
				contentType: false, // tell jQuery not to set contentType
				enctype: 'multipart/form-data',

				success: function(data) {
					// alert(data);
					//console.log(data); 

					window.location.reload();
				}
			});
		});
	</script>

	<!--end::Javascript-->
</body>
<!--end::Body-->

<!-- account/user 22:56:11 GMT -->
<?php include '../includes/alert.php';
//session_destroy();

?>

</html>