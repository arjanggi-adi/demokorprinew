<!-- <div class="caption-photo-area ptb-60" style="margin-top:-20px;">
	<div class="container">
		<div class="row">
			<?php
			foreach ($gallery as $row) {
			?>
				<div class="col-md-3 col-sm-4 col-xs-12 clear-four">
					<div class="caption-item">
						<div class="caption-photo" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>)">
							<div class="caption-bg"></div>
							<div class="caption-box">
								<div class="caption-table">
									<div class="caption-icon">
										<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" data-lightbox="lightbox-item"><i class="fa fa-search-plus"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="caption-text">
							<p></p>
						</div>
					</div>
				</div>
			<?php
			}
			?>

		</div>
	</div>
</div> -->

<section class="page-title" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>);">
	<div class="auto-container">
		<div class="inner-container clearfix">
			<div class="title-box">
				<h1>Gallery</h1>
				<span class="title">The Interior speak for themselves</span>
			</div>
			<ul class="bread-crumb clearfix">
				<li><a href="<?= base_url('') ?>">Page</a></li>
				<li>Gallery</li>
			</ul>
		</div>
	</div>
</section>

<section class="projects-section alternate">
	<div class="auto-container">
		<!--MixitUp Galery-->
		<div class="mixitup-gallery">

			<div class="filter-list row">
				<!-- Project Block -->
				<?php
				foreach ($gallery as $row) {
				?>
					<div class="project-block all mix interior architecture landescape col-lg-4 col-md-6 col-sm-12">
						<div class="image-box">
							<figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" alt=""></figure>
							<div class="overlay-box">
								<div class="btn-box">
									<a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo_name']; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
								</div>
								<span class="tag"><?php echo $row['photo_caption']; ?></span>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</section>