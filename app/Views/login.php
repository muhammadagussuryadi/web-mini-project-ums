<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Title -->
	<title> Mini Project </title>

	<!--- Favicon --->
	<link rel="icon" href="<?= base_url() ?>/assets/img/brand/favicon.png" type="image/x-icon" />

	<!--- Icons css --->
	<link href="<?= base_url() ?>/assets/css/icons.css" rel="stylesheet">

	<!--- Right-sidemenu css --->
	<link href="<?= base_url() ?>/assets/plugins/sidebar/sidebar.css" rel="stylesheet">

	<!--- Custom Scroll bar --->
	<link href="<?= base_url() ?>/assets/plugins/mscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

	<!--- Style css --->
	<link href="<?= base_url() ?>/assets/css/style.css" rel="stylesheet">
	<link href="<?= base_url() ?>/assets/css/skin-modes.css" rel="stylesheet">

	<!--- Animations css --->
	<link href="<?= base_url() ?>/assets/css/animate.css" rel="stylesheet">

	<style type="text/css">
		.abcRioButton{
			width:100% !important;
		}
	</style>

</head>

<body class="main-body bg-light">

	<!-- Loader -->
	<div id="global-loader">
		<img src="<?= base_url() ?>/assets/img/loaders/loader-4.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->

	<!-- page -->
	<div class="page">

		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
					<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white">
						<div class="my-auto authentication-pages">
							<div>
								<img src="<?= base_url() ?>/assets/img/brand/logo.png" class=" m-0 mb-4" width="150" alt="logo">
								<h5 class="mb-1">Mini Project !</h5>
								<p class="mb-1">
									Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam tempore commodi enim tempora, eveniet at incidunt atque nemo, rerum ut pariatur id voluptatem quos maiores, voluptate aspernatur molestias vero dolorum.
								</p>
							</div>
						</div>
					</div>
					<div class="p-5 wd-md-50p">
						<div class="main-signin-header">
							<h2>Selamat datang !</h2>
							<h4>Silahkan login untuk melanjutkan</h4>
							<form action="<?= base_url()?>/login" method="post">
								<div class="form-group">
									<label>Email</label>
                  <input class="form-control" placeholder="Email" type="text" name="email" value="">
								</div>
								<div class="form-group">
									<label>Password</label>
                  <input class="form-control" placeholder="Password" type="password" name="password" value="">
								</div>
                <button class="btn btn-main-primary btn-block">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
	</div>
	<!-- End page -->

	<!--- JQuery min js --->
	<script src="<?= base_url() ?>/assets/plugins/jquery/jquery.min.js"></script>

	<!--- Bootstrap Bundle js --->
	<script src="<?= base_url() ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!--- Ionicons js --->
	<script src="<?= base_url() ?>/assets/plugins/ionicons/ionicons.js"></script>

	<!--- Moment js --->
	<script src="<?= base_url() ?>/assets/plugins/moment/moment.js"></script>

	<!--- Eva-icons js --->
	<script src="<?= base_url() ?>/assets/js/eva-icons.min.js"></script>

	<!--- Rating js --->
	<script src="<?= base_url() ?>/assets/plugins/rating/jquery.rating-stars.js"></script>
	<script src="<?= base_url() ?>/assets/plugins/rating/jquery.barrating.js"></script>

	<!--- Index js --->
	<script src="<?= base_url() ?>/assets/js/script.js"></script>

	<!--- Custom js --->
	<script src="<?= base_url() ?>/assets/js/custom.js"></script>

</html>