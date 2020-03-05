<?php 

// membuat class Login yang mewarisi sifat dari class CI_Controller
class Login extends CI_Controller{

	function __construct(){
		parent::__construct();			//digunakan agar tidak menimpa __construct parent
		$this->load->model('m_login');	//membuka model m_login untuk bisa mengakses database

	}

	function index(){
		$this->load->view('v_login'); //menampilkan form login dari view v_login
	}

	//function untuk melakukan aksi login
	function aksi_login(){
        //menangkap username dan password yg dikirim melalui form login
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		//memasukkan username dan password ke dalam array
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
			
        //mengecek ketersediaan username dan password di m_login || fungsi num_rows() untuk menghitung jumlah record
		$cek = $this->m_login->cek_login("admin",$where)->num_rows();
        
		//cek kebenaran data username dan password
		//jika data benar maka statusnya menjadi login dan session akan berisi username yang diisikan
        if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);

			redirect(base_url("admin")); //jika sudah login maka akan dialihkan ke controller admin

		}else{
			echo "Username atau password salah !"; //peringatan jika username atau password salah
		}
	}

	//function untuk logout
	function logout(){
		$this->session->sess_destroy();	// menghapus semua session setelah logout
		redirect(base_url('login'));	//setelah logout dialihkan kembali pada halaman login
	}
}