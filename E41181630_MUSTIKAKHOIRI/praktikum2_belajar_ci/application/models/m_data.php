<?php 
 
// membuat class M_data yang mewarisi sifat dari class CI_Model
class M_data extends CI_Model{
	//function untuk mengambil data
	function ambil_data(){
		return $this->db->get('user'); //mengambil data dari database (tabel user) dan mengembalikannya ke fungsi pemanggil menggunakan return
	}
}