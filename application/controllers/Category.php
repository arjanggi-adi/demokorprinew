<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Category extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_category');
	}

	public function view($id)
	{
		// If there is no id after category in URL, redirect to the home page
		if (!$id) {
			redirect(base_url());
			exit;
		}

		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$data['category'] = $this->Model_category->get_category_data($id);
		$data['news'] = $this->Model_category->get_news_data($id);

		$this->load->view('frontend/template/head', $header);
		$this->load->view('view_category', $data);
		$this->load->view('frontend/template/footer-1');
	}
}
