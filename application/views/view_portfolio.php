<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title"><?php echo $page['portfolio_heading']; ?></h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text</p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url('home') ?>">Home</a></li>
					<li><?php echo $page['portfolio_heading']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section class="events section grid-page">
	<div class="container">
		<div class="row">
			<?php
			foreach ($portfolio as $row) {
			?>
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-event wow fadeInUp" data-wow-delay=".2s">
						<div class="event-image">
							<a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#"></a>
							<p class="date"><?php echo date('d', strtotime($row['start_date'])) ?><span><?php echo date('M', strtotime($row['start_date'])) ?></p>
						</div>
						<div class="content">
							<h3><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
							<p><?php echo $row['short_content']; ?></p>
						</div>
						<div class="bottom-content">
							<a class="speaker" href="javascript:void(0)">
								<img src="<?= base_url('frontend/template2/images/events/speakers/speaker-1.jpg') ?>" alt="#">
								<span><?= ADMIN; ?></span>
							</a>
							<span class="time">
								<i class="lni lni-calendar"></i>
								<a href="javascript:void(0)"><?php echo $row['start_date']; ?> s/d <?php echo $row['end_date']; ?></a>
							</span>
						</div>
					</div>

				</div>
			<?php } ?>
		</div>
	</div>
</section>