<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AnggaranDasar extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_about');
    }

    public function index()
    {
        $header['setting'] = $this->Model_common->get_setting_data();
        $header['page'] = $this->Model_common->get_page_data();
        $header['comment'] = $this->Model_common->get_comment_code();
        $header['social'] = $this->Model_common->get_social_data();
        $header['language'] = $this->Model_common->get_language_data();
        $header['latest_news'] = $this->Model_common->get_latest_news();
        $header['latest_news_footer'] = $this->Model_common->get_latest_news_footer();
        $header['popular_news'] = $this->Model_common->get_popular_news();

        // $this->load->view('view_header', $header);

        // $this->load->view('view_footer');

        // $this->load->view('frontend/template2/head', $header);
        // $this->load->view('frontend/template2/header', $header);
        $this->load->view('frontend/template2/coming');
        // $this->load->view('frontend/template2/footer');
    }
}
