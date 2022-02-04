<section class="page-title" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $res['banner']; ?>);">
	<div class="auto-container">
		<div class="inner-container clearfix">
			<div class="title-box">
				<h1>Service Detail</h1>
				<span class="title"><?php echo $res['heading']; ?></span>
			</div>
			<ul class="bread-crumb clearfix">
				<li><a href="<?= base_url(); ?>">Home</a></li>
				<li>Service Detail</li>
			</ul>
		</div>
	</div>
</section>

<div class="sidebar-page-container">
	<div class="auto-container">
		<div class="row clearfix">
			<!--Content Side-->
			<div class="content-side col-lg-8 col-md-12 col-sm-12">
				<div class="service-detail">
					<div class="inner-box">
						<div class="image-box">
							<div class="single-item-carousel owl-carousel owl-theme">
								<figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $res['photo']; ?>" alt="" /></figure>
								<figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $res['photo']; ?>" alt="" /></figure>
								<figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $res['photo']; ?>" alt="" /></figure>
							</div>
						</div>
						<h2><?php echo $res['heading']; ?></h2>
						<div class="text">
							<p><?php echo $res['content']; ?></p>
						</div>
					</div>
				</div>
			</div>
			<!--Sidebar Side-->
			<div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
				<aside class="sidebar services-sidebar">

					<!--Blog Category Widget-->
					<div class="sidebar-widget sidebar-blog-category">
						<ul class="blog-cat">
							<li class="active"><a href="#"><?php echo SERVICES; ?></a></li>
							<?php
							foreach ($service_by_heading as $row) {
							?>
								<li><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['heading']; ?></a></li>
							<?php } ?>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</div>