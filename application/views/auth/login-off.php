<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link href="<?php echo base_url() . 'images/icons/favicon.ico' ?>">
	<!--===============================================================================================-->
	<link href="<?php echo base_url() . 'assets/css/bootstrap1.min.css' ?>" rel="stylesheet">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/fonts/fontawesome-5.3.1/css/fontawesome.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/animate/animate.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/css-hamburgers/hamburgers.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/animsition/css/animsition.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/select2/select2.min.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/vendor/daterangepicker/daterangepicker.css' ?>">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/util-new.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/main-new.css' ?>">
	<!--===============================================================================================-->
	<script>
		.bg {
			background: url(.. / images / bg / login - page.jpg) center / cover no - repeat;
		}
	</script>
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(images/bg-01.jpg);">
					<b style="color:#fff"> SISTEM INFORMASI MANAJEMEN ASET</b>
					<span class="login100-form-title-1">
						PT.Blitzspot
					</span>
				</div>

				<form class="login100-form validate-form" action="<?php echo base_url() ?>auth/login" method="post">
					<?= $this->session->flashdata('message'); ?>
					<div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" name="username" placeholder="Enter username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>

					<div class="flex-sb-m w-full p-b-30">
						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/jquery/jquery-3.2.1.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/animsition/js/animsition.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/popper.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/bootstrap/js/bootstrap.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/select2/select2.min.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/daterangepicker/moment.min.js' ?>"></script>
	<script src="<?php echo base_url() . 'assets/vendor/daterangepicker/daterangepicker.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/vendor/countdowntime/countdowntime.js' ?>"></script>
	<!--===============================================================================================-->
	<script src="<?php echo base_url() . 'assets/js/main.js' ?>"></script>

</body>

</html>