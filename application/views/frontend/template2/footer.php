<footer class="footer">

    <div class="footer-middle">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="f-about single-footer">
                        <div class="logo">
                            <a href="<?= base_url(); ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo"></a>
                        </div>
                        <p><?php echo nl2br($setting['footer_about']); ?></p>
                        <div class="footer-social">
                            <ul>
                                <?php
                                foreach ($social as $row) {
                                    if ($row['social_url'] != '') {
                                        echo '<li><a href="' . $row['social_url'] . '"><i class="' . $row['social_icon'] . '"></i></a></li>';
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer sm-custom-border recent-blog">
                        <h3><?php echo LATEST_NEWS; ?></h3>
                        <?php
                        $i = 0;
                        foreach ($latest_news_footer as $row) {
                            $i++;
                            if ($i > $setting['total_recent_post']) {
                                break;
                            }
                        ?>
                            <ul>
                                <li>
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#">
                                        <?php echo $row['news_title']; ?>
                                    </a>
                                    <span class="date"><i class="lni lni-calendar"></i>July 15, 2023</span>
                                </li>
                            </ul>
                        <?php } ?>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer sm-custom-border f-link">
                        <h3><?php echo QUICK_LINKS; ?></h3>
                        <ul>
                            <li><a href="<?php echo base_url(); ?>"><?php echo HOME; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>terms-and-conditions"><?php echo TERMS_AND_CONDITIONS; ?></a></li>
                            <li><a href="<?php echo base_url(); ?>privacy-policy"><?php echo PRIVACY_POLICY; ?></a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-footer footer-newsletter">
                        <h3>Contact</h3>
                        <p class="mb-2"><?php echo nl2br($setting['footer_address']); ?></p>
                        <ul>
                            <li class="mb-2"><a><?php echo nl2br($setting['footer_phone']); ?></a></li>
                            <li><a><?php echo nl2br($setting['footer_working_hour']); ?></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-12">
                        <div class="left">
                            <p>Designed and Developed by<a href="https://www.patrasdev.co.id" rel="nofollow" target="_blank"><?php echo $setting['footer_copyright']; ?></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>


<a href="#" class="scroll-top btn-hover">
    <i class="lni lni-chevron-up"></i>
</a>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="<?= base_url('frontend') ?>/template2/js/bootstrap.min.js"></script>
<script src="<?= base_url('frontend') ?>/template2/js/count-up.min.js"></script>
<script src="<?= base_url('frontend') ?>/template2/js/wow.min.js"></script>
<script src="<?= base_url('frontend') ?>/template2/js/tiny-slider.js"></script>
<script src="<?= base_url('frontend') ?>/template2/js/glightbox.min.js"></script>
<script src="<?= base_url('frontend') ?>/template2/js/main.js"></script>
<script type="text/javascript">
    //========= Hero Slider 
    tns({
        container: '.hero-slider',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
    });
    //========= testimonial 
    tns({
        container: '.testimonial-slider',
        items: 3,
        slideBy: 'page',
        autoplay: false,
        mouseDrag: true,
        gutter: 0,
        nav: true,
        controls: false,
        controlsText: ['<i class="lni lni-arrow-left"></i>', '<i class="lni lni-arrow-right"></i>'],
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 1,
            },
            768: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1170: {
                items: 3,
            }
        }
    });
    //====== Clients Logo Slider
    tns({
        container: '.client-logo-carousel',
        slideBy: 'page',
        autoplay: true,
        autoplayButtonOutput: false,
        mouseDrag: true,
        gutter: 15,
        nav: false,
        controls: false,
        responsive: {
            0: {
                items: 1,
            },
            540: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 4,
            },
            1170: {
                items: 6,
            }
        }
    });
    //========= glightbox
    GLightbox({
        'href': 'https://www.youtube.com/watch?v=r44RKWyfcFw&fbclid=IwAR21beSJORalzmzokxDRcGfkZA1AtRTE__l5N4r09HcGS5Y6vOluyouM9EM',
        'type': 'video',
        'source': 'youtube', //vimeo, youtube or local
        'width': 900,
        'autoplayVideos': true,
    });
</script>

<script>
    $(document).ready(function() {
        $(document).on('click', '#detail', function() {
            var name = $(this).data('name');
            var designation_name = $(this).data('designation_name');
            var photo = $(this).data("photo");
            var base_url = "<?php echo base_url(); ?>";
            $('#name').text(name);
            $('#designation_name').text(designation_name);
            $('#photo').html('<img src="' + base_url + 'public/uploads/' + photo + '" class="mb-3 mx-auto" alt="" width="80px">');
        })
    })
</script>
</body>

</html>