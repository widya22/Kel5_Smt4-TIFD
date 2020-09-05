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
			'PASSWORD_ADM' => md5($PASSWORD_ADM)
			);
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
		$data_admin = $this->m_login->data_admin("admin", $where)->result();

		if($cek > 0){
			foreach ($data_admin as $N){
				$id= $N->ID_ADMIN;
				$nama= $N->NAMA_ADMIN;
				$prodi= $N->PRODI;
				$no_hp= $N->HP;
			}

			$data_session = array(
				'id_admin' => $ID_ADMIN,
				'nama_admin' => $row->NAMA_ADMIN,
				'id' => $id,
				'nama' =>$nama,
				'prodi' => $prodi,
				'no_hp'=> $no_hp,
				'status' => "login0"
				);

			$this->session->set_userdata($data_session);

			if($id=='super'){
				redirect(base_url("admin/superAdmin"));
			}else{
				redirect(base_url("admin"));
			}
		}else{
			$data_session = array(
			'logingagal' => '1'
			);

			$this->session->set_userdata($data_session);
			redirect(base_url("admin"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login0'));
	}
}