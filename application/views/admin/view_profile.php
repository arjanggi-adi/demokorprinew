<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Edit Profile</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item"><a href="javascript: void(0);">Profile</a></li>
					<li class="breadcrumb-item active">Edit Profile</li>
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
						<a href="#tab_1" class="nav-link active" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Update Information</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_2" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Update Photo</span>
						</a>
					</li>
					<li class="nav-item waves-effect waves-light">
						<a href="#tab_3" class="nav-link" data-bs-toggle="tab" role="tab">
							<span class="d-none d-sm-block">Update Password</span>
						</a>
					</li>
				</ul>
				<div class="tab-content p-3 text-muted">
					<div class="tab-pane active" id="tab_1">
						<?php echo form_open(base_url() . 'admin/profile/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Name <span>*</span></label>
									<input type="text" class="form-control" name="full_name" value="<?php echo $this->session->userdata('full_name'); ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Email Address <span>*</span></label>
									<input type="text" class="form-control" name="email" value="<?php echo $this->session->userdata('email'); ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Phone </label>
									<input type="text" class="form-control" name="phone" value="<?php echo $this->session->userdata('phone'); ?>">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4" style="padding-top:7px;">
									<label for="" class="form-label">Role <span>*</span></label>
									<span class="badge rounded-pill bg-success"><?php echo $this->session->userdata('role'); ?></span>
								</div>
							</div>
							<div class="col-lg-6">
								<label for="" class="form-label"></label>
								<div class="col-sm-6">
									<button type="submit" class="btn btn-success pull-left" name="form1">Update Information</button>
								</div>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>


					<div class="tab-pane" id="tab_2">
						<?php echo form_open_multipart(base_url() . 'admin/profile/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Existing Photo</label>
									<?php if ($this->session->userdata('photo') == '') : ?>
										<img src="<?php echo base_url(); ?>public/img/no-photo.jpg" class="existing-photo" alt="profile photo" width="140">
									<?php else : ?>
										<img src="<?php echo base_url(); ?>public/uploads/<?php echo $this->session->userdata('photo'); ?>" class="existing-photo" width="140">
									<?php endif; ?>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">New Photo</label>
									<input type="file" name="photo" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<label for="" class="form-label"></label>
								<button type="submit" class="btn btn-success pull-left" name="form2">Update Photo</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>


					<div class="tab-pane" id="tab_3">
						<?php echo form_open(base_url() . 'admin/profile/update', array('class' => 'form-horizontal')); ?>
						<div class="row">
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Password </label>
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="col-lg-6">
								<div class="mt-4">
									<label for="" class="form-label">Retype Password </label>
									<input type="password" class="form-control" name="re_password">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mt-4">
								<label for="" class="form-label"></label>
								<button type="submit" class="btn btn-success pull-left" name="form3">Update Password</button>
							</div>
						</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>