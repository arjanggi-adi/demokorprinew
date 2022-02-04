<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title"><?php echo $page['about_heading']; ?></h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text</p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url(''); ?>">Home</a></li>
					<li><?php echo $page['about_heading']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section class="about-us section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="about-left">
					<div class="about-title align-left">
						<span class="wow fadeInDown" data-wow-delay=".2s">About Our korpri</span>
						<h2 class="wow fadeInUp" data-wow-delay=".4s">Welcome to our FOUNDATION</h2>
						<p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $page['about_content']; ?></p>
						<div class="button wow fadeInUp" data-wow-delay="1s">
							<a href="javascript:void(0)" class="btn">Read More</a>
							<a href="https://www.youtube.com/watch?v=r44RKWyfcFw&amp;fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM" class="glightbox video btn"> Play Video<i class="lni lni-play"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<?php if ($page['about_photo'] != "") : ?>
					<div class="about-right wow fadeInRight" data-wow-delay=".4s">
						<img src="<?php echo base_url(); ?>public/uploads/<?php echo $page['about_photo']; ?>" alt="#">
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="experience section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="left-content">
					<div class="exp-title align-left">
						<span class="wow fadeInDown" data-wow-delay=".2s"></span>
						<h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $page['vision_heading']; ?></h2>
						<p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $page['vision_content']; ?></p>
						<h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $page['mission_heading']; ?></h2>
						<p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $page['mission_content']; ?></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="image wow fadeInRight" data-wow-delay="0.5s">
					<img src="<?php echo base_url(); ?>frontend/template2/images/experience/experience.jpg" alt="#">
					<h2>19 <span class="year">years</span> <span class="work">Work Experience</span></h2>
				</div>
			</div>
		</div>


	</div>
</section>