<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
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

		$header['slider'] = $this->Model_home->get_slider_data();
		$header['why_choose_us'] = $this->Model_home->get_why_choose_us_data();
		$header['why_choose_us_photo'] = $this->Model_home->get_why_choose_us_photo();
		$header['service'] = $this->Model_home->get_service_data();
		$header['portfolio_category'] = $this->Model_home->get_portfolio_category();
		$header['portfolio'] = $this->Model_home->get_portfolio_data();
		$header['team'] = $this->Model_home->get_team_member_limit();
		$header['testimonial'] = $this->Model_home->get_testimonial_data();
		$header['testimonial_photo'] = $this->Model_home->get_testimonial_photo();
		$header['faq'] = $this->Model_home->get_faq_data();
		$header['faq_photo'] = $this->Model_home->get_faq_photo();
		$header['gallery'] = $this->Model_home->get_gallery_data();
		$header['partner'] = $this->Model_home->get_partner_data();


		$this->load->view('frontend/template2/head', $header);
		// $this->load->view('view_home');
		$this->load->view('frontend/template-2');
		$this->load->view('frontend/template2/footer');
	}
}
