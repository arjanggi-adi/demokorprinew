<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/Model_header');
		$this->load->model('admin/Model_dashboard');
		$this->load->model('admin/Model_news');
	}
	public function index()
	{
		$header['setting'] = $this->Model_header->get_setting_data();

		$data['news'] = $this->Model_news->show();

		$data['total_news_category'] = $this->Model_dashboard->show_total_news_category();
		$data['total_news'] = $this->Model_dashboard->show_total_news();
		$data['total_team_member'] = $this->Model_dashboard->show_total_team_member();
		$data['total_portfolio'] = $this->Model_dashboard->show_total_portfolio();
		$data['total_testimonial'] = $this->Model_dashboard->show_total_testimonial();
		$data['total_slider'] = $this->Model_dashboard->show_total_slider();

		$this->load->view('admin/view_header', $header);
		$this->load->view('admin/view_dashboard', $data);
		$this->load->view('admin/view_footer');
	}
}
