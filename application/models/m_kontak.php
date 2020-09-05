<?php
class M_kontak extends CI_Model{

	function kirim_data(){$name, $jenis_kelamin, $email, $no_hp, $kota, $difabel_non, $ragam, $alat_bantu, $image, $password, $role_id, $is_active, $date_create
		$hsl=$this->db->query("INSERT INTO user(xname, xjenkel, xemail, xno_hp, xkota, xdifabel_non, rxagam, xalat_bantu, xpassword) VALUES ('$name', '$jenis_kelamin', '$email', '$no_hp', '$kota', '$difabel_non', '$ragam', '$alat_bantu', '$password')");
		return $hsl;
	}

	function hapus_kontak($kode){
		$hsl=$this->db->query("DELETE FROM user WHERE id='$kode'");
		return $hsl;
	}

	
}