<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
			$this->load->view('front/v_dashboard');
	}

	public function login()
	{
		$this->load->view('front/v_login');
	}	

	public function register()
	{
		$this->load->view('front/v_register');
	}

	public function blank()
	{
		$this->load->view('front/v_maintenance');
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */