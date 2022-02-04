<?php
if (!$this->session->userdata('id')) {
	redirect(base_url() . 'admin/login');
}
?>
<div class="row">
	<div class="col-12">
		<div class="page-title-box d-sm-flex align-items-center justify-content-between">
			<h4 class="mb-sm-0 font-size-18">Lihat Portfolio</h4>

			<div class="page-title-right">
				<ol class="breadcrumb m-0">
					<li class="breadcrumb-item active"><a href="<?php echo base_url(); ?>admin/portfolio/add" class="btn btn-primary btn-sm">Tambah</a></li>
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
							<th>Name</th>
							<th>Category</th>
							<th>Photo</th>
							<th width="140">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						foreach ($portfolio as $row) {
							$i++;
						?>
							<tr>
								<td style="width:100px;"><?php echo $i; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['category_name']; ?></td>
								<td style="width:250px;"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="<?php echo $row['name']; ?>" style="width:150px;"></td>
								<td>
									<a class="btn btn-success btn-xs" data-bs-toggle="modal" data-bs-target="#myModal<?php echo $i; ?>">Details</a>
									<a href="<?php echo base_url(); ?>admin/portfolio/edit/<?php echo $row['id']; ?>" class="btn btn-primary btn-xs">Edit</a>
									<a href="#" class="btn btn-danger btn-xs" data-href="<?php echo base_url(); ?>admin/portfolio/delete/<?php echo $row['id']; ?>" data-bs-toggle="modal" data-bs-target="#confirm-delete">Delete</a>
								</td>
							</tr>
							<div class="modal fade" id="myModal<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog modal-xl" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalScrollableTitle">Detail Portfolio</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										<div class="modal-body">
											<div class="row">
												<div class="col-lg-12">
													<div class="d-flex">
														<div class="flex-shrink-0 me-4">
															<img src="assets/images/companies/img-1.png" alt="" class="avatar-sm">
														</div>

														<div class="flex-grow-1 overflow-hidden">
															<h5 class="text-truncate font-size-15"><?php echo $row['name']; ?></h5>
															<p class="text-muted">Separate existence is a myth. For science, music, sport, etc.</p>
														</div>
													</div>

													<h5 class="font-size-15 mt-4">Project Details :</h5>

													<p class="text-muted"><?php echo $row['content']; ?></p>

													<div class="row task-dates">
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar me-1 text-primary"></i> Client Name</h5>
																<p class="text-muted mb-0"><?php echo $row['client_name']; ?></p>
															</div>
														</div>
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Client Company</h5>
																<p class="text-muted mb-0"><?php echo $row['client_company']; ?></p>
															</div>
														</div>
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Project Start Date</h5>
																<p class="text-muted mb-0"><?php echo $row['start_date']; ?></p>
															</div>
														</div>
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Project End Date</h5>
																<p class="text-muted mb-0"><?php echo $row['end_date']; ?></p>
															</div>
														</div>
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Website</h5>
																<p class="text-muted mb-0"><?php echo $row['website']; ?></p>
															</div>
														</div>
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Cost</h5>
																<p class="text-muted mb-0"><?php echo $row['cost']; ?></p>
															</div>
														</div>
														<div class="col-sm-3 col-6">
															<div class="mt-4">
																<h5 class="font-size-14"><i class="bx bx-calendar-check me-1 text-primary"></i> Category</h5>
																<p class="text-muted mb-0"><?php echo $row['category_name']; ?></p>
															</div>
														</div>
													</div>
													<h5 class="font-size-15 mt-4">Client Comment :</h5>

													<p class="text-muted"><?php echo $row['client_comment']; ?></p>

													<div class="row">
														<div class="col-lg-6">
															<h4 class="font-size-15 mt-4">Featured Photo</h4>

															<div class="zoom-gallery d-flex flex-wrap">
																<a href="<?php echo base_url() . 'public/uploads/' . $row['photo']; ?>" title="Project 1"><img src="<?php echo base_url() . 'public/uploads/' . $row['photo']; ?>" alt="" width="275"></a>
															</div>
														</div>

														<div class="col-lg-6">
															<h4 class="font-size-15 mt-4">Banner</h4>

															<div class="zoom-gallery d-flex flex-wrap">
																<a href="<?php echo base_url() . 'public/uploads/' . $row['banner']; ?>" title="Project 1"><img src="<?php echo base_url() . 'public/uploads/' . $row['banner']; ?>" alt="" width="275"></a>
															</div>
														</div>
													</div>
													<h4 class="font-size-15 mt-4">Other Foto</h4>

													<div class="zoom-gallery d-flex flex-wrap">
														<?php
														$all_photos = $this->Model_portfolio->get_all_photos_by_category_id($row['id']);
														foreach ($all_photos as $row1) {
														?>
															<a href="<?php echo base_url() . 'public/uploads/portfolio_photos/' . $row1['photo']; ?>" title="Project 1"><img src="<?php echo base_url() . 'public/uploads/portfolio_photos/' . $row1['photo']; ?>" alt="" width="275"></a>
														<?php } ?>
													</div>


												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
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
				<h5 class="modal-title" id="myModalLabel">Hapus Portfolio</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<p>Apa anda yakin ingin menghapus portfolio?</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary waves-effect" data-bs-dismiss="modal">Close</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>