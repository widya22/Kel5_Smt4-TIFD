<?php 

// membuat class Form yang mewarisi sifat dari class CI_Controller
class Form extends CI_Controller{

	function __construct(){
		parent::__construct();	//digunakan agar tidak menimpa __construct parent
		$this->load->library('form_validation'); //memanggil library 'form_validation'
	}

	//function untuk halaman index
	function index(){
		$this->load->view('v_form'); //menampilkan form dengan memanggil view v_form
	}

	//function untuk aksi dari form
	function aksi(){
		//menentukan bagian dari form yang akan diberikan validasi
		//penulisan validasi : set_rules('nama form yang akan diberi validasi','kata yang dimunculkan saat validasi', 'peraturan form')
		//set rules = menetapkan peraturan untuk form || required = form wajid diisi
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');

		//cek form validasi
		if($this->form_validation->run() != false){
			echo "Form validation oke";		//pemberitahuan bahwa form validasi benar
		}else{
			$this->load->view('v_form');	//mengembalikan ke view v_form jika form validasi salah
		}
	}
}