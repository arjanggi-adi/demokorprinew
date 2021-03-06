<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_common');
		$this->load->model('Model_news');
	}

	public function page()
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['latest_news_footer'] = $this->Model_common->get_latest_news_footer();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$this->load->library('pagination');

		$config = array();
		$config["base_url"] = base_url() . "news/page";
		$config["total_rows"] = $this->Model_news->get_total_news();
		$config['first_url'] = base_url() . 'news/page/1';
		$config["per_page"] = 12;
		$config["uri_segment"] = 3;
		$config['use_page_numbers'] = TRUE;

		$this->pagination->initialize($config);

		$offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->Model_news->fetch_books($config["per_page"], $offset);
		$data["links"] = $this->pagination->create_links();

		$this->load->view('frontend/template2/head', $header);
		$this->load->view('frontend/template2/header', $header);
		$this->load->view('view_news', $data);
		$this->load->view('frontend/template2/footer');
	}

	public function view($id)
	{
		$header['setting'] = $this->Model_common->get_setting_data();
		$header['page'] = $this->Model_common->get_page_data();
		$header['comment'] = $this->Model_common->get_comment_code();
		$header['social'] = $this->Model_common->get_social_data();
		$header['language'] = $this->Model_common->get_language_data();
		$header['latest_news'] = $this->Model_common->get_latest_news();
		$header['latest_news_footer'] = $this->Model_common->get_latest_news_footer();
		$header['popular_news'] = $this->Model_common->get_popular_news();

		$data['news'] = $this->Model_news->get_news_detail($id);
		$data['news_category'] = $this->Model_news->get_news_category();

		$this->load->view('frontend/template2/head', $header);
		$this->load->view('frontend/template2/header', $header);
		$this->load->view('view_news_detail', $data);
		$this->load->view('frontend/template2/footer');
	}
}
