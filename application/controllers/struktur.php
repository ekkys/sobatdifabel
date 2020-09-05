<?php
class Struktur extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_struktur', 'M_struktur');
	}

	function index()
	{
		$x['data'] = $this->m_struktur->get_all_struktur();
		$this->load->view('front/v_struktur', $x);
	}
}
