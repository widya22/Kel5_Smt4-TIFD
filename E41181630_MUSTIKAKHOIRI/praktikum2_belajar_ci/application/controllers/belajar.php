<?php

//mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');
 
// membuat class Belajar yang mewarisi sifat dari class CI_Controller
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();			//digunakan agar tidak menimpa __construct parent
		$this->load->model('m_data');	//membuka model m_data untuk bisa mengakses database
    }
	
	//fungsi untuk data user
    function user(){
		$data['user'] = $this->m_data->ambil_data()->result(); //mengambil data user dengan function ambil_data() pada model m_data dan menjadikan data sebagai array dengan function result()
		$this->load->view('v_user.php',$data); //memasukkan array data ke variabel dan memparsingnya ke dalam view v_user
	}
 
	//function untuk menampilkan index
	public function index(){
		echo "ini method index pada controller belajar";
	}
 
	//function untuk menampilkan halo
	public function halo(){
		//memasukkan data ke dalam array
        $data = array( 
            'judul' => "Cara Membuat View Pada CodeIgniter",
            'tutorial' => "CodeIgniter");
		$this->load->view('view_belajar', $data); //memparsing array data dan menampilkannya pada view view_belajar
	}
 
}