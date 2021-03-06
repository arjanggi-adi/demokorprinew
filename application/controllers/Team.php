<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Team extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Model_common');
        $this->load->model('Model_about');
        $this->load->model('Model_home');
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
        $header['team'] = $this->Model_home->get_team_member_data();

        // $this->load->view('view_header', $header);

        // $this->load->view('view_footer');

        $this->load->view('frontend/template2/head', $header);
        $this->load->view('frontend/template2/header', $header);
        $this->load->view('view_team');
        $this->load->view('frontend/template2/footer');
    }

    public function detil($id)
    {
        $header['setting'] = $this->Model_common->get_setting_data();
        $header['page'] = $this->Model_common->get_page_data();
        $header['comment'] = $this->Model_common->get_comment_code();
        $header['social'] = $this->Model_common->get_social_data();
        $header['language'] = $this->Model_common->get_language_data();
        $header['latest_news'] = $this->Model_common->get_latest_news();
        $header['latest_news_footer'] = $this->Model_common->get_latest_news_footer();
        $header['popular_news'] = $this->Model_common->get_popular_news();
        $header['team'] = $this->Model_home->get_team_member_data();
        $header['designation'] = $this->Model_home->get_team_id($id);
        $header['tes'] = $this->Model_home->get_team_member($id);


        // $this->load->view('view_header', $header);

        // $this->load->view('view_footer');

        $this->load->view('frontend/template2/head', $header);
        $this->load->view('frontend/template2/header', $header);
        $this->load->view('frontend/modal/team');
        $this->load->view('frontend/template2/footer');
    }
}
