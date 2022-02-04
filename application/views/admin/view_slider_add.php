<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>
<div class="col-12">
	<div class="page-title-box d-sm-flex align-items-center justify-content-between">
		<h4 class="mb-sm-0 font-size-18">Tambah slider</h4>
		<div class="page-title-right">
			<ol class="breadcrumb m-0">
				<li class="breadcrumb-item">
					<a href="<?= base_url('admin/slider') ?>" class="btn btn-primary btn-sm">Kembali</a>
				</li>
			</ol>
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
				<?php echo form_open_multipart(base_url() . 'admin/slider/add', array('class' => 'form-horizontal')); ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Foto <span>*</span></label>
							<input type="file" name="photo" class="form-control"><br>(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Heading </label>
							<input type="text" autocomplete="off" class="form-control" name="heading" value="<?php if (isset($_POST['heading'])) {
																													echo $_POST['heading'];
																												} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Button1 Text </label>
							<input type="text" autocomplete="off" class="form-control" name="button1_text" value="<?php if (isset($_POST['button1_text'])) {
																														echo $_POST['button1_text'];
																													} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Button1 URL </label>
							<input type="text" autocomplete="off" class="form-control" name="button1_url" value="<?php if (isset($_POST['button1_url'])) {
																														echo $_POST['button1_url'];
																													} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Button2 Text </label>
							<input type="text" autocomplete="off" class="form-control" name="button2_text" value="<?php if (isset($_POST['button2_text'])) {
																														echo $_POST['button2_text'];
																													} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Button2 URL </label>
							<input type="text" autocomplete="off" class="form-control" name="button2_url" value="<?php if (isset($_POST['button2_url'])) {
																														echo $_POST['button2_url'];
																													} ?>">
						</div>
					</div>
					<div class="col-lg-12">
						<div class="mt-4">
							<label for="" class="form-label">Content </label>
							<textarea class="form-control" name="content" style="height:140px;"><?php if (isset($_POST['content'])) {
																									echo $_POST['content'];
																								} ?></textarea>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="mt-4">
						<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>