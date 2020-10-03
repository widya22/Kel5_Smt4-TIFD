<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->library('session');
	}

	function edit($id){
        $data["jensu"] = $this->m_data->jenis_surat($id)->result();
        $this->load->view('v_edit_jensu', $data);
	}

	function update_aksiJs(){// update jenis surat
		$ijs = $this->input->post('ijs');
		$js = $this->input->post('js');
	  
		$data = array(
		  'JENIS_SURAT' => $js
		  
		  );
		$where = array(
		  'ID_JENIS_SURAT' => $ijs
		);
  
		$this->m_data->update_jensu_data($where, $data,'jenis_surat');
		$this->session->set_userdata('ubah_sukses', 'ubah');
		
		redirect('admin/JnSrt');
		}
	
	function hapus($id){
		$where = array('ID_JENIS_SURAT' => $id);
		$this->m_data->hapus_data($where,'jenis_surat');
		$this->session->set_userdata('hapus_sukses', 'ubah');
		redirect('admin/JnSrt');
    }

    function tambahJS_aksi(){ // Tambah Jenis Surat
		$id_jenis_surat = $this->input->post('ijs');
		$jenis_surat = $this->input->post('js');
 
		$data = array(
			'ID_JENIS_SURAT' => $id_jenis_surat,
			'JENIS_SURAT' => $jenis_surat
			);
		$this->m_data->update_jenisSurat($data,'jenis_surat');
		redirect('admin/index');
	}
	
	function reset_adm($id){   //reset password admin
		$data = array(
			'PASSWORD_ADM' => "ce3b0a8763ba21d10f345df15a1dbf01"  //pwd = JTIPOLIJE       
		);    
		$where = array(
			'ID_ADMIN' => $id
		);
  
	  $this->m_data->update_data($where,$data,'admin');
		  $this->session->set_userdata('reset_sukses', 'reset');
	  redirect('admin/superAdmin');
		} 

		function hapus_adm($id){ //hapus admin
			$where = array('ID_ADMIN' => $id);
			$this->m_data->hapus_data($where,'admin');
			$this->session->set_userdata('hapus_sukses', 'ubah');
			redirect('admin/superAdmin');
		}

		function tambah_aksiADM(){ //tambah jenis nsuratr
			$id = $this->input->post('id_admin');
			$nama = $this->input->post('nama');
			$prodi = $this->input->post('prodi');
			$pwd = $this->input->post('pwd');
			$hp = $this->input->post('hp');
			$hp2 = '62'.$hp;
		
			$data = array(
				'ID_ADMIN' => $id,
				'NAMA_ADMIN' => $nama,
				'PRODI' => $prodi,
				'HP' => $hp2,
				'PASSWORD_ADM' => md5($pwd)
				
				);
				
			$id_cek = $this->m_data->cek_data($id, 'ID_ADMIN', 'admin'); //untuk cek data
			
			if ($id_cek > 0){
				$this->session->set_userdata('tambah_gagal', 'ubah');
				redirect('admin/superAdmin');
			}else {
			$this->m_data->input_data($data,'admin');
			$this->session->set_userdata('tambah_sukses', 'ubah');
			redirect('admin/superAdmin');
			}
		}

		function edit_superadmin($id){
			$data["superadmin"] = $this->m_data->edit_admin($id)->result();
			$this->load->view('v_edit_superadmin', $data);
		}

		function update_aksi_admin(){// update jenis surat

			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$prodi = $this->input->post('prodi');
			$hp = $this->input->post('hp');
			$pwd1 = $this->input->post('pwd1');
			$pwd2 = $this->input->post('pwd2');
		  
			if($pwd2 == null){
			$data = array(
			  'NAMA_ADMIN' => $nama,
			  'PRODI' => $prodi,
			  'HP' => $hp
			  );
			}else{
				$data = array(
					'NAMA_ADMIN' => $nama,
					'PRODI' => $prodi,
					'HP' => $hp,
					'PASSWORD_ADM' => md5($pwd2)
					);
			}

			$where = array(
			  'ID_ADMIN' => $id
			);

			if($pwd2 == null ){
				$this->m_data->update_jensu_data($where, $data,'admin');
				$this->session->set_userdata('ubah_sukses', 'ubah');

				if ($_SESSION['id']=='super'){
					redirect('admin/superAdmin/'.$id);
				}else{
					redirect('admin/dtSrtPd/'.$id);
				}
			}else {
			if($this->m_data->cek_data(md5($pwd1), 'PASSWORD_ADM', 'admin') > 0){ //jika tidak ada di database
				$this->m_data->update_jensu_data($where, $data,'admin');
				$this->session->set_userdata('ubah_sukses', 'ubah');

				if ($_SESSION['id']=='super'){
					redirect('admin/superAdmin/'.$id);
				}else{
					redirect('admin/dtSrtPd/'.$id);
				}}
			}
			$this->session->set_userdata('pwd_gagal', 'ubah');
			redirect('crud/edit_superadmin/'.$id);
			
			}
}