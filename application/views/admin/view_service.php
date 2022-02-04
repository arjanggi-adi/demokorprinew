<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>

<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Layanan</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/service/add" class="btn btn-primary btn-sm">Tambah</a></li>
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
							<th>Photo</th>
							<th>Banner</th>
							<th>Heading</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($service as $row) {
							$i++;
						?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['heading']; ?>" class="avatar-md h-auto d-block rounded"></td>
								<td><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['banner']; ?>" alt="<?php echo $row['heading']; ?>" class="avatar-md h-auto d-block rounded"></td>
								<td><?php echo $row['heading']; ?></td>
								<td>
									<a href="<?php echo base_url(); ?>admin/service/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
									<a href="#" class="btn btn-danger btn-sm" data-href="<?php echo base_url(); ?>admin/service/delete/<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#confirm-delete">Delete</a>
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
				<h5 class="modal-title" id="myModalLabel">Hapus Layanan</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>Apa anda yakin ingin menghapus layanan?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>