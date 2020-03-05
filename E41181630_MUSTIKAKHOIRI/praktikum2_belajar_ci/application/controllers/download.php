<?php
//mencegah akses langsung pada file controller
defined('BASEPATH') OR exit('No direct script access allowed');

// membuat class Download yang mewarisi sifat dari class CI_Controller
class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();		//digunakan agar tidak menimpa __construct parent
		$this->load->helper(array('url','download'));	//mengaktifkan atau memanggil helper 'url' dan 'download' di controller agar tidak perlu mengaktifkannya di autoload				
	}

	//function untuk download
	public function index(){		
		$this->load->view('v_download'); //memparsing data ke dalam view v_download agar bisa didownload
	}

	//function untuk melakukan aksi download
	public function lakukan_download(){			
		//force_download() adalah fungsi download yang disediakan oleh codeigniter untuk melakukan aksi download dengan menentukan sendiri isi file yang akan didownload
		force_download('gambar/a.png',NULL);
	}	

}