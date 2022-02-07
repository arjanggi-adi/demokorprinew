<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Team</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/language/add" class="btn btn-primary btn-sm">Tambah</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<section class="content-header">
					<div class="content-header-left">
						<h1>Edit Language Data</h1>
					</div>
				</section>

				<?php
				$i = 0;
				$arr1 = array();
				$arr2 = array();
				$arr3 = array();
				foreach ($language as $row) {
					$arr1[$i] = $row['id'];
					$arr2[$i] = $row['name'];
					$arr3[$i] = $row['value'];
					$i++;
				}
				?>

				<section class="content">

					<div class="row">
						<div class="col-md-12">

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

							<?php echo form_open(base_url() . 'admin/language', array('class' => 'form-horizontal')); ?>

							<div class="box box-info">

								<div class="box-body">

									<p style="color:red;">
										NB: In this section, you will be able to change those text in your language that are not possible to change from other sections.
									</p>

									<?php for ($i = 0; $i < count($arr1); $i++) : ?>
										<div class="form-group">
											<label for="" class="col-sm-4 control-label"><?php echo $arr2[$i]; ?></label>
											<div class="col-sm-7">
												<input type="text" class="form-control" name="new_arr[]" value="<?php echo $arr3[$i]; ?>">
											</div>
										</div>
										<input type="hidden" name="new_arr1[]" value="<?php echo $arr1[$i]; ?>">
									<?php endfor; ?>


									<div class="form-group">
										<label for="" class="col-sm-4 control-label"></label>
										<div class="col-sm-7">
											<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
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