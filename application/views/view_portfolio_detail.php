<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title">Portfolio Detail</h1>
					<p><?php echo $portfolio['name']; ?></p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<li>News</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="event-details section">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-12">
				<div class="details-content">
					<h2 class="title">About The Event</h2>
					<ul class="meta-data">
						<li><i class="lni lni-map-marker"></i> <?php echo $portfolio['client_company']; ?></li>
						<li><i class="lni lni-calendar"></i> <?php echo $portfolio['start_date']; ?> s/d <?php echo $portfolio['end_date']; ?></li>
						<li><i class="lni lni-user"></i> <?= ADMIN; ?></li>
					</ul>

					<div class="map-section">
						<div class="mapouter">
							<div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20York&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
							</div>
						</div>
						<p class="location"> <i class="lni lni-map-marker"></i> <?php echo $portfolio['client_company']; ?></p>
					</div>

					<div class="text">
						<p><?php echo $portfolio['content']; ?></p>
					</div>
				</div>
			</div>


			<div class="col-lg-4 col-12">
				<div class="event-sidebar">
					<div class="single-widget other-event-wedget">
						<h3 class="sidebar-widget-title">Other Events</h3>
						<ul class="other-event">
							<?php foreach ($portfolios as $p) { ?>
								<li class="single-event">
									<div class="thumbnail">
										<a href="<?php echo base_url(); ?>portfolio/view/<?php echo $p['id']; ?>" class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $p['photo']; ?>" alt="Event Image"></a>
									</div>
									<div class="info">
										<span class="date"><i class="lni lni-calendar"></i> <?php echo format_indo(date('Y-m-d', strtotime($p['start_date']))); ?></span>
										<h6 class="title"><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $p['id']; ?>"><?php echo $p['name']; ?></a></h6>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>

				</div>
			</div>

		</div>
	</div>
</div>