<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Ubah Layanan</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/service" class="btn btn-primary btn-sm">Kembali</a></li>
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
				<?php echo form_open_multipart(base_url() . 'admin/service/edit/' . $service['id'], array('class' => 'form-horizontal')); ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Heading *</label>
							<input type="text" autocomplete="off" class="form-control" name="heading" value="<?php echo $service['heading']; ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Content *</label>
							<textarea class="form-control" name="content" id="editor1"><?php echo $service['content']; ?></textarea>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="mt-4">
							<label for="" class="form-label">Short Content *</label>
							<textarea class="form-control" name="short_content" style="height:140px;"><?php echo $service['short_content']; ?></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Existing Photo</label>
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $service['photo']; ?>" alt="Service Photo" class="avatar-md h-auto d-block rounded">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Photo </label>
							<input type="file" name="photo" class="form-control"><br>(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Existing Banner</label>
							<img src="<?php echo base_url(); ?>public/uploads/<?php echo $service['banner']; ?>" alt="Service Banner Photo" class="avatar-md h-auto d-block rounded">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Banner </label>
							<input type="file" name="banner" class="form-control"><br>(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<h4 class="card-title mt-4">SEO Information</h4>
					<div class="col-lg-12">
						<div class="mt-4">
							<label for="" class="form-label">Meta Title</label>
							<input type="text" autocomplete="off" class="form-control" name="meta_title" value="<?php echo $service['meta_title']; ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Meta Keyword</label>
							<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $service['meta_keyword']; ?></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Meta Description</label>
							<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $service['meta_description']; ?></textarea>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="mt-4">
						<label for="" class="form-label"></label>
						<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
					</div>
				</div>
			</div>
		</div>
		<?php echo form_close(); ?>
	</div>
</div>