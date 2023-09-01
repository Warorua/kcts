<?php
include '../includes/plain_head.php';
?>
<style>
	
	.background-container-cs {
    background-image: url('../assets/media/backgroung.png');
    
    
  }

  .overlay-cs {
    background-color: rgba(75, 149, 57, 0.8); /* Transparent green overlay */
  }

</style>
<!--begin::Body-->
<body id="kt_body" class="bg-body">
		<!--Begin::Google Tag Manager (noscript) -->
		
		<!--End::Google Tag Manager (noscript) -->
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Aside-->
				<div class="d-flex flex-column flex-lg-row-auto w-xl-600px positon-xl-relative background-container-cs">
					<!--begin::Wrapper-->
					<div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y overlay-cs">
						<!--begin::Content-->
						<div class="d-flex flex-row-fluid flex-column text-center p-10 pt-lg-20">
							<!--begin::Logo-->
							<a href="../index.php" class="py-9 mb-5">
								<img alt="Logo" src="../assets/media/logos/logo-3.png" class="h-100px" />
							</a>
							<!--end::Logo-->
							<!--begin::Title-->
							<h1 class="fw-bolder fs-2qx pb-5 pb-md-10" style="color: #573c14;">Welcome to Kakamega County Tracking System</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<p class="fw-bold fs-2" style="color: #573c14;">Discover Amazing Kakamega County Tracking System 
							<br />with great build tools</p>
							<!--end::Description-->
						</div>
						<!--end::Content-->
						<!--begin::Illustration-->
						<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url(/demo9/assets/media/illustrations/sigma-1/13.png)"></div>
						<!--end::Illustration-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::Aside-->
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid py-10">
					<!--begin::Content-->
					<div class="d-flex flex-center flex-column flex-column-fluid">
						<!--begin::Wrapper-->
						<div class="w-lg-500px p-10 p-lg-15 mx-auto">
							<!--begin::Form-->
							<form class="form w-100" novalidate="novalidate" id="kt_sign_in_form" action="verify" method="POST">
								<input type="hidden" name="login" value="" />
							<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3">Sign In to Kakamega County Tracking System</h1>
									<!--end::Title-->
									<!--begin::Link-->
									<div class="text-gray-400 fw-bold fs-4">New Here? 
									<a href="new" class="link-primary fw-bolder">Create an Account</a></div>
									<!--end::Link-->
								</div>
								<!--begin::Heading-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Label-->
									<label class="form-label fs-6 fw-bolder text-dark">Email</label>
									<!--end::Label-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Input group-->
								<div class="fv-row mb-10">
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack mb-2">
										<!--begin::Label-->
										<label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
										<!--end::Label-->
										<!--begin::Link-->
										<a href="password" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
										<!--end::Link-->
									</div>
									<!--end::Wrapper-->
									<!--begin::Input-->
									<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
									<!--end::Input-->
								</div>
								<!--end::Input group-->
								<!--begin::Actions-->
								<div class="text-center">
									<!--begin::Submit button-->
									<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
										<span class="indicator-label">Continue</span>
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
									<!--end::Submit button-->
									<!--begin::Separator-->
									<div class="text-center text-muted text-uppercase fw-bolder mb-5">or</div>
									<!--end::Separator-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="../assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Continue with Google</a>
									<!--end::Google link-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5">
									<img alt="Logo" src="../assets/media/svg/brand-logos/facebook-4.svg" class="h-20px me-3" />Continue with Facebook</a>
									<!--end::Google link-->
									<!--begin::Google link-->
									<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100">
									<img alt="Logo" src="../assets/media/svg/brand-logos/apple-black.svg" class="h-20px me-3" />Continue with Apple</a>
									<!--end::Google link-->
								</div>
								<!--end::Actions-->
							</form>
							<!--end::Form-->
						</div>
						<!--end::Wrapper-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
				<div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
					<!--begin::Links-->
					<div class="d-flex flex-center fw-bold fs-6">
						<a href="#" class="text-muted text-hover-primary px-2" target="_blank">Home</a>
						<a href="#" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
					</div>
					<!--end::Links-->
				</div>
				<!--end::Footer-->
				</div>
				<!--end::Body-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "../assets/index.php";</script>
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="../assets/plugins/global/plugins.bundle.js"></script>
		<script src="../assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="../assets/js/custom/authentication/sign-in/general.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->

<?php include '../includes/alert.php' ?>
<!-- authentication/layouts/fancy/login 22:56:35 GMT -->

</html>