<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sekolah extends CI_Controller {
	
	public function index(){
		
		$this->load->view('front/v_sekolah');
	}
}