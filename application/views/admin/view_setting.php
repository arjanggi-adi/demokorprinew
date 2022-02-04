<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Pengaturan</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Pengaturan</a></li>
					<li class="breadcrumb-item active">Pengaturan</li>
				</ol>
			</div>

		</div>
	</div>
</div>


<div class="">
	<?php if ($error) : ?>
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<i class="mdi mdi-block-helper me-2"></i>
			<?php echo $error; ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>
	<?php if ($success) : ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
			<i class="mdi mdi-check-all me-2"></i>
			<?php echo $success; ?>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
	<?php endif; ?>
</div>



<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-body">
				<ul class="nav nav-pills nav-justified" role="tablist">
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_logo" class="nav-link active" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Logo</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_favicon" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Favicon</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_login_bg" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Login</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_general" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Konten</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_email" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Email</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_sidebar_footer" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Layout</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_home" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Beranda</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_banner" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Banner</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_color" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Warna</span>
						</a>
					</li>
				</ul>
				<div class="tab-content p-3 text-muted">
					<div class="tab-pane active" id="tab_logo" role="tabpanel">
						<div class="row">
							<div class="col-lg-6 mt-4">
								<h4 class="card-title">Logo website</h4>
								<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>

								<div class="mt-4">
									<label for="" class="form-label">Existing Photo</label>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" class="existing-photo" style="height:80px;">
								</div>
								<div class="mt-4">
									<label for="" class="form-label">New Photo</label>
									<input type="file" name="photo_logo" class="form-control">
								</div>
								<div class="mt-4">
									<button type="submit" class="btn btn-success pull-left" name="form_logo">Update Logo</button>
								</div>
								<?php echo form_close(); ?>
							</div>

							<div class="col-lg-6 mt-4">
								<h4 class="card-title">Logo admin</h4>
								<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>

								<div class="mt-4">
									<label for="" class="form-label">Existing Photo</label>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo_admin']; ?>" class="existing-photo" style="height:80px;">
								</div>

								<div class="mt-4">
									<label for="" class="form-label">New Photo</label>
									<input type="file" name="photo_logo_admin" class="form-control">
								</div>

								<div class="mt-4">
									<button type="submit" class="btn btn-success pull-right" name="form_admin_logo">Update Logo</button>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>
					</div>

					<div class="tab-pane" id="tab_favicon">
						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="mt-4">
							<label for="" class="form-label">Existing Photo</label>
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" class="existing-photo">
						</div>
						<div class="mt-4">
							<label for="" class="form-label">New Photo</label>
							<input type="file" name="photo_favicon" class="form-control">
						</div>
						<div class="mt-4">
							<button type="submit" class="btn btn-success pull-left" name="form_favicon">Update Favicon</button>
						</div>
						<?php echo form_close(); ?>
					</div>

					<div class="tab-pane" id="tab_login_bg">
						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="mt-4">
							<label for="" class="form-label">Existing Photo</label>
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['login_bg']; ?>" class="existing-photo" width="200px">
						</div>
						<div class="mt-4">
							<label for="" class="form-label">New Photo</label>
							<input type="file" name="login_bg" class="form-control">
						</div>
						<div class="mt-4">
							<button type="submit" class="btn btn-success pull-left" name="form_login_bg">Update Photo</button>
						</div>
						<?php echo form_close(); ?>
					</div>

					<div class="tab-pane" id="tab_general">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Footer - Copyright </label>
									<input class="form-control" type="text" name="footer_copyright" value="<?php echo $setting['footer_copyright']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Top Bar Email </label>
									<input type="text" class="form-control" name="top_bar_email" value="<?php echo $setting['top_bar_email']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Footer - Address </label>
									<textarea class="form-control" name="footer_address" style="height:70px;"><?php echo $setting['footer_address']; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Footer - Phone </label>
									<textarea class="form-control" name="footer_phone" style="height:70px;"><?php echo $setting['footer_phone']; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Footer - Working Hour </label>
									<textarea class="form-control" name="footer_working_hour" style="height:70px;"><?php echo $setting['footer_working_hour']; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Top Bar Phone Number </label>
									<input type="text" class="form-control" name="top_bar_phone" value="<?php echo $setting['top_bar_phone']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Footer - About us </label>
									<textarea class="form-control" name="footer_about" style="height:140px;"><?php echo $setting['footer_about']; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Contact Map iFrame </label>
									<textarea class="form-control" name="contact_map_iframe" style="height:200px;"><?php echo $setting['contact_map_iframe']; ?></textarea>
								</div>
							</div>
							<div class="col-lg-6 mb-3">
								<div class="mt-4">
									<label for="" class="form-label"></label>
									<button type="submit" class="btn btn-success pull-left" name="form_general">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>

						<div class="row">
							<div class="col-lg-4 mt-4">
								<h4 class="card-title">Footer - Address Icon</h4>
								<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
								<div class="mt-4">
									<label for="" class="form-label">Existing Icon</label>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_address_icon']; ?>" class="existing-photo" style="width:120px;">
								</div>
								<div class="mt-4">
									<label for="" class="form-label">New Icon</label>
									<input type="file" name="footer_address_icon" class="form-control">
								</div>
								<div class="mt-4">
									<button type="submit" class="btn btn-success pull-left" name="form_icon_address">Update</button>
								</div>
								<?php echo form_close(); ?>
							</div>

							<div class="col-lg-4 mt-4">
								<h4 class="card-title">Footer - Phone Icon</h4>
								<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>

								<div class="mt-4">
									<label for="" class="form-label">Existing Icon</label>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_phone_icon']; ?>" class="existing-photo" style="width:120px;">
								</div>
								<div class="mt-4">
									<label for="" class="form-label">New Icon</label>
									<input type="file" name="footer_phone_icon" class="form-control">
								</div>
								<div class="mt-4">
									<button type="submit" class="btn btn-success pull-left" name="form_icon_phone">Update</button>
								</div>
								<?php echo form_close(); ?>
							</div>

							<div class="col-lg-4 mt-4">
								<h4 class="card-title">Footer - Working Hour Icon</h4>
								<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>

								<div class="mt-4">
									<label for="" class="form-label">Existing Icon</label>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['footer_working_hour_icon']; ?>" class="existing-photo" style="width:120px;">
								</div>
								<div class="mt-4">
									<label for="" class="form-label">New Icon</label>
									<input type="file" name="footer_working_hour_icon" class="form-control">
								</div>
								<div class="mt-4">
									<button type="submit" class="btn btn-success pull-left" name="form_icon_working_hour">Update</button>
								</div>
							</div>
							<?php echo form_close(); ?>
						</div>
					</div>

					<div class="tab-pane" id="tab_email">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Email Address (Contact Form) <span>*</span></label>
									<input type="text" class="form-control" name="receive_email" value="<?php echo $setting['receive_email']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Reset Password Email Subject <span>*</span></label>
									<input type="text" class="form-control" name="reset_password_email_subject" value="<?php echo $setting['reset_password_email_subject']; ?>">
								</div>
							</div>

							<div class="">
								<label for="" class="form-label"></label>
								<div class="mt-4">
									<button type="submit" class="btn btn-success pull-left" name="form_email">Update</button>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>

					<div class="tab-pane" id="tab_sidebar_footer">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">How many recent posts? <span>*</span></label>
									<input type="text" class="form-control" name="total_recent_post" value="<?php echo $setting['total_recent_post']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">How many popular posts? <span>*</span></label>
									<input type="text" class="form-control" name="total_popular_post" value="<?php echo $setting['total_popular_post']; ?>">
								</div>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_sidebar_footer">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>


					<div class="tab-pane" id="tab_home">
						<h4 class="card-title">Why Choose Us</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="why_choose_title" class="form-control" value="<?php echo $setting['why_choose_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="why_choose_subtitle" class="form-control" value="<?php echo $setting['why_choose_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class=" form-label">Status </label>
									<select name="why_choose_status" class="form-control form-select">
										<option value="Show" <?php if ($setting['why_choose_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['why_choose_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
							<div class="mt-4">
								<label for="" class="form-label"></label>
								<button type="submit" class="btn btn-success pull-left" name="form_why_choose">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Service</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="service_title" class="form-control" value="<?php echo $setting['service_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="service_subtitle" class="form-control" value="<?php echo $setting['service_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="service_status" class="form-control form-select">
										<option value="Show" <?php if ($setting['service_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['service_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_service">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Portfolio</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="portfolio_title" class="form-control" value="<?php echo $setting['portfolio_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="portfolio_subtitle" class="form-control" value="<?php echo $setting['portfolio_subtitle']; ?>">
								</div>
							</div>
							<div class="ol-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="portfolio_status" class="form-control form-select">
										<option value="Show" <?php if ($setting['portfolio_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['portfolio_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_portfolio">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Team</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="team_title" class="form-control" value="<?php echo $setting['team_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="team_subtitle" class="form-control" value="<?php echo $setting['team_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="team_status" class="form-control form-select">
										<option value="Show" <?php if ($setting['team_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['team_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_team">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Testimonial</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="testimonial_title" class="form-control" value="<?php echo $setting['testimonial_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="testimonial_subtitle" class="form-control" value="<?php echo $setting['testimonial_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="testimonial_status" class="form-control form-select">
										<option value="Show" <?php if ($setting['testimonial_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['testimonial_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_testimonial">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">FAQ</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="faq_title" class="form-control" value="<?php echo $setting['faq_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="faq_subtitle" class="form-control" value="<?php echo $setting['faq_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="faq_status" class="form-control select2">
										<option value="Show" <?php if ($setting['faq_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['faq_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_faq">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Gallery</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="gallery_title" class="form-control" value="<?php echo $setting['gallery_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="gallery_subtitle" class="form-control" value="<?php echo $setting['gallery_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="gallery_status" class="form-control select2">
										<option value="Show" <?php if ($setting['gallery_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['gallery_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_gallery">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Recent Post</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="recent_post_title" class="form-control" value="<?php echo $setting['recent_post_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="recent_post_subtitle" class="form-control" value="<?php echo $setting['recent_post_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="recent_post_status" class="form-control select2">
										<option value="Show" <?php if ($setting['recent_post_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['recent_post_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_recent_post">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Partner</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Title </label>
									<input type="text" name="partner_title" class="form-control" value="<?php echo $setting['partner_title']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Subtitle </label>
									<input type="text" name="partner_subtitle" class="form-control" value="<?php echo $setting['partner_subtitle']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Status </label>
									<select name="partner_status" class="form-control select2">
										<option value="Show" <?php if ($setting['partner_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['partner_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_partner">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Counter Background Photo</h4>
						<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Previous Photo </label>
									<img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['counter_bg']; ?>" alt="" style="width:300px;">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Change Photo </label>
									<input type="file" name="counter_bg">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_counter_bg">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>


						<h4 class="card-title mt-4">Counter Settings</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter1 Text <span>*</span></label>
									<input type="text" class="form-control" name="counter1_text" value="<?php echo $setting['counter1_text']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter1 Value <span>*</span></label>
									<input type="text" class="form-control" name="counter1_value" value="<?php echo $setting['counter1_value']; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter2 Text <span>*</span></label>
									<input type="text" class="form-control" name="counter2_text" value="<?php echo $setting['counter2_text']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter2 Value <span>*</span></label>
									<input type="text" class="form-control" name="counter2_value" value="<?php echo $setting['counter2_value']; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter3 Text <span>*</span></label>
									<input type="text" class="form-control" name="counter3_text" value="<?php echo $setting['counter3_text']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter3 Value <span>*</span></label>
									<input type="text" class="form-control" name="counter3_value" value="<?php echo $setting['counter3_value']; ?>">
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter4 Text <span>*</span></label>
									<input type="text" class="form-control" name="counter4_text" value="<?php echo $setting['counter4_text']; ?>">
								</div>
							</div>
							<div class="col-md-6">
								<div class="mt-4">
									<label for="" class="form-label">Counter4 Value <span>*</span></label>
									<input type="text" class="form-control" name="counter4_value" value="<?php echo $setting['counter4_value']; ?>">
								</div>
							</div>
						</div>

						<div class="row" style="border-top: 1px solid #ddd;margin-top: 10px;padding-top: 20px;">
							<div class="col-lg-12">
								<div class="mt-4">
									<label for="" class="form-label">Counter Status <span>*</span></label>
									<select name="counter_status" class="form-control select2">
										<option value="Show" <?php if ($setting['counter_status'] == 'Show') {
																	echo 'selected';
																} ?>>Show</option>
										<option value="Hide" <?php if ($setting['counter_status'] == 'Hide') {
																	echo 'selected';
																} ?>>Hide</option>
									</select>
								</div>
							</div>
						</div>

						<div class="col-lg-6">
							<div class="mt-4">
								<label for="" class="form-label"></label>
								<button type="submit" class="btn btn-success pull-left" name="form_counter">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>



						<h4 class="card-title mt-4">Total Recent Post (How many last posts will be shown?)</h4>
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="col-lg-6">
							<div class="mt-4">
								<label for="" class="form-label">Total Recent Posts </label>
								<input type="text" name="total_recent_post_home" class="form-control" value="<?php echo $setting['total_recent_post_home']; ?>">
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<label for="" class="form-label"></label>
								<button type="submit" class="btn btn-success pull-left" name="form_total_recent_post_home">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>


					<div class="tab-pane" id="tab_color">
						<?php echo form_open(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Theme Color 1 </label>
									<input type="text" name="theme_color_1" class="form-control jscolor" value="<?php echo $setting['theme_color_1']; ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Theme Color 2 </label>
									<input type="text" name="theme_color_2" class="form-control jscolor" id value="<?php echo $setting['theme_color_2']; ?>">
								</div>
							</div>
							<div class="mt-4">
								<button type="submit" class="btn btn-success pull-left" name="form_color">Update</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>


					<div class="tab-pane" id="tab_banner">
						<div class="table-responsive">
							<table class="table align-middle table-nowrap mb-0">
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4 class="card-title">Existing About Us Page Banner</h4>
										<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_about']; ?>" alt="" style="width: 100%;height:auto;">
									</td>
									<td>
										<h5 class="card-title">Change About Us Page Banner</h5>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_about">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing FAQ Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_faq']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change FAQ Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_faq">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Gallery Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_gallery']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Gallery Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_gallery">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Service Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_service']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Service Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_service">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Portfolio Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_portfolio']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Portfolio Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_portfolio">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Testimonial Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_testimonial']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Testimonial Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_testimonial">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing News Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_news']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change News Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_news">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Contact Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_contact']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Contact Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_contact">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Search Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_search']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Search Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_search">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Category Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_category']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Category Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_category">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Terms and Conditions Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_terms']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Terms and Conditions Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_terms">
									</td>
									<?php echo form_close(); ?>
								</tr>
								<tr>
									<?php echo form_open_multipart(base_url() . 'admin/setting/update', array('class' => 'form-horizontal')); ?>
									<td>
										<h4>Existing Privacy Page Banner</h4>
										<p>
											<img src="<?php echo base_url() . 'public/uploads/' . $setting['banner_privacy']; ?>" alt="" style="width: 100%;height:auto;">
										</p>
									</td>
									<td>
										<h4>Change Privacy Page Banner</h4>
										Select Photo<input type="file" name="photo">
										<input type="submit" class="btn btn-primary" value="Change" name="form_banner_privacy">
									</td>
									<?php echo form_close(); ?>
								</tr>
							</table>
						</div>
					</div>


				</div>



				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>