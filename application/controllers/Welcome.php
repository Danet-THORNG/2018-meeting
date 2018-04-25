<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	//Default constructor
	function __construct()
	{
			parent::__construct();
			log_message('debug', 'URI=' . $this->uri->uri_string());
	}

	public function index()
	{
		// $data['activeLink'] = 'home';
		// $this->load->view('templates/header', $data);
		// $this->load->view('menu/index', $data);
		// $this->load->view('welcome', $data);
		// $this->load->view('templates/footer', $data);
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/left_sidebar');
		$this->load->view('template_admin/footer');
	}

	public function list_room(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/left_sidebar');
		$this->load->view('list_room');
		$this->load->view('template_admin/footer');
	}
	public function location(){
		$this->load->view('template_admin/header');
		$this->load->view('template_admin/left_sidebar');
		$this->load->view('list_lcation',$data);
		$this->load->view('template_admin/footer');
		$data['title'] = 'List of Location'; 
	}

}
