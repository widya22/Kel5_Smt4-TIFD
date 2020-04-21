<?php
class Lp extends CI_Controller{

    function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	function aksi_login(){
		//menangkap data yang di inputkan pada form login di v_login dan menyimpanya ke variabel sementara
		$username = $this->input->post('NAMA_MHS');
		$password = $this->input->post('PASSWORD_MHS');

		//menyimpan data ke array pada variabel $where
		$where = array(
			'NAMA_MHS' => $username,
			'PASSWORD_MHS' => ($password)
			);
		//mengecek ada atau tidaknya data dari tabel admin yang sesuai dengan data yang disimpan di $where
		//mencari function cek_login pada model m_login
		$cek = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek > 0){
			
			//jika data ada maka status = login
			$data_session = array(
				'NAMA_MHS' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			
			//menuju ke controller admin
			redirect(base_url("admin"));

		}else{

			//jika data tidak ada
			echo "Username dan password salah !";
			// redirect(base_url("lp"));
		}
	}
	
	//untuk logout maka perlu menghapus session login
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('lp'));
    }

    public function index()
    {
        $data_admin['admin'] = $this->m_lp->tampil_admin()->
        result();
        $data_services['services'] = $this->m_lp->tampil_services()->
        result();
        $data_produk['produk'] = $this->m_lp->tampil_produk()->
        result();
        $this->load->view('LandingPage/v_lp', $data_admin);
        $this->load->view('LandingPage/v_lp_services', $data_services);
        $this->load->view('LandingPage/v_lp_produk', $data_produk);
    }

}