<!-- Main Footer -->
<footer class="main-footer alternate" style="background-image: url(<?= base_url('') ?>frontend/images/background/5.jpg);">
    <div class="auto-container">
        <div class="widgets-section">
            <div class="row">
                <div class="big-column col-xl-7 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="footer-column col-xl-12 col-lg-12 col-md-12 col-sm-12">
                            <div class="footer-widget about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="<?= base_url('') ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt=""></a>
                                    </figure>
                                </div>
                                <div class="widget-content">
                                    <div class="text"><?php echo nl2br($setting['footer_about']); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="social-links">
                    <ul class="social-icon-two">
                        <?php
                        foreach ($social as $row) {
                            if ($row['social_url'] != '') {
                                echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                            }
                        }
                        ?>
                    </ul>
                </div>

                <div class="copyright-text">
                    <a href="https://www.patrasdev.co.id" target="_blank"><?php echo $setting['footer_copyright']; ?></a>
                </div>
            </div>
        </div>
    </div>
</footer>

</div>



<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-circle-o-up"></span></div>
<script src="<?= base_url('frontend') ?>/js/jquery.js"></script>
<script src="<?= base_url('frontend') ?>/js/popper.min.js"></script>
<script src="<?= base_url('frontend') ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('frontend') ?>/js/jquery.fancybox.js"></script>
<script src="<?= base_url('frontend') ?>/js/owl.js"></script>
<script src="<?= base_url('frontend') ?>/js/wow.js"></script>
<script src="<?= base_url('frontend') ?>/js/appear.js"></script>
<script src="<?= base_url('frontend') ?>/js/validate.js"></script>
<script src="<?= base_url('frontend') ?>/js/mixitup.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="<?= base_url('frontend') ?>/js/map-script.js"></script>
<script src="<?= base_url('frontend') ?>/js/script.js"></script>
<!-- Color Setting -->
<script src="<?= base_url('frontend') ?>/js/color-settings.js"></script>
</body>


</html>