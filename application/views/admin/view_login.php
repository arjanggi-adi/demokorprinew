<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css"> -->
	<!-- <style>
		.login-page {
			background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['login_bg']; ?>) !important;
		}
	</style> -->
	<!-- Bootstrap Css -->
	<link href="<?= base_url(''); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(''); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url(''); ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
	<div class="account-pages my-5 pt-sm-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 col-lg-6 col-xl-5">
					<div class="card overflow-hidden">
						<div class="bg-primary bg-soft">
							<div class="row">
								<div class="col-7">
									<div class="text-primary p-4">
										<h5 class="text-primary">Admin Panel Login</h5>
										<p>Sign in to continue to Admin.</p>
									</div>
								</div>
								<div class="col-5 align-self-end">
									<img src="<?= base_url() ?>assets/images/profile-img.png" alt="" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="card-body pt-0">
							<div class="auth-logo">
								<a href="index" class="auth-logo-light">
									<div class="avatar-md profile-user-wid mb-4">
										<span class="avatar-title rounded-circle bg-light">
											<img src="<?= base_url() ?>assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
										</span>
									</div>
								</a>

								<a href="index" class="auth-logo-dark">
									<div class="avatar-md profile-user-wid mb-4">
										<span class="avatar-title rounded-circle bg-light">
											<img src="<?= base_url() ?>assets/images/logo.svg" alt="" class="rounded-circle" height="34">
										</span>
									</div>
								</a>
							</div>
							<div class="p-2">
								<?php
								if ($error != '') {
									echo '
									<div class="alert alert-danger alert-dismissible fade show" role="alert">
									' . $error . '
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
									</div>';
								}
								?>
								<?php echo form_open(base_url() . 'admin/login'); ?>
								<div class="mb-3">
									<label for="username" class="form-label">Email</label>
									<input class="form-control" placeholder="Email address" name="email" type="email" autocomplete="off" autofocus>
								</div>

								<div class="mb-3">
									<label class="form-label">Password</label>
									<div class="input-group auth-pass-inputgroup">
										<input class="form-control" placeholder="Password" name="password" type="password" autocomplete="off" value="">
										<button class="btn btn-light " type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
									</div>
								</div>

								<div class="mt-3 d-grid">
									<input type="submit" class="btn btn-primary btn-block btn-flat login-button" name="form1" value="Login">
								</div>

								<div class="mt-4 text-center">
									<a href="<?php echo base_url(); ?>admin/forget-password" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
								</div>
								<?php echo form_close(); ?>
							</div>

						</div>
					</div>
					<div class="mt-5 text-center">
						<div>
							<p>© <script>
									document.write(new Date().getFullYear())
								</script> KORPRI. Crafted with <i class="mdi mdi-heart text-danger"></i> by KORPRI Provinsi Bali
							</p>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>


	<script src="<?php echo base_url(); ?>public/admin/js/jquery-2.2.3.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.dataTables.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/dataTables.bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/select2.full.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.date.extensions.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.inputmask.extensions.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/icheck.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/fastclick.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/app.min.js"></script>
	<script src="<?php echo base_url(); ?>public/admin/js/demo.js"></script>

</body>

</html>