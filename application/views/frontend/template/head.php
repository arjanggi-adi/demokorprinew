<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta charset="UTF-8">

    <?php
    $base_url = base_url();
    $full_url = base_url(uri_string());
    $final_url = str_replace($base_url, "", $full_url);
    $slug_arr = explode("/", $final_url);

    if (isset($slug_arr[1])) {
        $slug_two = $slug_arr[0] . '/' . $slug_arr[1];
    }
    ?>

    <?php
    foreach ($language as $lang) {
        define($lang['name'], $lang['value']);
    }

    if ($slug_arr[0] == '') {
        echo '<meta name="description" content="' . $page['md_home'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_home'] . '">';
        echo '<title>' . $page['mt_home'] . '</title>';
    }
    if ($slug_arr[0] == 'about') {
        echo '<meta name="description" content="' . $page['md_about'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_about'] . '">';
        echo '<title>' . $page['mt_about'] . '</title>';
    }
    if ($slug_arr[0] == 'gallery') {
        echo '<meta name="description" content="' . $page['md_gallery'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_gallery'] . '">';
        echo '<title>' . $page['mt_gallery'] . '</title>';
    }
    if ($slug_arr[0] == 'faq') {
        echo '<meta name="description" content="' . $page['md_faq'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_faq'] . '">';
        echo '<title>' . $page['mt_faq'] . '</title>';
    }
    if ($slug_arr[0] == 'service') {
        if (!isset($slug_arr[1])) {
            echo '<meta name="description" content="' . $page['md_service'] . '">';
            echo '<meta name="keywords" content="' . $page['mk_service'] . '">';
            echo '<title>' . $page['mt_service'] . '</title>';
        } else {
            $single_service_data = $this->Model_common->get_single_service_data($slug_arr[2]);
            foreach ($single_service_data as $row) {
                echo '<meta name="description" content="' . $row['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $row['meta_keyword'] . '">';
                echo '<title>' . $row['meta_title'] . '</title>';
            }
        }
    }
    if ($slug_arr[0] == 'portfolio') {
        if (!isset($slug_arr[1])) {
            echo '<meta name="description" content="' . $page['md_portfolio'] . '">';
            echo '<meta name="keywords" content="' . $page['mk_portfolio'] . '">';
            echo '<title>' . $page['mt_portfolio'] . '</title>';
        } else {
            $single_portfolio_data = $this->Model_common->get_single_portfolio_data($slug_arr[2]);
            foreach ($single_portfolio_data as $row) {
                echo '<meta name="description" content="' . $row['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $row['meta_keyword'] . '">';
                echo '<title>' . $row['meta_title'] . '</title>';
            }
        }
    }
    if ($slug_arr[0] == 'testimonial') {
        echo '<meta name="description" content="' . $page['md_testimonial'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_testimonial'] . '">';
        echo '<title>' . $page['mt_testimonial'] . '</title>';
    }
    if (isset($slug_two)) {
        if ($slug_two == 'news/page') {
            echo '<meta name="description" content="' . $page['md_news'] . '">';
            echo '<meta name="keywords" content="' . $page['mk_news'] . '">';
            echo '<title>' . $page['mt_news'] . '</title>';
        }
        if ($slug_two == 'news/view') {
            $single_news_data = $this->Model_common->get_single_news_data($slug_arr[2]);
            foreach ($single_news_data as $row) {
                $og_id = $row['news_id'];
                $og_photo = $row['photo'];
                $og_title = $row['news_title'];
                $og_description = $row['news_short_content'];
                echo '<meta name="description" content="' . $row['meta_description'] . '">';
                echo '<meta name="keywords" content="' . $row['meta_keyword'] . '">';
                echo '<title>' . $row['meta_title'] . '</title>';
            }
    ?>
            <meta property="og:title" content="<?php echo $og_title; ?>">
            <meta property="og:type" content="website">
            <meta property="og:url" content="<?php echo base_url() . 'news/view/' . $og_id; ?>">
            <meta property="og:description" content="<?php echo $og_description; ?>">
            <meta property="og:image" content="<?php echo base_url(); ?>public/uploads/<?php echo $og_photo; ?>">
    <?php
        }
    }
    if ($slug_arr[0] == 'contact') {
        echo '<meta name="description" content="' . $page['md_contact'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_contact'] . '">';
        echo '<title>' . $page['mt_contact'] . '</title>';
    }
    if ($slug_arr[0] == 'search') {
        echo '<meta name="description" content="' . $page['md_search'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_search'] . '">';
        echo '<title>' . $page['mt_search'] . '</title>';
    }
    if ($slug_arr[0] == 'terms-and-conditions') {
        echo '<meta name="description" content="' . $page['md_term'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_term'] . '">';
        echo '<title>' . $page['mt_term'] . '</title>';
    }
    if ($slug_arr[0] == 'privacy-policy') {
        echo '<meta name="description" content="' . $page['md_privacy'] . '">';
        echo '<meta name="keywords" content="' . $page['mk_privacy'] . '">';
        echo '<title>' . $page['mt_privacy'] . '</title>';
    }
    ?>

    <link href="<?= base_url('frontend') ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('frontend') ?>/css/style.css" rel="stylesheet">
    <link href="<?= base_url('frontend') ?>/css/responsive.css" rel="stylesheet">
    <link href="<?= base_url('frontend') ?>/css/color-switcher-design.css" rel="stylesheet">
    <link id="theme-color-file" href="<?= base_url('frontend') ?>/css/color-themes/default-theme.css" rel="stylesheet">

    <link rel="icon" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>

    <?php echo $comment['code_body']; ?>

    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="preloader"></div>

        <!-- Main Header-->
        <header class="main-header header-style-one">
            <div class="auto-container">
                <div class="header-lower">
                    <div class="main-box clearfix">
                        <div class="logo-box">
                            <div class="logo"><a href="<?= base_url('') ?>"><img src="<?php echo base_url(); ?>public/uploads/<?php echo $setting['logo']; ?>" alt="" title=""></a></div>
                        </div>

                        <div class="nav-outer clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-md ">
                                <div class="navbar-header">
                                    <!-- Toggle Button -->
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="icon flaticon-menu-button"></span>
                                    </button>
                                </div>

                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li><a href="<?php echo base_url(''); ?>"><?php echo HOME; ?></a></li>
                                        <li class="dropdown"><a href="#"><?php echo PAGE; ?></a>
                                            <ul>
                                                <!-- <li><a href="<?php echo base_url(); ?>about"><?php echo ABOUT; ?></a></li> -->
                                                <li><a href="<?php echo base_url(); ?>gallery"><?php echo GALLERY; ?></a></li>
                                            </ul>
                                        </li>
                                        <!-- <li><a href="<?php echo base_url(); ?>service"><?php echo SERVICE; ?></a></li> -->
                                        <li><a href="<?php echo base_url(); ?>portfolio"><?php echo PORTFOLIO; ?></a></li>
                                        <!-- <li><a href="<?php echo base_url(); ?>testimonial"><?php echo TESTIMONIAL; ?></a></li> -->
                                        <li><a href="<?php echo base_url(); ?>news/page"><?php echo NEWS; ?></a></li>
                                        <li><a href="<?php echo base_url(); ?>contact"><?php echo CONTACT; ?></a></li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>