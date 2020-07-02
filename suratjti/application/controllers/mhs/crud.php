<?php 

class Crud extends CI_Controller{
	//untuk extend crud dari CI Controler

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data'); //meload data dari model m data
		$this->load->model('m_login');
	}


	function register2(){
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

	
	function register(){
		//ambil data dari form register
		$nim = $this->input->post('nim');
		$nim2 = "E".$nim;
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi'); 
		$sandi = $this->input->post('sandi'); 
		$k_sandi = $this->input->post('k_sandi');

		//untuk hapus session
		$this->session->unset_userdata('sama_nim');
		$this->session->unset_userdata('sama_password');
		$this->session->unset_userdata('nim_reload');
		$this->session->unset_userdata('nama');
		$this->session->unset_userdata('sandi');
		$this->session->unset_userdata('k_sandi');
		
		$where = array(
			'NIM' => $nim2
		);
		$cek = $this->m_login->cek_login("user", $where)->num_rows();
		if ($cek > 0) { //jika data di cek ternyata lebih dari nol atau ada nim yang sama
			$data_session = array(
				'sama_nim' => $nim,
				'nim_reload' => $nim,
				'nama' => $nama,
				'sandi' => $sandi,
				'k_sandi' => $k_sandi
			);
		$this->session->set_userdata($data_session);
			redirect('home/register');
		}else{
			if($sandi==$k_sandi){
				$data = array( //data yang didapat diubah ke array, jika data benar
					'NIM' => $nim2,
					'NAMA_MHS' => $nama,
					'PRODI' => $prodi,
					'PASSWORD_MHS' => md5($sandi)
					);
					
					$data_session = array(
						'nim' => $nim,
						'name' => $nama,
					);
				$this->session->set_userdata($data_session);
				$this->m_data->input_data($data,'user'); //data dikirim ke m data dan dimasukkan ke tabel user
				redirect('home/register2'); //tampilkan halaman reg 2
			}else{ //jika password dan konfirmasi password tidak sama
				$data_session = array(
					'sama_password' => $nim,
					'nim_reload' => $nim,
					'nama' => $nama,
					'sandi' => $sandi,
					'k_sandi' => $k_sandi
				);
			$this->session->set_userdata($data_session);
				redirect('home/register');
			}
		}
		
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