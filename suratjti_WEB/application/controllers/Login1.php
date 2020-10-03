<?php 

class Login1 extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login1');
	}

	function aksi_login(){
		$username_dosen = $this->input->post('USERNAME');
		$PASSWORD_DSN = $this->input->post('PASSWORD_DSN');
		$where = array(
			'USERNAME_DSN' => $username_dosen,
			'PASSWORD_DSN' => md5($PASSWORD_DSN)
			);
		$cek = $this->m_login->cek_login("dosen",$where)->num_rows();
		$hasil_db = $this->m_login->cek_login("dosen", $where)->result();
		if($cek > 0){

			$data_session = array(
				'USERNAME_DSN' => $username_dosen,
				'nama_dosen' => $NAMA_dosen,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("dosen"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login1'));
	}
}