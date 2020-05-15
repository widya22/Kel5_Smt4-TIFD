<?php 

class Crud extends CI_Controller{
	//untuk extend crud dari CI Controler

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data'); //meload data dari model m data
	}

	function register(){
		$nim = $this->input->post('nim');
		$nim2 = "E".$nim;
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi'); 
		$sandi = $this->input->post('sandi'); 
		$k_sandi = $this->input->post('k_sandi'); 
 
		$data = array( //data yang didapat diubah ke array
			'NIM' => $nim2,
			'NAMA_MHS' => $nama,
			'PRODI' => $prodi,
			'PASSWORD_MHS' => $sandi,
            );
            
        	$data_session = array(
				'nim' => $nim,
				'name' => $nama,
            );
        $this->session->set_userdata($data_session);
		$this->m_data->input_data($data,'user'); //data dikirim ke m data dan dimasukkan ke tabel user
		redirect('home/register2'); //kembali tampilkan halaman crud
	}

	function cek_regist()
	{
		$nim = $this->input->post('nim2');
		$where = array(
			'NIM' => $nim,
		);
		$cek = $this->m_login->cek_login("user", $where)->num_rows();
		echo $cek;
	}

}