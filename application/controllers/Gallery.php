<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Gallery extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_gallery');
	}

	public function index()
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$header['gallery'] = $this->Model_gallery->get_gallery_data();

		$this->load->view('frontend/template/head', $header);
		$this->load->view('view_gallery');
		$this->load->view('frontend/template/footer-1');
	}
}
