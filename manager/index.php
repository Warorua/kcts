<?php
include './includes/header2.php';
if (isset($_SESSION['UID']))
	header('location:pages/index.php');
?>
<script src="assets/js/jquery.min.js"></script>

<script src="datatables/jquery.dataTables.js"></script>
<script src="datatables/dataTables.bootstrap.js"></script>
<link href="datatables/dataTables.bootstrap.css" rel="stylesheet">


<script src="asset/js/bootstrap.min.js" type="text/javascript"></script>

<script src="assets/js/ie-emulation-modes-warning.js"></script>

<script src="chosen/chosen.jquery.js"></script>
<link href="chosen/chosen.css" rel="stylesheet" media="screen">
<style>
	#title1 {
		display: block;
		width: 50%;
		height: 90px;
		background-color: white;
		padding: 1px;
		border-radius: 5px;
		position: fixed;
		top: 30%;
		z-index: 1000px;
	}

	#main-bod {
		background: url(images/construction-cover.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		display: flex;
		height: calc(100%);
		width: calc(100%);
		align-items: center;
		justify-content: center;
		top: 0;
		margin: unset
	}
</style>

<body id="main-bod">
	<div class="col-lg-4 card mb-5 mb-xl-8">

		<div class="panel panel-info" style="">
			<div class="panel-heading card-header">
				<div class="card-title">Login</div>
			</div>
			<div class="panel-body card-body">
				<div class="container-fluid">
					<form class="form-horizontal" method="POST" id="login_form">
						<div class="form-group" id="form-login">
							<label for="" class="control-label">Username</label>
							<input class="form-control" id="user" name="user" type="text">
						</div>
						<div class="form-group">
							<label for="" class="control-label">Password</label>
							<input type="password" name="pass" id="pass" class="form-control">
						</div>
						<div class="form-group mt-4" id="msg">
							<div class="col-sm-8 col-sm-offset-8">
								<button type="submit" class="btn btn-info">Login</button> <br>
							</div>

							<div class="col-sm-12 mt-8">
								<div class="alert alert-success" id="correct"> Successfully Log in!</div>
								<div class="alert alert-danger" id="error"></div>
							</div>
						</div>


					</form>
				</div>

			</div>
		</div>
	</div>
</body>
<script>
	jQuery(document).ready(function() {
		jQuery(document).ready(function() {
			$("#correct").hide();
			$("#error").hide();
			jQuery("#login_form").submit(function(e) {
				e.preventDefault();
				var formData = jQuery(this).serialize();
				$.ajax({
					type: "POST",
					url: "includes/login.php",
					data: formData,
					success: function(html) {
						if (html == 'true') {
							$('#error').hide();
							$("#correct").slideDown();
							var delay = 2000;
							setTimeout(function() {
								window.location = 'pages/index.php?page=home';
							}, delay);
						} else {
							$('#error').slideDown();
							$('#error').text(html);
							var delay = 10000;
							setTimeout(function() {
								$('#error').slideUp();
							}, delay);
						}
					}
				});
				return false;
			});
		});
	});
</script>
<?php
include '../includes/scripts.php';
?>