<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title"><?php echo $page['news_heading']; ?></h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text</p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<li><?php echo $page['news_heading']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section class="section latest-news-area blog-grid-page">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-7 col-12">
				<div class="row">
					<?php
					$i = 0;
					foreach ($results as $row) {
						$i++;
					?>
						<div class="col-lg-6 col-12">

							<div class="single-news custom-shadow-hover wow fadeInUp" data-wow-delay=".2s">
								<div class="image">
									<a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>"><img class="thumb" src="<?php echo base_url(); ?>public/uploads/<?php echo $row->photo; ?>" alt="#"></a>
								</div>
								<div class="content-body">
									<div class="meta-data">
										<ul>
											<li>
												<i class="lni lni-tag"></i>
												<a href="javascript:void(0)"><?php echo ADMIN; ?></a>
											</li>
											<li>
												<i class="lni lni-calendar"></i>
												<a href="javascript:void(0)"><?php echo format_indo(date('Y-m-d', strtotime($row->news_date))); ?></a>
											</li>
										</ul>
									</div>
									<h4 class="title"><a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>"><?php echo $row->news_title; ?></a></h4>
									<p><?php echo $row->news_short_content; ?></p>
									<div class="button">
										<a href="<?php echo base_url(); ?>news/view/<?php echo $row->news_id; ?>" class="btn">Read More</a>
									</div>
								</div>
							</div>

						</div>
					<?php } ?>
				</div>

				<div class="pagination center">
					<ul class="pagination-list">
						<li><a href="javascript:void(0)">Prev</a></li>
						<li class="active"><a href="javascript:void(0)">1</a></li>
						<li><a href="javascript:void(0)">2</a></li>
						<li><a href="javascript:void(0)">3</a></li>
						<li><a href="javascript:void(0)">4</a></li>
						<li><a href="javascript:void(0)">Next</a></li>
					</ul>
					<?php echo $links; ?>
				</div>

			</div>
			<aside class="col-lg-4 col-md-5 col-12">
				<div class="sidebar">

					<div class="widget search-widget">
						<h5 class="widget-title">Search Here</h5>
						<form action="#">
							<input type="text" placeholder="Search Here...">
							<button type="submit"><i class="lni lni-search-alt"></i></button>
						</form>
					</div>


					<div class="widget popular-feeds">
						<h5 class="widget-title">Recent Posts</h5>
						<div class="popular-feed-loop">
							<div class="single-popular-feed">
								<div class="feed-img">
									<a href="blog-single.html"><img src="assets/images/blog/blog-sidebar1.jpg" alt="#"></a>
								</div>
								<div class="feed-desc">
									<h6 class="post-title"><a href="blog-single.html">This Will Save You Time And Make You
											Money</a>
									</h6>
									<span class="time"><i class="lni lni-calendar"></i> 05th Nov 2023</span>
								</div>
							</div>
							<div class="single-popular-feed">
								<div class="feed-img">
									<a href="blog-single.html"><img src="assets/images/blog/blog-sidebar2.jpg" alt="#"></a>
								</div>
								<div class="feed-desc">
									<h6 class="post-title"><a href="blog-single.html">How to Study Online Courses Effectively</a>
									</h6>
									<span class="time"><i class="lni lni-calendar"></i> 24th March 2023</span>
								</div>
							</div>
							<div class="single-popular-feed">
								<div class="feed-img">
									<a href="blog-single.html"><img src="assets/images/blog/blog-sidebar3.jpg" alt="#"></a>
								</div>
								<div class="feed-desc">
									<h6 class="post-title"><a href="blog-single.html">How To Find The Right Courses for you.</a>
									</h6>
									<span class="time"><i class="lni lni-calendar"></i> 30th Jan 2023</span>
								</div>
							</div>
						</div>
					</div>


					<div class="widget categories-widget">
						<h5 class="widget-title">Categories</h5>
						<ul class="custom">
							<li>
								<a href="javascript:void(0)">College <span>05</span></a>
							</li>
							<li>
								<a href="javascript:void(0)">Online Education <span>10</span></a>
							</li>
							<li>
								<a href="javascript:void(0)">Programming <span>25</span></a>
							</li>
							<li>
								<a href="javascript:void(0)">Online Course <span>15</span></a>
							</li>
							<li>
								<a href="javascript:void(0)">University <span>35</span></a>
							</li>
						</ul>
					</div>
				</div>
			</aside>
		</div>
	</div>
</section>