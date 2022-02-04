<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="banner-section">
    <div class="banner-carousel owl-carousel owl-theme">
        <?php
        foreach ($slider as $row) {
        ?>
            <div class="slide-item" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>);">
                <div class="auto-container">
                    <div class="content-box">
                        <h2><?php echo $row['heading']; ?></h2>
                        <div class="text"><?php echo nl2br($row['content']); ?></div>
                        <div class="link-box">
                            <a href="<?php echo $row['button1_url']; ?>" class="theme-btn btn-style-one"><?php echo $row['button1_text']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="bottom-box">
        <div class="auto-container clearfix">
            <ul class="contact-info">
                <li><span>Phone :</span> <?php echo $setting['top_bar_phone']; ?></li>
                <li><span>EMAIL :</span> <a href="#"><?php echo $setting['top_bar_email']; ?></a></li>
            </ul>
        </div>
    </div>
</section>

<section class="about-section" style="background-image: url(<?php echo base_url(); ?>frontend/images/background/1.jpg);">
    <div class="auto-container">
        <div class="row no-gutters">
            <!-- Image Column -->
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="title-box wow fadeInLeft" data-wow-delay='1200ms'>
                        <h2>ABOUT <br> US</h2>
                    </div>
                    <div class="image-box">
                        <figure class="alphabet-img wow fadeInRight"><img src="<?php echo base_url(); ?>frontend/images/resource/alphabet-image.png" alt=""></figure>
                        <figure class="image wow fadeInRight" data-wow-delay='600ms'><img src="<?php echo base_url(); ?>frontend/images/resource/image-1.jpg" alt=""></figure>
                    </div>
                </div>
            </div>

            <!-- Content Column -->
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column wow fadeInLeft">
                    <div class="content-box">
                        <div class="title">
                            <h2>Asada Studio <br>Bali</h2>
                        </div>
                        <div class="text">Our company has many years experience and specializes in manufacturing, salling, serviceing and repairing cardan shafts (cardans) for various vehicles, technological equipment, tractor, special machinery and agricultural machinery of verious domestic and foreign manufacturers.</div>
                        <div class="link-box"><a href="about.html" class="theme-btn btn-style-one">About Us</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($setting['service_status'] == 'Show') : ?>
    <section class="services-section">
        <div class="upper-box" style="background-image: url(<?= base_url() ?>frontend/images/background/2.jpg);">
            <div class="auto-container">
                <div class="sec-title text-center light">
                    <span class="float-text">Specialization</span>
                    <h2>Our Specialization</h2>
                </div>
            </div>
        </div>

        <div class="services-box">
            <div class="auto-container">
                <div class="services-carousel owl-carousel owl-theme">
                    <?php
                    foreach ($service as $row) {
                    ?>
                        <div class="service-block">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></a></figure>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['heading']; ?></a></h3>
                                    <div class="text"><?php echo $row['short_content']; ?></div>
                                    <div class="link-box">
                                        <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo READ_MORE; ?> <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['portfolio_status'] == 'Show') : ?>
    <section class="projects-section">
        <div class="auto-container">
            <div class="sec-title text-right">
                <span class="float-text">Project</span>
                <h2>Our Project</h2>
            </div>
        </div>

        <div class="inner-container">
            <div class="projects-carousel owl-carousel owl-theme">
                <!-- Project Block -->
                <?php
                foreach ($portfolio as $row) {
                ?>
                    <div class="project-block">
                        <div class="image-box">
                            <figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></figure>
                            <div class="overlay-box">
                                <h4><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h4>
                                <div class="btn-box">
                                    <a href="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" class="lightbox-image" data-fancybox="gallery"><i class="fa fa-search"></i></a>
                                    <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><i class="fa fa-external-link"></i></a>
                                </div>
                                <span class="tag">Category</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['team_status'] == 'Show') : ?>
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <span class="title"><?php echo $setting['team_title']; ?></span>
                <h2><?php echo $setting['team_subtitle']; ?></h2>
            </div>

            <div class="row clearfix">
                <!-- Team Block -->
                <?php
                foreach ($team as $row) {
                ?>
                    <div class="team-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <div class="image"><a href="#"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></a></div>
                                <ul class="social-links">
                                    <?php if (!empty($row['facebook'])) : ?>
                                        <li><a href="<?php echo $row['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($row['twitter'])) : ?>
                                        <li><a href="<?php echo $row['twitter']; ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($row['google_plus'])) : ?>
                                        <li><a href="<?php echo $row['google_plus']; ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($row['instagram'])) : ?>
                                        <li><a href="<?php echo $row['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($row['linkedin'])) : ?>
                                        <li><a href="<?php echo $row['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    <?php endif; ?>
                                </ul>
                                <h3 class="name"><a href="#"><?php echo $row['name']; ?></a></h3>
                            </div>
                            <span class="designation"><?php echo $row['designation_name']; ?></span>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['testimonial_status'] == 'Show') : ?>
    <?php
    foreach ($testimonial_photo as $row) {
        $testimonial_main_photo = $row['main_photo'];
    }
    ?>
    <section class="testimonial-section">
        <div class="outer-container clearfix">
            <!-- Title Column -->
            <div class="title-column clearfix">
                <div class="inner-column">
                    <div class="sec-title">
                        <span class="float-text">Testimonial</span>
                        <h2><?php echo $setting['testimonial_title']; ?></h2>
                    </div>
                    <div class="text"><?php echo $setting['testimonial_subtitle']; ?></div>
                </div>
            </div>

            <!-- Testimonial Column -->
            <div class="testimonial-column clearfix" style="background-image: url(<?= base_url('') ?>frontend/images/background/4.jpg);">
                <div class="inner-column">
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!-- Testimonial Block -->
                        <?php
                        foreach ($testimonial as $row) {
                        ?>
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="image-box"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></div>
                                    <div class="text"><?php echo nl2br($row['comment']); ?></div>
                                    <div class="info-box">
                                        <h4 class="name"><?php echo $row['name']; ?></h4>
                                        <span class="designation"><?php echo $row['designation'] ?>, <?php echo $row['company']; ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['recent_post_status'] == 'Show') : ?>
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title">
                <span class="float-text">Blogs</span>
                <h2>News & Articals</h2>
            </div>
            <div class="row">
                <!-- News Block -->
                <?php
                $i = 0;
                foreach ($latest_news as $row) {
                    $i++;
                    if ($i > $setting['total_recent_post_home']) {
                        break;
                    }
                ?>
                    <div class="news-block col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></figure>
                                <div class="overlay-box"><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><i class="fa fa-link"></i></a></div>
                            </div>
                            <div class="caption-box">
                                <h3><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h3>
                                <ul class="info">
                                    <li><?php echo $row['news_date']; ?>,</li>
                                    <li><?php echo ADMIN; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['partner_status'] == 'Show') : ?>
    <section class="clients-section">
        <div class="inner-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <?php
                    foreach ($partner as $row) {
                    ?>
                        <li class="slide-item">
                            <figure class="image-box"><a href="#"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt=""></a></figure>
                        </li>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </section>
<?php endif; ?>