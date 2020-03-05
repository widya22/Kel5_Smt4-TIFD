<?php

//mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');

// membuat class Ngoding yang mewarisi sifat dari class CI_Controller
class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding');	//mengaktifkan atau memanggil library 'malasngoding'
		
		//menggunakan function yang sudah dibuat di dalam library
		$this->malasngoding->nama_saya();		//menggunakan function nama_saya()
                echo "<br/>";
                $this->malasngoding->nama_kamu("siapa?");	//menggunakan function nama_kamu()
	}

}