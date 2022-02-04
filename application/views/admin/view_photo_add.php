<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Tambah Foto</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/photo" class="btn btn-primary btn-sm">Kembali</a></li>
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
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart(base_url() . 'admin/photo/add', array('class' => 'form-horizontal')); ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Photo Caption <span>*</span></label>
							<input type="text" class="form-control" name="photo_caption">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Upload Photo <span>*</span></label>
							<input type="file" name="photo" class="form-control"><br>(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Show on home? <span>*</span></label>
							<select name="photo_show_home" class="form-control select2">
								<option value="Yes">Yes</option>
								<option value="No">No</option>
							</select>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label"></label>
							<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>