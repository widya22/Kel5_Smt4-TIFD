<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	function index()
	{
		$this->load->view('home' . '#modalLogin');
	}

	function aksi_login()
	{
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		$where = array(
			'NIM' => $nim,	
			'PASSWORD_MHS' => md5($password)
		);
		$cek = $this->m_login->cek_login("user", $where)->num_rows();
		$hasil_db = $this->m_login->cek_login("user", $where)->result();
		if ($cek > 0) {
			$data_session = array(
				'hasil_db' => $hasil_db,
				'nim' => $nim,
				'status' => "login"
			);

			$this->session->set_userdata($data_session);
			redirect(base_url());
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">Username atau Password Anda Salah!</div>');
			redirect(base_url());
		}
	}

	// function home()
	// {
	// 	$nim = $this->input->post('NIM1');
	// 	$where = array(
	// 		'NIM' => $nim,
	// 	);
	// 	$hasil_db = $this->m_login->cek_login("user", $where)->result();
	// 	$data_session = array(
	// 		'hasil_db' => $hasil_db,
	// 		'status' => "login"
	// 	);
	// 	$this->session->set_userdata($data_session);
	// 	redirect(base_url());
	// }

	function home_regis(){
		$nim = $this->input->post('NIM2');
		print_r($nim);
		$where = array(
			'NIM' => $nim,
		);
		$hasil_db = $this->m_login->cek_login("user", $where)->result();
		$data_session = array(
			'hasil_db' => $hasil_db,
			'popup' => "oke",
			'status' => "daftar"
		);
		$this->session->set_userdata($data_session);
		redirect(base_url());
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}
