<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">View News Categories</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/news-category/add" class="btn btn-primary btn-sm">Tambah</a></li>
				</ol>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
					<thead>
						<tr>
							<th>SL</th>
							<th>Category Name</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($news_category as $row) {
							$i++;
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row['category_name']; ?></td>
								<td>
									<a href="<?php echo base_url(); ?>admin/news-category/edit/<?php echo $row['category_id']; ?>" class="btn btn-primary btn-xs">Edit</a>
									<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url(); ?>admin/news-category/delete/<?php echo $row['category_id']; ?>" data-toggle="modal" data-target="#confirm-delete">Delete</a>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


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