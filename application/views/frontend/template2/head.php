<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/edugrids/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Jan 2022 12:15:21 GMT -->

<head>
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

    <link rel="icon" href="<?php echo base_url(); ?>public/uploads/<?php echo $setting['favicon']; ?>" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">


    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('frontend') ?>/template2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url('frontend') ?>/template2/css/LineIcons.2.0.css" />
    <link rel="stylesheet" href="<?= base_url('frontend') ?>/template2/css/animate.css" />
    <link rel="stylesheet" href="<?= base_url('frontend') ?>/template2/css/tiny-slider.css" />
    <link rel="stylesheet" href="<?= base_url('frontend') ?>/template2/css/glightbox.min.css" />
    <link rel="stylesheet" href="<?= base_url('frontend') ?>/template2/css/main.css" />
</head>

<body>
    <?php echo $comment['code_body']; ?>
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>