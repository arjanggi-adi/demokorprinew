<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title"><?php echo $res['heading']; ?></h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text</p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url(); ?>">Home</a></li>
					<li><?php echo $res['heading']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="course-details section">
	<div class="container">
		<div class="row">

			<div class="col-lg-8 col-12">
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview-tab">
						<div class="course-overview">
							<h3 class="title"><?php echo $res['heading']; ?></h3>
							<div class="overview-course-video">
								<img width="100%;" src="<?php echo base_url(); ?>public/uploads/<?php echo $res['photo']; ?>" alt="" />
							</div>
							<p><?php echo $res['content']; ?></p>
							<div class="bottom-content">
								<div class="row align-items-center">
									<div class="col-lg-6 col-md-6 col-12">
										<!-- <div class="button">
											<a href="#0" class="btn">Buy this course</a>
										</div> -->
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<ul class="share">
											<li><span>Share this artikel:</span></li>
											<li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
											<li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
											<li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
											<li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="course-sidebar">
					<div class="sidebar-widget other-course-wedget">
						<h3 class="sidebar-widget-title">Recent Courses</h3>
						<div class="sidebar-widget-content">
							<ul class="sidebar-widget-course">
								<li class="single-course">
									<div class="thumbnail">
										<a href="javascript:void(0)" class="image"><img src="assets/images/courses/recent-courses/course-1.jpg" alt="Course Image"></a>
									</div>
									<div class="info">
										<span class="price">$40<span>.00</span></span>
										<h6 class="title"><a href="course-details.html">Learning to
												Write as a Professional Author</a></h6>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>