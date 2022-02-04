<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<header class="header navbar-area">

    <!-- <div class="toolbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="toolbar-social">
                        <ul>
                            <li><span class="title">Follow Us On : </span></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-facebook-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-instagram"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original"></i></a></li>
                            <li><a href="javascript:void(0)"><i class="lni lni-google"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="toolbar-login">
                        <div class="button">
                            <a href="registration.html"><?php echo $setting['top_bar_phone']; ?></a>
                            <a href="login.html" class="btn"><?php echo $setting['top_bar_email']; ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="nav-inner">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="<?= base_url('') ?>">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="Logo">
                        </a>
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ms-auto">
                                <li class="nav-item"><a <?php if ($this->uri->segment(1) == "home") {
                                                            echo 'class="active"';
                                                        } ?> href="<?= base_url('home') ?>"><?php echo HOME; ?></a></li>
                                <!-- <li><a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a></li> -->
                                <li class="nav-item"><a href="<?php echo base_url(); ?>portfolio">Event</a></li>
                                <!-- <li><a href="<?php echo base_url(); ?>testimonial"><?php echo TESTIMONIAL; ?></a></li> -->
                                <li class="nav-item"><a href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a></li>
                                <li class="nav-item"><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
                            </ul>
                            <div class="sl-nav" style="margin-left: 40px;">
                                <ul>
                                    <li>English <i class="fa fa-angle-down" aria-hidden="true"></i>
                                        <div class="triangle"></div>
                                        <ul>
                                            <li><i class="sl-flag flag-idn">
                                                    <div id="germany"></div>
                                                </i> <span class="active">English</span></li>
                                            <li><i class="sl-flag flag-usa">
                                                    <div id="germany"></div>
                                                </i> <span>Indonesia</span></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>


<section class="hero-area">
    <div class="hero-slider">
        <?php
        foreach ($slider as $row) {
        ?>
            <div class="hero-inner overlay" style="background-image: url(<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>);">
                <div class="container">
                    <div class="row ">
                        <div class="col-lg-8 offset-lg-2 col-md-12 co-12">
                            <div class="home-slider">
                                <div class="hero-text">
                                    <h5 class="wow fadeInUp" data-wow-delay=".3s"><?php echo $row['heading']; ?></h5>
                                    <h1 class="wow fadeInUp" data-wow-delay=".5s">Excellent And Friendly <br> Faculty Members</h1>
                                    <p class="wow fadeInUp" data-wow-delay=".7s"><?php echo nl2br($row['content']); ?></p>
                                    <div class="button wow fadeInUp" data-wow-delay=".9s">
                                        <a href="<?php echo $row['button1_url']; ?>" class="btn"><?php echo $row['button1_text']; ?></a>
                                        <a href="<?php echo $row['button1_url']; ?>" class="btn alt-btn"><?php echo $row['button1_text']; ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</section>


<section class="features">
    <div class="container-fluid">
        <div class="single-head">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 padding-zero">

                    <div class="single-feature">
                        <h3><a href="javascript:void(0)">ORGANISASI</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae
                            nulla debitis vitae temporibus sed.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#sajianModal">Explore <i class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 padding-zero">

                    <div class="single-feature">
                        <h3><a href="javascript:void(0)">Unit Pelaksana Kegiatan</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae
                            nulla debitis vitae temporibus sed.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn" data-bs-toggle="modal" data-bs-target="#unitModal">Explore <i class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 padding-zero">

                    <div class="single-feature last">
                        <h3><a href="javascript:void(0)">Kontribusi Yayasan</a></h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, quaerat beatae
                            nulla debitis vitae temporibus sed.</p>
                        <div class="button">
                            <a href="javascript:void(0)" class="btn">Explore <i class="lni lni-arrow-right"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-us section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-left">
                    <div class="about-title align-left">
                        <span class="wow fadeInDown" data-wow-delay=".2s">About Our KORPRI BALI</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Welcome to our FOUNDATION </h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Yayasan Kesejahteraan Korpri merupakan
                            badan hukum yang memiliki tujuan dan maksud yang bersifat sosial, keagamaan, dan kemanusiaan.</p>
                        <p class="qote wow fadeInUp" data-wow-delay=".8s">Lorem ipsum dolor sit amet, consectetur
                            adipisicing elit, do eius mod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="button wow fadeInUp" data-wow-delay="1s">
                            <a href="about-us.html" class="btn">Read More</a>
                            <a href="https://www.youtube.com/watch?v=X3LTTS9eR-c" class="glightbox video btn"> Play Video<i class="lni lni-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                    <img src="<?= base_url('frontend/template2/images/about/po.png'); ?>" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($setting['service_status'] == 'Show') : ?>
    <section class="courses section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                            <i class="lni lni-graduation"></i>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $setting['service_title']; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $setting['service_subtitle']; ?></p>
                    </div>
                </div>
            </div>
            <div class="single-head">
                <div class="row">
                    <?php
                    foreach ($service as $row) {
                    ?>
                        <div class="col-lg-4 col-md-6 col-12">

                            <div class="single-course wow fadeInUp" data-wow-delay=".2s">
                                <div class="course-image">
                                    <a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#"></a>
                                    <p class="price">Artikel</p>
                                </div>
                                <div class="content">
                                    <h3><a href="<?php echo base_url(); ?>service/view/<?php echo $row['id']; ?>"><?php echo $row['heading']; ?></a></h3>
                                    <p><?php echo $row['short_content']; ?></p>
                                </div>
                                <div class="bottom-content">
                                    <span class="tag">
                                        <i class="lni lni-tag"></i>
                                        <a href="javascript:void(0)"><?= ADMIN; ?></a>
                                    </span>
                                </div>
                            </div>

                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['counter_status'] == 'Show') : ?>
    <section class="our-achievement section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".2s">
                        <h3 class="counter"><span id="secondo1" class="countup" cup-end="<?php echo $setting['counter1_value']; ?>"><?php echo $setting['counter1_value']; ?></span></h3>
                        <h4><?php echo $setting['counter1_text']; ?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".4s">
                        <h3 class="counter"><span id="secondo2" class="countup" cup-end="<?php echo $setting['counter2_value']; ?>"><?php echo $setting['counter2_value']; ?></span></h3>
                        <h4><?php echo $setting['counter2_text']; ?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="<?php echo $setting['counter3_value']; ?>"><?php echo $setting['counter3_value']; ?></span></h3>
                        <h4><?php echo $setting['counter3_text']; ?></h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-12">
                    <div class="single-achievement wow fadeInUp" data-wow-delay=".6s">
                        <h3 class="counter"><span id="secondo3" class="countup" cup-end="<?php echo $setting['counter4_value']; ?>"><?php echo $setting['counter4_value']; ?></span></h3>
                        <h4><?php echo $setting['counter4_text']; ?></h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['portfolio_status'] == 'Show') : ?>
    <section class="events section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                            <i class="lni lni-bookmark"></i>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $setting['portfolio_title']; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $setting['portfolio_subtitle']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($portfolio as $row) {
                ?>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-event wow fadeInUp" data-wow-delay=".2s">
                            <div class="event-image">
                                <a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#"></a>
                                <p class="date"><?php echo date('d', strtotime($row['start_date'])) ?><span><?php echo date('M', strtotime($row['start_date'])) ?></span></p>
                            </div>
                            <div class="content">
                                <h3><a href="<?php echo base_url(); ?>portfolio/view/<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h3>
                                <p><?php echo $row['short_content']; ?></p>
                            </div>
                            <div class="bottom-content">
                                <a class="speaker" href="javascript:void(0)">
                                    <img src="<?= base_url('frontend/template2/images/events/speakers/speaker-1.jpg') ?>" alt="#">
                                    <span><?php echo ADMIN; ?></span>
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
<?php endif; ?>

<?php if ($setting['team_status'] == 'Show') : ?>
    <section id="teachers" class="teachers section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                            <i class="lni lni-users"></i>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $setting['team_title']; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $setting['team_subtitle']; ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-lg-5 col-12">

                                <div class="image">
                                    <img src="#" alt="#">
                                </div>

                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="info-head">

                                    <div class="info-box">
                                        <span class="designation">Ketua Dewan Pembina</span>
                                        <h4 class="name"><a href="#" style="font-size: 13px;">Drs. I Nyoman Yasa, M.Si </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-lg-5 col-12">

                                <div class="image">
                                    <img src="#" alt="#">
                                </div>

                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="info-head">

                                    <div class="info-box">
                                        <span class="designation">Anggota Dewan Pembina</span>
                                        <h4 class="name"><a href="#" style="font-size: 13px;">I Made Jendra, S.H </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-lg-5 col-12">

                                <div class="image">
                                    <img src="#" alt="#">
                                </div>

                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="info-head">

                                    <div class="info-box">
                                        <span class="designation">Anggota Dewan Pembina</span>
                                        <h4 class="name"><a href="#" style="font-size: 13px;">Drs. A.A Ngurah Rai Iswara M.Si </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-12">
                    <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                        <div class="row">
                            <div class="col-lg-5 col-12">

                                <div class="image">
                                    <img src="#" alt="#">
                                </div>

                            </div>
                            <div class="col-lg-7 col-12">
                                <div class="info-head">

                                    <div class="info-box">
                                        <span class="designation">Pengawas YKKPB</span>
                                        <h4 class="name"><a href="#" style="font-size: 13px;">Dr. I Gusti Putu Wiadnjana </a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center">
                        <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                            <div class="row">
                                <div class="col-lg-5 col-12">

                                    <div class="image">
                                        <img src="assets/images/team/pak_ketua.png" alt="#">
                                    </div>

                                </div>
                                <div class="col-lg-7 col-12">
                                    <div class="info-head">

                                        <div class="info-box">
                                            <p class="designation">Ketua Yayasan</p>
                                            <h4 class="name"><a href="#">Drs. A.A Gede Oka Wisnumurti, M.Si</a></h4>
                                            <p>Your chance to be a trending expert in IT industries and make a successful
                                                career completion.</p>
                                        </div>
                                        <!-- <ul class="social">
                                            <li><a href=""><i class="lni lni-facebook-filled"></i></a></li>
                                            <li><a href=""><i class="lni lni-twitter-original"></i></a></li>
                                            <li><a href=""><i class="lni lni-linkedin-original"></i></a></li>
                                        </ul> -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <?php
                foreach ($team as $row) {
                ?>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="single-team wow fadeInUp" data-wow-delay=".2s">
                            <div class="row">
                                <div class="col-lg-5 col-12">

                                    <div class="image">
                                        <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#">
                                    </div>

                                </div>
                                <div class="col-lg-7 col-12">
                                    <div class="info-head">

                                        <div class="info-box">
                                            <span class="designation"><?php echo $row['designation_name']; ?></span>
                                            <h4 class="name"><a href="#"><?php echo $row['name']; ?></a></h4>
                                            <p>Your chance to be a trending expert in IT industries and make a successful
                                                career completion.</p>
                                        </div>


                                        <ul class="social">
                                            <?php if (!empty($row['facebook'])) : ?>
                                                <li><a href="<?php echo $row['facebook']; ?>"><i class="lni lni-facebook-filled"></i></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($row['twitter'])) : ?>
                                                <li><a href="<?php echo $row['twitter']; ?>"><i class="lni lni-twitter-original"></i></a></li>
                                            <?php endif; ?>
                                            <?php if (!empty($row['linkedin'])) : ?>
                                                <li><a href="<?php echo $row['linkedin']; ?>"><i class="lni lni-linkedin-original"></i></a></li>
                                            <?php endif; ?>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="row align-center mt-4">
                <div class="col-12">
                    <div class="button">
                        <a href="<?= base_url('team') ?>" class="btn">View All</a>
                    </div>
                </div>
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
    <section class="testimonials section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title align-center gray-bg">
                        <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $setting['testimonial_title']; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $setting['testimonial_subtitle']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row testimonial-slider">
                <?php
                foreach ($testimonial as $row) {
                ?>
                    <div class="col-lg-4 col-md-6 col-12">

                        <div class="single-testimonial">
                            <div class="text">
                                <p><?php echo nl2br($row['comment']); ?></p>
                            </div>
                            <div class="author">
                                <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#">
                                <h4 class="name">
                                    <?php echo $row['name']; ?>
                                    <span class="deg"><?php echo $row['designation'] ?>, <?php echo $row['company']; ?></span>
                                </h4>
                            </div>
                        </div>

                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if ($setting['recent_post_status'] == 'Show') : ?>
    <div class="latest-news-area section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <div class="section-icon wow zoomIn" data-wow-delay=".4s">
                            <i class="lni lni-quotation"></i>
                        </div>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"><?php echo $setting['recent_post_title']; ?></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s"><?php echo $setting['recent_post_subtitle']; ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                $i = 0;
                foreach ($latest_news as $row) {
                    $i++;
                    if ($i > $setting['total_recent_post_home']) {
                        break;
                    }
                ?>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="single-news custom-shadow-hover wow fadeInUp" data-wow-delay=".2s">
                            <div class="image">
                                <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>">
                                    <img class="thumb" src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="#">
                                </a>
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
                                            <a href="javascript:void(0)"><?php echo $row['news_date']; ?></a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="title"><a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>"><?php echo $row['news_title']; ?></a></h4>
                                <p><?php echo $row['news_short_content']; ?></p>
                                <div class="button">
                                    <a href="<?php echo base_url(); ?>news/view/<?php echo $row['news_id']; ?>" class="btn"><?php echo READ_MORE; ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if ($setting['partner_status'] == 'Show') : ?>
    <div class="client-logo-section">
        <div class="container">
            <div class="client-logo-wrapper">
                <div class="client-logo-carousel d-flex align-items-center justify-content-between">
                    <?php
                    foreach ($partner as $row) {
                    ?>
                        <div class="client-logo">
                            <img src="<?php echo base_url(); ?>public/uploads/<?php echo $row['photo']; ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php include('modal/modal.php'); ?>