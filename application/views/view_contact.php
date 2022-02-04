<div class="breadcrumbs overlay">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-8 offset-lg-2 col-md-12 col-12">
				<div class="breadcrumbs-content">
					<h1 class="page-title"><?php echo $page['contact_heading']; ?></h1>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
						been the industry's standard dummy text</p>
				</div>
				<ul class="breadcrumb-nav">
					<li><a href="<?= base_url(''); ?>">Home</a></li>
					<li><?php echo $page['contact_heading']; ?></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<section id="contact-us" class="contact-us section">
	<div class="container">
		<div class="row">
			<ul class="accordion-box mb-3">
				<li class="accordion block">
					<?php
					if (!empty($error)) {
						echo '<div class="acc-btn active" style="border-radius: 10px; background: red;">';
						echo $error;
						echo '</div>';
					}
					if (!empty($success)) {
						echo '<div class="acc-btn active" style="border-radius: 10px; background: green;">';
						echo $success;
						echo '</div>';
					}
					?>
				</li>
			</ul>
			<div class="col-lg-8 col-md-12 col-12">
				<div class="form-main">
					<h3 class="title"><span>Ready to Start?</span>
						Let's Talk
					</h3>
					<?php echo form_open(base_url() . 'contact', array('id' => 'contact-form')); ?>
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="form-group">
								<label><?php echo NAME; ?></label>
								<?php
								$data = array(
									'type'         => 'text',
									'name'         => 'visitor_name',
									'class'        => 'form-control',
									'autocomplete' => 'off'
								);
								echo form_input($data);
								?>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="form-group">
								<label>Your Subject</label>
								<input name="subject" type="text" placeholder="" required="required">
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="form-group">
								<label><?php echo EMAIL_ADDRESS; ?></label>
								<?php
								$data = array(
									'type'         => 'email',
									'name'         => 'visitor_email',
									'class'        => 'form-control',
									'autocomplete' => 'off'
								);
								echo form_input($data);
								?>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="form-group">
								<label><?php echo PHONE; ?></label>
								<?php
								$data = array(
									'type'         => 'text',
									'name'         => 'visitor_phone',
									'class'        => 'form-control',
									'autocomplete' => 'off'
								);
								echo form_input($data);
								?>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group message">
								<label><?php echo MESSAGE; ?></label>
								<?php
								$data = array(
									'name'  => 'visitor_comment',
									'class' => 'form-control'
								);
								echo form_textarea($data);
								?>
							</div>
						</div>
						<div class="col-12">
							<div class="form-group button">
								<?php
								$data = array(
									'name'    => 'form_contact',
									'class'   => 'btn',
									'type'    => 'submit',
									'content' => SEND_MESSAGE
								);
								echo form_button($data);
								?>
							</div>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
			<div class="col-lg-4 col-12">
				<div class="contact-info">

					<div class="single-info">
						<i class="lni lni-map-marker"></i>
						<h4><?php echo FIND_US_ON_MAP; ?></h4>
						<p class="no-margin-bottom"><?php echo nl2br($setting['footer_address']); ?></p>
					</div>


					<div class="single-info">
						<i class="lni lni-phone"></i>
						<h4>Let's Talk</h4>
						<p class="no-margin-bottom">Phone: <?php echo nl2br($setting['footer_phone']); ?>
						</p>
					</div>


					<div class="single-info">
						<i class="lni lni-envelope"></i>
						<h4>E-mail Us</h4>
						<p class="no-margin-bottom"><a href="https://demo.graygrids.com/cdn-cgi/l/email-protection#cca5a2aaa38cb5a3b9bea8a3a1ada5a2e2afa3a1"><span class="__cf_email__" data-cfemail="a2cbccc4cde2dbcdd7d0c6cdcfc3cbcc8cc1cdcf"><?php echo $setting['top_bar_email']; ?></span></a>
							<br> <a href="https://demo.graygrids.com/cdn-cgi/l/email-protection#c0a3afaeb4a1a3b480b9afb5b2a4afada1a9aeeea3afad"><span class="__cf_email__" data-cfemail="e0838f8e94818394a0998f9592848f8d81898ece838f8d"><?php echo $setting['top_bar_email']; ?></span></a>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>


<div class="map-section">
	<div class="mapouter">
		<div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2023608.237369713!2d113.35534307501439!3d-7.857357683305357!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd2407d0451216f%3A0xe29e4010db3654e!2sYayasan%20Kesejahteraan%20Korpri%20Propinsi%20Bali!5e0!3m2!1sid!2sid!4v1643559036206!5m2!1sid!2sid" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
		</div>
	</div>
</div>