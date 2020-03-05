<?php

//mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');
 
// membuat class SelamatDatang yang mewarisi sifat dari class CI_Controller
class SelamatDatang extends CI_Controller {
	
	function __construct(){
		parent::__construct();			//digunakan agar tidak menimpa __construct parent
		$this->load->helper('html');	//mengaktifkan atau memanggil helper 'html' di controller agar tidak perlu mengaktifkannya di autoload
	}

	public function index(){
		// load view view_belajar
		$this->load->view('view_belajar');
	}
}