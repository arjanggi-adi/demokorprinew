<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Kategori News</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/news-category" class="btn btn-primary btn-sm">Tambah</a></li>
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

			<?php echo form_open(base_url() . 'admin/news-category/edit/' . $news_category['category_id'], array('class' => 'form-horizontal')); ?>

			<div class="box box-info">

				<div class="box-body">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Category Name <span>*</span></label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="category_name" value="<?php echo $news_category['category_name']; ?>">
						</div>
					</div>
					<h3 class="seo-info">SEO Information</h3>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Meta Title </label>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="meta_title" value="<?php echo $news_category['meta_title']; ?>">
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Meta Keywords </label>
						<div class="col-sm-9">
							<textarea class="form-control" name="meta_keyword" style="height:100px;"><?php echo $news_category['meta_keyword']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label">Meta Description </label>
						<div class="col-sm-9">
							<textarea class="form-control" name="meta_description" style="height:100px;"><?php echo $news_category['meta_description']; ?></textarea>
						</div>
					</div>
					<div class="form-group">
						<label for="" class="col-sm-2 control-label"></label>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success pull-left" name="form1">Update</button>
						</div>
					</div>

				</div>

			</div>

			<?php echo form_close(); ?>

		</div>
	</div>

	</section>

	<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h4 class="modal-title" id="myModalLabel">Delete Confirmation</h4>
				</div>
				<div class="modal-body">
					Are you sure want to delete this item?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<a class="btn btn-danger btn-ok">Delete</a>
				</div>
			</div>
		</div>
	</div>
</div>