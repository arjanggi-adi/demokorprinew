<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Tambah Portfolio</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/portfolio" class="btn btn-primary btn-sm">Kembali</a></li>
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
				<?php echo form_open_multipart(base_url() . 'admin/portfolio/add', array('class' => 'form-horizontal')); ?>
				<div class="row">
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Name *</label>
							<input type="text" autocomplete="off" class="form-control" name="name" value="<?php if (isset($_POST['name'])) {
																												echo $_POST['name'];
																											} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Short Content *</label>
							<textarea class="form-control" name="short_content" style="height:100px;"><?php if (isset($_POST['short_content'])) {
																											echo $_POST['short_content'];
																										} ?></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Content *</label>
							<textarea class="form-control" name="content" id="editor1"><?php if (isset($_POST['content'])) {
																							echo $_POST['content'];
																						} ?></textarea>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Client Name</label>
							<input type="text" autocomplete="off" class="form-control" name="client_name" value="<?php if (isset($_POST['client_name'])) {
																														echo $_POST['client_name'];
																													} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Client Company</label>
							<input type="text" autocomplete="off" class="form-control" name="client_company" value="<?php if (isset($_POST['client_company'])) {
																														echo $_POST['client_company'];
																													} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Start Date</label>
							<input type="text" name="start_date" class="form-control" id="datepicker" value="<?php if (isset($_POST['start_date'])) {
																													echo $_POST['start_date'];
																												} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">End Date</label>
							<input type="text" name="end_date" class="form-control" id="datepicker1" value="<?php if (isset($_POST['end_date'])) {
																												echo $_POST['end_date'];
																											} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Website</label>
							<input type="text" autocomplete="off" class="form-control" name="website" value="<?php if (isset($_POST['website'])) {
																													echo $_POST['website'];
																												} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Cost</label>
							<input type="text" autocomplete="off" class="form-control" name="cost" value="<?php if (isset($_POST['cost'])) {
																												echo $_POST['cost'];
																											} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Client Comment</label>
							<textarea class="form-control" name="client_comment" style="height:250px;"><?php if (isset($_POST['client_comment'])) {
																											echo $_POST['client_comment'];
																										} ?></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Select Category *</label>
							<select name="category_id" class="form-control select2">
								<?php
								foreach ($all_photo_category as $row) {
								?>
									<option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
								<?php
								}
								?>
							</select>
						</div>
					</div>
					<h4 class="card-title mt-4">Featured Photo</h4>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Featuerd Photo *</label>
							<input type="file" name="photo" class="form-control"><br>(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<h4 class="card-title mt-4">Other Photos</h4>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Other Photos</label>
							<table id="PhotosTable" style="width:100%;">
								<tbody>
									<tr>
										<td>
											<div class="upload-btn">
												<input type="file" name="photos[]" class="form-control">
											</div>
										</td>
										<td style="width:28px;"><a href="javascript:void()" class="Delete btn btn-danger btn-xs">X</a></td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="mt-4">
							<input type="button" id="btnAddNew" value="Add Item" style="margin-bottom:10px;border:0;color: #fff;font-size: 14px;border-radius:3px;" class="btn btn-warning btn-xs">
						</div>
					</div>
					<h3 class="card-title mt-4">Banner Photo</h3>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Banner *</label>
							<input type="file" name="banner" class="form-control"><br>(Only jpg, jpeg, gif and png are allowed)
						</div>
					</div>
					<h3 class="card-title mt-4">SEO Information</h3>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Meta Title</label>
							<input type="text" autocomplete="off" class="form-control" name="meta_title" value="<?php if (isset($_POST['meta_title'])) {
																													echo $_POST['meta_title'];
																												} ?>">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Meta Keyword</label>
							<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php if (isset($_POST['meta_keyword'])) {
																											echo $_POST['meta_keyword'];
																										} ?></textarea>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="mt-4">
							<label for="" class="form-label">Meta Description</label>
							<textarea class="form-control" name="meta_description" style="height:100px;"><?php if (isset($_POST['meta_description'])) {
																												echo $_POST['meta_description'];
																											} ?></textarea>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="mt-4">
						<label for="" class="form-label"></label>
						<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</div>