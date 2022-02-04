<?php
// Update data for view count for this news page
// Getting current view count
// $statement = $pdo->prepare("SELECT * FROM tbl_news WHERE news_id=?");
// $statement->execute(array($_REQUEST['id']));
// $result = $statement->fetchAll();
// foreach ($result as $row) 
// {
// 	$current_total_view = $row['total_view'];
// }
// $updated_total_view = $current_total_view+1;

// Updating database for view count
//$statement = $pdo->prepare("UPDATE tbl_news SET total_view=? WHERE news_id=?");
//$statement->execute(array($updated_total_view,$_REQUEST['id']));

?>

<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title"><?php echo $news['news_title']; ?></h1>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url(''); ?>">Home</a></li>
					<li><?php echo $news['news_title']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section class="section blog-single">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-12">
				<div class="single-inner">
					<div class="post-thumbnils">
						<img src="<?php echo base_url(); ?>public/uploads/<?php echo $news['photo']; ?>" alt="#">
					</div>
					<div class="post-details">
						<div class="detail-inner">

							<ul class="custom-flex post-meta">
								<li>
									<a href="javascript:void(0)">
										<i class="lni lni-calendar"></i>
										<?php echo $news['news_date']; ?>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<i class="lni lni-comments"></i>
										<?php echo $news['comment']; ?> Comments
									</a>
								</li>
								<li>
									<a href="javascript:void(0)">
										<i class="lni lni-eye"></i>
										<?php echo $news['total_view']; ?> View
									</a>
								</li>
							</ul>
							<h2 class="post-title">
								<a href="javascript:void(0)"><?php echo $news['news_title']; ?></a>
							</h2>
							<p><?php echo $news['news_content']; ?></p>
							<blockquote>
								<div class="icon">
									<i class="lni lni-quotation"></i>
								</div>
								<h4>"<?php echo $news['news_short_content']; ?>"</h4>
								<span><?php echo ADMIN; ?></span>
							</blockquote>
							<div class="post-tags-media">
								<div class="post-tags popular-tag-widget mb-xl-40">
									<h5 class="tag-title">Related Tags</h5>
									<div class="tags">
										<a href="javascript:void(0)">Education</a>
									</div>
								</div>
								<div class="post-social-media">
									<h5 class="share-title">Social Share</h5>
									<ul class="custom-flex">
										<li>
											<a href="<?php echo 'http://www.facebook.com/sharer.php?u=' . current_url(); ?>" class="facebook">
												<i class="lni lni-facebook-original"></i>
											</a>
										</li>
										<li>
											<a href="https://twitter.com/intent/tweet?url=<?= current_url(); ?>&text=<?= $news['news_title']; ?>, <?= $news['news_content']; ?>&via=<?= ADMIN; ?>&hashtags=ArsitekBali" class="twitter">
												<i class="lni lni-twitter-original"></i>
											</a>
										</li>
										<li>
											<a href="<?php echo 'https://plus.google.com/share?url=' . current_url(); ?>" class="google">
												<i class="lni lni-google"></i>
											</a>
										</li>
										<li>
											<a href="http://pinterest.com/pin/create/button/?url='<?= current_url(); ?>&description=<?= $news['news_title'] ?>, <?= $news['news_content'] ?>" class="pinterest">
												<i class="lni lni-pinterest"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<div class="post-comments">
							<h3 class="comment-title"><?php echo COMMENTS; ?></h3>
							<ul class="comments-list">
								<li>
									<?php if ($comment == 'On') : ?>
										<?php
										// Getting the full url of the current page
										$final_url = base_url() . 'news/view/' . $_REQUEST['id'];
										?>
										<!-- Facebook Comment Main Code (got from facebook website) -->
										<div class="fb-comments" data-href="<?php echo $final_url; ?>" data-numposts="5"></div>
									<?php endif; ?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<aside class="col-lg-4 col-md-12 col-12">
				<div class="sidebar">

					<div class="widget search-widget">
						<h5 class="widget-title">Search Here</h5>
						<?php echo form_open(base_url() . 'search'); ?>
						<?php
						$data = array(
							'type'         => 'text',
							'name'         => 'search_string',
							'class'        => 'form-control',
							'autocomplete' => 'off',
							'placeholder'  => SEARCH_NEWS
						);
						echo form_input($data);
						?>
						<?php
						$data = array(
							'name'    => 'form1',
							'type'    => 'submit',
							'content' => '<i class="lni lni-search-alt"></i>'
						);
						echo form_button($data);
						?>
						<?php echo form_close(); ?>
					</div>


					<div class="widget popular-feeds">
						<h5 class="widget-title"><?php echo POPULAR_NEWS; ?></h5>
						<div class="popular-feed-loop">
							<?php
							$i = 0;
							foreach ($popular_news as $row) {
								$i++;
								if ($i > $setting['total_popular_post']) {
									break;
								}
							?>
								<div class="single-popular-feed">
									<div class="feed-img">
										<a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#"></a>
									</div>
									<div class="feed-desc">
										<h6 class="post-title"><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a>
										</h6>
										<span class="time"><i class="lni lni-calendar"></i> <?php echo $row['news_date']; ?></span>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


					<div class="widget categories-widget">
						<h5 class="widget-title">Categories</h5>
						<ul class="custom">
							<?php
							foreach ($news_category as $row) {
							?>
								<li>
									<a href="<?php echo base_url(); ?>category/view/<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></a>
								</li>
							<?php } ?>
						</ul>
					</div>

				</div>
			</aside>
		</div>
	</div>
</section>