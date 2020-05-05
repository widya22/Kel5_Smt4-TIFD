<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
        $this->load->model('m_login');
	}

	function index(){
		$this->load->view('home');
	}

	function aksi_login(){
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		$where = array(
			'NIM' => $nim,
			'PASSWORD_MHS' => $password
			);
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		$nama = $this->m_login->cek_login("user",$where)->result();
		if($cek > 0){
			$data_session = array(
                'nama'=>$nama,
				'nim' => $nim,
                'status' => "login"
				);

			$this->session->set_userdata($data_session);
            redirect(base_url());
		}else{
			echo "Username dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}