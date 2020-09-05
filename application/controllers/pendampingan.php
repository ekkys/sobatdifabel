<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pendampingan extends CI_Controller {
	
	public function index(){
		
		$this->load->view('front/v_pendampingan');
	}
}