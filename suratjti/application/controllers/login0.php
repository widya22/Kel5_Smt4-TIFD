<?php 

class Login0 extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function index(){
		$this->load->view('v_login0');
	}

	function aksi_login(){
		$ID_ADMIN = $this->input->post('ID_ADMIN');
		$PASSWORD_ADM = $this->input->post('PASSWORD_ADM');
		$where = array(
			'ID_ADMIN' => $ID_ADMIN,
			'PASSWORD_ADM' => $PASSWORD_ADM
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'id_admin' => $ID_ADMIN,
				'nama_admin' => $row->NAMA_ADMIN,
				'status' => "login0"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login0'));
	}
}