<?php
class Kontak extends CI_Controller{

	function index(){
		
		$this->load->view('front/v_kontak');
	}

	function kirim_pesan(){
		$name=str_replace("'", "", $this->input->post('xnama',TRUE));
		$jenis_kelamin=str_replace("'", "", $this->input->post('xjenkel',TRUE));
		$email=str_replace("'", "", $this->input->post('xemail',TRUE));
		$no_hp=str_replace("'", "", $this->input->post('xkontak',TRUE));
		$kota=str_replace("'", "", $this->input->post('xkota',TRUE));
		$difabel_non=str_replace("'", "", $this->input->post('xdifabel',TRUE));
		$ragam=str_replace("'", "", $this->input->post('xragam',TRUE));
		$alat_bantu=str_replace("'", "", $this->input->post('xalat',TRUE));
		$password=str_replace("'", "", $this->input->post('xpassword',TRUE));
		$this->m_kontak->kirim_data($nama,$jenis_kelamin,$email,$no_hp,$kota,$difabel_non,$ragam,$alat_bantu,$password);
		echo $this->session->set_flashdata('msg','<div><p><strong> NB: </strong> Terima Kasih Telah Bergabung Bersama Kami.</p></div>');
		redirect('kontak');
	}
}