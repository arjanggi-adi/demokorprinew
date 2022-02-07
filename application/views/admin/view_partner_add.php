<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Tambah Partner</h4>
			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/partner" class="btn btn-primary btn-sm">Kembali</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="card">
			<?php if ($error) : ?>
				<div class="callout callout-danger">
					<p>
						<?php echo $error; ?>
					</p>
				</div>
			<?php endif; ?>

			<?php if ($success) : ?>
				<div class="callout callout-success">
					<p><?php echo $success; ?></p>
				</div>
			<?php endif; ?>

			<?php echo form_open_multipart(base_url() . 'admin/partner/add', array('class' => 'form-horizontal')); ?>
			<div class="box box-info">
				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Name <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" autocomplete="off" class="form-control" name="name" value="<?php if (isset($_POST['name'])) {
																												echo $_POST['name'];
																											} ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Photo <span>*</span></label>
						<div class="col-sm-4" style="padding-top:5px">
							<input type="file" name="photo">(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label"></label>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
						</div>
					</div>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>