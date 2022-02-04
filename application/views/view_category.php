<?php
foreach ($category as $row) {
	$category_name = $row['category_name'];
}
?>

<section class="page-title" style="background-image:url(<?php echo base_url(); ?>public/uploads/<?php echo $setting['banner_category']; ?>);">
	<div class="auto-container">
		<div class="inner-container clearfix">
			<div class="title-box">
				<h1>Category</h1>
				<span class="title"><?php echo $category_name; ?></h1></span>
			</div>
			<ul class="bread-crumb clearfix">
				<li><a href="<?= base_url('news/page'); ?>">News</a></li>
				<li>Category</li>
			</ul>
		</div>
	</div>
</section>

<section class="blog-section">
	<div class="auto-container">
		<ul class="accordion-box mb-3">
			<li class="accordion block">
				<div class="acc-btn active" style="border-radius: 10px;">Hasil pencarian: <?php echo $category_name; ?></div>
			</li>
		</ul>
		<div class="row">
			<!-- News Block -->
			<?php
			$i = 0;
			foreach ($news as $row) {
				$i++;
			?>
				<div class="news-block-two col-lg-6 col-md-12 col-sm-12">
					<div class="inner-box">
						<div class="image-box">
							<figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></figure>
							<div class="overlay-box"><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><i class="fa fa-link"></i></a></div>
						</div>
						<div class="caption-box">
							<div class="inner">
								<h3><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h3>
								<ul class="info">
									<li><?php echo $row['news_date']; ?>,</li>
									<li><a href="blog-detail-2.html"><?php echo ADMIN; ?></a></li>
									<!-- <li><a href="blog-detail-2.html">3 Commets</a></li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>