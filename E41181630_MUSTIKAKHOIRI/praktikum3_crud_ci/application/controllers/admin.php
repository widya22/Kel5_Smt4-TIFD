<?php 

// membuat class Admin yang mewarisi sifat dari class CI_Controller
class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();	//digunakan agar tidak menimpa __construct parent
		
		//cek session status apakah admin sudah login atau belum
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login"));     //jika admin belum login, maka tidak dialihkan ke halaman login dan tidak boleh mengakses halaman admin
		}
	}

	function index(){
		$this->load->view('v_admin'); //view v_admin adalah halaman admin
	}
}