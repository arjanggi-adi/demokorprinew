<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Tambah Team</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/designation" class="btn btn-primary btn-sm">Kembali</a></li>
				</ol>
			</div>

		</div>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<?php echo form_open_multipart(base_url() . 'admin/designation/add', array('class' => 'form-horizontal')); ?>
				<div class="row">
					<div class="col-lg-10">
						<div class="mt-4">

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

							<?php echo form_open(base_url() . 'admin/designation/add', array('class' => 'form-horizontal')); ?>

							<div class="box box-info">
								<div class="box-body">
									<div class="form-group">
										<label for="" class="col-sm-2 control-label">Designation Name <span>*</span></label>
										<div class="col-sm-4">
											<input type="text" class="form-control" name="designation_name" autocomplete="off">
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
			</div>
		</div>
	</div>