<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Panel</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/datepicker3.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/all.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/jquery.fancybox.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/_all-skins.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/summernote.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/admin/css/style.css"> -->
	<link href="<?php echo base_url(); ?>assets/libs/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/libs/dropzone/dropzone.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url(); ?>assets/libs/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-sidebar="dark">
	<div id="layout-wrapper">
		<header id="page-topbar">
			<div class="navbar-header">
				<div class="d-flex">
					<!-- LOGO -->
					<div class="navbar-brand-box">
						<a href="<?php echo base_url(); ?>admin/dashboard" class="logo logo-dark">
							<span class="logo-sm">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" alt="" height="22">
							</span>
							<span class="logo-lg">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" alt="" height="22">
							</span>
						</a>

						<a href="<?php echo base_url(); ?>admin/dashboard" class="logo logo-light">
							<span class="logo-sm">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" alt="" height="22">
							</span>
							<span class="logo-lg">
								<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" alt="" height="22">
							</span>
						</a>
					</div>

					<button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
						<i class="fa fa-fw fa-bars"></i>
					</button>

					<!-- App Search-->
					<!-- <form class="app-search d-none d-lg-block">
						<div class="position-relative">
							<input type="text" class="form-control" placeholder="Search...">
							<span class="bx bx-search-alt"></span>
						</div>
					</form> -->
				</div>

				<div class="d-flex">

					<!-- <div class="dropdown d-inline-block d-lg-none ms-2">
						<button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="mdi mdi-magnify"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

							<form class="p-3">
								<div class="form-group m-0">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
										<div class="input-group-append">
											<button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div> -->

					<!-- <div class="dropdown d-inline-block">
						<button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="bx bx-bell bx-tada"></i>
							<span class="badge bg-danger rounded-pill">3</span>
						</button>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
							<div class="p-3">
								<div class="row align-items-center">
									<div class="col">
										<h6 class="m-0" key="t-notifications"> Notifications </h6>
									</div>
									<div class="col-auto">
										<a href="#!" class="small" key="t-view-all"> View All</a>
									</div>
								</div>
							</div>
							<div data-simplebar style="max-height: 230px;">
								<a href="javascript: void(0);" class="text-reset notification-item">
									<div class="d-flex">
										<div class="avatar-xs me-3">
											<span class="avatar-title bg-primary rounded-circle font-size-16">
												<i class="bx bx-cart"></i>
											</span>
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-1" key="t-your-order">Your order is placed</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
											</div>
										</div>
									</div>
								</a>
								<a href="javascript: void(0);" class="text-reset notification-item">
									<div class="d-flex">
										<img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
										<div class="flex-grow-1">
											<h6 class="mb-1">James Lemire</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1" key="t-simplified">It will seem like simplified English.</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
											</div>
										</div>
									</div>
								</a>
								<a href="javascript: void(0);" class="text-reset notification-item">
									<div class="d-flex">
										<div class="avatar-xs me-3">
											<span class="avatar-title bg-success rounded-circle font-size-16">
												<i class="bx bx-badge-check"></i>
											</span>
										</div>
										<div class="flex-grow-1">
											<h6 class="mb-1" key="t-shipped">Your item is shipped</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1" key="t-grammer">If several languages coalesce the grammar</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-min-ago">3 min ago</span></p>
											</div>
										</div>
									</div>
								</a>

								<a href="javascript: void(0);" class="text-reset notification-item">
									<div class="d-flex">
										<img src="assets/images/users/avatar-4.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
										<div class="flex-grow-1">
											<h6 class="mb-1">Salena Layfield</h6>
											<div class="font-size-12 text-muted">
												<p class="mb-1" key="t-occidental">As a skeptical Cambridge friend of mine occidental.</p>
												<p class="mb-0"><i class="mdi mdi-clock-outline"></i> <span key="t-hours-ago">1 hours ago</span></p>
											</div>
										</div>
									</div>
								</a>
							</div>
							<div class="p-2 border-top d-grid">
								<a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
									<i class="mdi mdi-arrow-right-circle me-1"></i> <span key="t-view-more">View More..</span>
								</a>
							</div>
						</div>
					</div> -->

					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php if ($this->session->userdata('photo') == '') : ?>
								<img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>public/img/no-photo.jpg" alt="Header Avatar">
							<?php else : ?>
								<img class="rounded-circle header-profile-user" src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" alt="Header Avatar">
							<?php endif; ?>
							<span class="d-none d-xl-inline-block ms-1" key="t-henry"><?php echo $this->session->userdata('full_name'); ?></span>
							<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
						</button>
						<div class="dropdown-menu dropdown-menu-end">
							<!-- item-->
							<a class="dropdown-item" href="<?php echo base_url(); ?>admin/profile"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item text-danger" href="<?php echo base_url(); ?>admin/login/logout"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
						</div>
					</div>

					<div class="dropdown d-inline-block">
						<button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
							<i class="bx bx-cog bx-spin"></i>
						</button>
					</div>

				</div>
			</div>
		</header>

		<?php
		$base_url = base_url();
		$full_url = base_url(uri_string());
		$final_url = str_replace($base_url, "", $full_url);
		?>

		<div class="vertical-menu">

			<div data-simplebar class="h-100">
				<?php
				$final_url_other_arr = explode('/', $final_url);
				if (isset($final_url_other_arr[2])) {
					$final_url_other = $final_url_other_arr[0] . '/' . $final_url_other_arr[1] . '/' . $final_url_other_arr[2];
				} else {
					$final_url_other = $final_url_other_arr[0] . '/' . $final_url_other_arr[1];
				}
				?>
				<!--- Sidemenu -->
				<div id="sidebar-menu">
					<!-- Left Menu Start -->
					<ul class="metismenu list-unstyled" id="side-menu">
						<li class="menu-title" key="t-menu">Menu</li>

						<li class="<?php if ($final_url_other == 'admin/dashboard') {
										echo 'mm-active';
									} ?>">
							<a href="<?php echo base_url(); ?>admin/dashboard" class="waves-effect">
								<i class="bx bx-home-circle"></i>
								<span key="t-dashboards">Dashboards</span>
							</a>
						</li>

						<?php if ($this->session->userdata('role') == 'Admin') : ?>
							<li class="<?php if (($final_url_other == 'admin/setting')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/setting" class="waves-effect">
									<i class="bx bx-cog"></i>
									<span key="t-dashboards">Pengaturan</span>
								</a>
							</li>
							<li class="<?php if (($final_url_other == 'admin/slider/add') || ($final_url_other == 'admin/slider') || ($final_url_other == 'admin/slider/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/slider" class="waves-effect">
									<i class="bx bx-carousel"></i>
									<span key="t-dashboards">Slider</span>
								</a>
							</li>

							<li class="<?php if (($final_url_other == 'admin/service/add') || ($final_url_other == 'admin/service') || ($final_url_other == 'admin/service/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/service" class="waves-effect">
									<i class="bx bx-briefcase-alt-2"></i>
									<span key="t-dashboards">Layanan</span>
								</a>
							</li>

							<li class="<?php if (($final_url_other == 'admin/faq/add') || ($final_url_other == 'admin/faq') || ($final_url_other == 'admin/faq/edit') || ($final_url_other == 'admin/faq/main-photo')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-check-shield"></i>
									<span key="t-contacts">FAQ</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/faq" key="t-user-grid">FAQ</a></li>
									<li><a href="<?php echo base_url(); ?>admin/faq/main-photo" key="t-user-list">Main Foto</a></li>
								</ul>
							</li>

							<li class="<?php if (($final_url_other == 'admin/photo/add') || ($final_url_other == 'admin/photo') || ($final_url_other == 'admin/photo/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-camera"></i>
									<span key="t-gallery">Galeri</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/photo">Foto</a></li>
								</ul>
							</li>

							<li class="<?php if (($final_url_other == 'admin/portfolio/add') || ($final_url_other == 'admin/portfolio') || ($final_url_other == 'admin/portfolio/edit') || ($final_url_other == 'admin/portfolio-category/add') || ($final_url_other == 'admin/portfolio-category') || ($final_url_other == 'admin/portfolio-category/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-book-content"></i>
									<span key="t-portfolio">Portfolio</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/portfolio-category"> Kategori</a></li>
									<li><a href="<?php echo base_url(); ?>admin/portfolio"> Portfolio</a></li>
								</ul>
							</li>

							<li class="<?php if (($final_url_other == 'admin/designation/add') || ($final_url_other == 'admin/designation') || ($final_url_other == 'admin/designation/edit') || ($final_url_other == 'admin/team-member/add') || ($final_url_other == 'admin/team-member') || ($final_url_other == 'admin/team-member/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-group"></i>
									<span>Team Member</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/designation">Designation</a></li>
									<li><a href="<?php echo base_url(); ?>admin/team-member">Team Member</a></li>
								</ul>
							</li>


							<li class="<?php if (($final_url_other == 'admin/testimonial/add') || ($final_url_other == 'admin/testimonial') || ($final_url_other == 'admin/testimonial/edit') || ($final_url_other == 'admin/testimonial/main-photo')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-user-plus"></i>
									<span>Testimonial</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/testimonial">Testimonial</a></li>
									<li><a href="<?php echo base_url(); ?>admin/testimonial/main-photo"> Foto</a></li>
								</ul>
							</li>

							<li class="<?php if (($final_url_other == 'admin/partner/add') || ($final_url_other == 'admin/partner') || ($final_url_other == 'admin/partner/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/partner" class="waves-effect">
									<i class="bx bx-home-circle"></i>
									<span>Partner</span>
								</a>
							</li>

							<li class="<?php if (($final_url_other == 'admin/why-choose/add') || ($final_url_other == 'admin/why-choose') || ($final_url_other == 'admin/why-choose/edit') || ($final_url_other == 'admin/why-choose/main-photo') || ($final_url_other == 'admin/why-choose/item-bg')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-home-circle"></i>
									<span>Why Choose Us</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/why-choose"> Why Choose</a></li>
									<li><a href="<?php echo base_url(); ?>admin/why-choose/main-photo"> Main Photo</a></li>
									<li><a href="<?php echo base_url(); ?>admin/why-choose/item-bg"> Items Background</a></li>
								</ul>
							</li>


							<li class="<?php if (($final_url_other == 'admin/page')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/page" class="waves-effect">
									<i class="bx bx-customize"></i>
									<span>Halaman</span>
								</a>
							</li>


							<li class="<?php if (($final_url_other == 'admin/news/add') || ($final_url_other == 'admin/news') || ($final_url_other == 'admin/news/edit') || ($final_url_other == 'admin/news-category/add') || ($final_url_other == 'admin/news-category') || ($final_url_other == 'admin/news-category/edit')) {
											echo 'mm-active';
										} ?>">
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="bx bx-news"></i>
									<span>Berita</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?php echo base_url(); ?>admin/news-category"> Kategori Berita</a></li>
									<li><a href="<?php echo base_url(); ?>admin/news"> Berita</a></li>
								</ul>
							</li>

							<li class="<?php if (($final_url_other == 'admin/comment')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/comment">
									<i class="bx bx-chat"></i> <span>Komentar</span>
								</a>
							</li>

							<li class="<?php if (($final_url_other == 'admin/language')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/language">
									<i class="mdi mdi-google-translate"></i>
									<span>Bahasa</span>
								</a>
							</li>

							<li class="<?php if (($final_url_other == 'admin/social-media')) {
											echo 'mm-active';
										} ?>">
								<a href="<?php echo base_url(); ?>admin/social-media">
									<i class="bx bxs-contact"></i>
									<span>Sosial Media</span>
								</a>
							</li>
						<?php endif; ?>

					</ul>
				</div>
				<!-- Sidebar -->
			</div>
		</div>

		<div class="main-content">
			<div class="page-content">
				<div class="container-fluid">