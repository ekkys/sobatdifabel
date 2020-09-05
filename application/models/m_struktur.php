<?php
class M_struktur extends CI_Model{

	function get_struktur_type(){
		$hsl=$this->db->get('structur_name');
		return $hsl;
	}

	function get_all_struktur(){
		$hsl=$this->db->get('tbl_structure');
		return $hsl;
	}

	function simpan_struktur($kode,$structure_name,$structure_jabatan,$structure_bidang,$structure_disability,$structure_asal,$structure_img){
		$hsl=$this->db->query("INSERT INTO (type,gambar_large,gambar_kotak,detail,rate) VALUES ('$room_type','$img_large','$img_thumb','$deskripsi','$room_rate')");
		return $hsl;
	}

	//front End
	function get_all_struktur_home(){
		$hsl=$this->db->query("SELECT * FROM tbl_structure LIMIT 4");
		return $hsl;
	}

	function get_struktur_by_kode($kode){
		$hsl=$this->db->query("SELECT * FROM tbl_structure WHERE structure_id='$kode'");
		return $hsl;
	}

	function update_struktur($kode,$structure_name,$structure_jabatan,$structure_bidang,$structure_disability,$structure_asal,$structure_img){
		$hsl=$this->db->query("UPDATE tbl_structure SET structur_name='$structure_name',structure_jabatan='$structure_jabatan',structure_bidang='$structure_bidang',structure_disability='$structure_disability',structure_asal='$structure_asal',structure_img='$structure_img'  WHERE structure_id='$kode'");
		return $hsl;
	}

	function update_struktur_img($kode,$structure_name,$structure_jabatan,$structure_bidang,$structure_disability,$structure_asal,$structure_img){
		$hsl=$this->db->query("UPDATE tbl_structure SET structur_name='$structure_name',structure_jabatan='$structure_jabatan',structure_bidang='$structure_bidang',structure_disability='$structure_disability',structure_asal='$structure_asal',structure_img='$structure_img' WHERE structure_id='$kode'");
		return $hsl;
	}


	function hapus_struktur($kode){
		$hsl=$this->db->query("DELETE FROM tbl_structure WHERE structure_id='$kode'");
		return $hsl;
	}
}