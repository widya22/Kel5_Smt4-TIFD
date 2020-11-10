<?php 

class admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
    $this->load->helper('url');
    $this->load->library('session');

    if($this->session->userdata('status') != "login0"){
    redirect(base_url("login0"));
  }
}
    function index(){ //untuk admin prodi
      $data['surat'] = $this->m_data->tampil_data_suratPending()->result();
      $this->load->view('suratPending',$data);
      }
    
    function superAdmin(){ //untuk super admin
      $data['admin'] = $this->m_data->tampil_data_admin();
      $data['superadmin'] = $this->m_data->tampil_data_super_admin();
      $this->load->view('super_admin',$data);
      }

      //Tampil Jenis Surat
    function jnSrt(){
      $data['jenis_surat'] = $this->m_data->tampil_jenis_surat()->result();
      $this->load->view('jenisSurat',$data);   
      }  
      //Tampil Data Mahasiswa
	  function dtMhs(){
		  $data['user'] = $this->m_data->tampil_data_mhs()->result();
      $this->load->view('dataMahasiswa',$data); 
      }
      //Tampil Data Surat Yang Pending
    function dtSrtPd(){
      $data['surat'] = $this->m_data->tampil_data_suratPending()->result();
      $this->load->view('suratPending',$data);
      }
      function dtSrtPdTA(){
        $data['surat'] = $this->m_data->tampil_data_suratPendingTA()->result();
        $this->load->view('suratPending',$data);
        }  
      //Tampil Data Surat yang Ditolak
    function dtSrtTlk(){
      $data['surat'] = $this->m_data->tampil_data_suratTolak()->result();
      $this->load->view('suratTolak',$data);
      }
      //Tampil Data Surat yang Selesai
    function dtSrtSls(){
      $data['surat'] = $this->m_data->tampil_data_suratSelesai()->result();
      $this->load->view('suratSelesai',$data);
      } 
      //Tampil Data Surat yang Diproses     
    function dtSrtProsesMK(){
      $data['surat'] = $this->m_data->tampil_data_suratDiProsesMK()->result();
      $this->load->view('suratProsesMK',$data);
      }
      //Tampil Data Surat yang Diproses     
    function dtSrtProsesOBS(){
      $data['surat'] = $this->m_data->tampil_data_suratDiProsesOBS()->result();
      $this->load->view('suratProsesOBS',$data);
      }
      //Tampil Data Surat yang Diproses     
    function dtSrtProsesTA(){
      $data['surat'] = $this->m_data->tampil_data_suratDiProsesTA()->result();
      $this->load->view('suratProsesTA',$data);
      }
      //Tampil Data Surat yang Diproses     
    function dtSrtProsesPKL(){
      $data['surat'] = $this->m_data->tampil_data_suratDiProsesPKL()->result();
      $this->load->view('suratProsesPKL',$data);
      }
      //Tampil Data Surat yang Sudah Dapat Diambil
    function dtSrtDapatDiambil(){
        $data['surat'] = $this->m_data->tampil_data_suratDapatDiambil()->result();
        $this->load->view('suratDapatDiambil',$data);
        }
    function tambah(){
		$this->load->view('v_input'); 
    }
    //function tambah diatas berfungsi untuk menampilkan v_input agar dapat memasukan data.


    //Pada fungsi tambah_aksi data yang diinputkan akan dimasukkan kedalam array $data kemudia diparsing ke model m_data


    //Tampil Detail Surat
    function detailSurat0($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('detailsurat0', $data);
    }
    //Tampil Detail Surat 2
    function detailSuratTlk($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('detailSuratDiproses', $data);
    }
    //Tampil Detail Surat Diproses
    function dsDiproses($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('detailSuratDiproses', $data);
    }
    //Tampil Detail Surat dapat diambil
    function dsDapatDiambil($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('detailSuratDapatDiambil', $data);
    }
    //Tampil Detail Surat dapat diambil
    function dsSelesai($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('detailSuratSelesai', $data);
    }
    //Update Status Surat Menjadi Sedang Dalam Proses
    function update($id){   
        $data = array(
            'STATUS_SURAT' => "Sedang Dalam Proses"
            //'alamat' => $alamat,
            //'pekerjaan' => $pekerjaan
        );    
        $where = array(
            'ID_SURAT' => $id
        );
    
        $this->m_data->update_data($where,$data,'surat');
        redirect('admin/dtSrtPd');
    }

    //Update Status Surat Menjadi Dapat Diambil
    function updatestatus2($id){    
      $data = array(
          'STATUS_SURAT' => "Dapat Diambil"
          //'alamat' => $alamat,
          //'pekerjaan' => $pekerjaan
      );
          
      $where = array(
          'ID_SURAT' => $id
      );
  
      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtProsesMK');
  }

  //Update Status Surat menjadi Selesai
  function updatestatus3($id){  
    $data = array(
        'STATUS_SURAT' => "Selesai - Surat Telah Diterima Mahasiswa"        
    );
        
    $where = array(
        'ID_SURAT' => $id
    );

    $this->m_data->update_data($where,$data,'surat');
    redirect('admin/dtSrtSls');
}
    function updateTolak($id){
      $id = $this->input->post('ids');
      $nip = $this->input->post('nip');
      $ijs = $this->input->post('ijs');
      $nim = $this->input->post('nim');
      $namaMitra = $this->input->post('namaMitra');
      $alamatMitra = $this->input->post('alamatMitra');
      $tanggal = $this->input->post('tanggal');
      $tanggalPengajuan = $this->input->post('tanggalPengajuan');      
      $alasantolak = $this->input->post('alasan');       
      $ket = $this->input->post('ket');
      $data = array(
          'ID_SURAT' => $id,
          'NIP' => $nip,
          'ID_JENIS_SURAT' => $ijs,
          'NIM' => $nim,
          'NAMA_MITRA' => $namaMitra,
          'ALAMAT_MITRA' => $alamatMitra,
          'TANGGAL' => $tanggal,
          'TANGGAL_PENGAJUAN' => $tanggalPengajuan,
          'STATUS_SURAT' => $alasantolak,
          'KETERANGAN' => $ket
          //'alamat' => $alamat,
          //'pekerjaan' => $pekerjaan
      );  
      $where = array(
          'ID_SURAT' => $id
      );
  
      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtPd');
  }
    //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan pada array
    // melalui model
    //kemudian data tersebut disimpan kembali dengan id yang sama.
    function logout(){
      $this->session->sess_destroy();
      redirect(base_url('login0'));
    }
        

    function simpan_js(){
      $id_jenis_surat=$this->input->post('id_jenis_surat');
      $jenis_surat=$this->input->post('jenis_surat');      
      $this->m_data->simpan_js($id_jenis_surat,$jenis_surat);
      redirect('admin/JnSrt');
  } 

  function tambah_aksiJs(){ //tambah jenis nsuratr
		$id = $ijs = $this->input->post('ijs');
		$js = $this->input->post('js');
	
		$data = array(
			'ID_JENIS_SURAT' => $ijs,
			'JENIS_SURAT' => $js
			
      );
			$id_cek = $this->m_data->cek_data($id, 'ID_JENIS_SURAT', 'jenis_surat'); //untuk cek data

      if($id_cek > 0){
        $this->session->set_userdata('tambah_gagal', 'tambah');
        redirect('admin/JnSrt');
      }else{
		    $this->m_data->input_data($data,'jenis_surat');
        $this->session->set_userdata('tambah_sukses', 'tambah');
        redirect('admin/JnSrt');
    }}

    function update_aksiJs(){// update jenis surat
      $ijs = $this->input->post('ijs');
      $js = $this->input->post('js');
    
      $data = array(
        'ID_JENIS_SURAT' => $ijs,
        'JENIS_SURAT' => $js
        
        );
      $where = array(
        'ID_JENIS_SURAT' => $ijs
      );

      $this->m_data->update_jensu_data($where, $data,'jenis_surat');
      redirect('admin/JnSrt');
      }

    function tolak($ids){
      $alasan=$this->input->post('alasan1');      
      $this->m_data->update_tolak($alasan,$ids);

      redirect('admin/dtSrtPd');
  } 
   //Tampil Data Searching

  function searching(){
    $search=$this->input->post('search');      
    $data['surat'] = $this->m_data->search($search)->result();
    $this->load->view('suratSearch',$data);
} 

    //Update Status Surat Ditolak Dengan Alasannya
    function updateTolak1($id){  
           
      $alasantolak = $this->input->post('alasan1');
      $data = array(
          'STATUS_SURAT' => $alasantolak
      );    
      $where = array(
          'ID_SURAT' => $id
      );
  
      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtPd');
  }
    //Update Status Surat Ditolak Dengan Alasannya
    function updateTolak2($id){   
      $data = array(
          'STATUS_SURAT' => "DiTolak - Data Surat Tidak Valid"
          
      );    
      $where = array(
          'ID_SURAT' => $id
      );

      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtPd');
      }
    //Update Status Surat Ditolak Dengan Alasannya
    function updateTolak3($id){    
      $data = array(
          'STATUS_SURAT' => "DiTolak - Identitas Mahasiswa Tidak Lengkap"
          
      );    
      $where = array(
          'ID_SURAT' => $id
      );

      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtPd');
      }
    //Update Status Surat Ditolak Dengan Alasannya
    function updateTolak4($id){   
      $data = array(
          'STATUS_SURAT' => "DiTolak - Identitas Mahasiswa Tidak Valid"          
      );    
      $where = array(
          'ID_SURAT' => $id
      );

      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtPd');
      }



     //Reset Password Mahasiswa
    function resetPwd($id){   
      $data = array(
          'PASSWORD_MHS' => "ce3b0a8763ba21d10f345df15a1dbf01"  //pwd = JTIPOLIJE       
      );    
      $where = array(
          'NIM' => $id
      );

    $this->m_data->update_data($where,$data,'user');
		$this->session->set_userdata('reset_sukses', 'ubah');
    redirect('admin/dtMhs');
      } 

      function hapus($id){
        $where = array('nim' => $id);
        $this->m_data->hapus_data($where,'user');
		    $this->session->set_userdata('hapus_sukses', 'ubah');
    redirect('admin/dtMhs');
        }
        //fungsi hapus menghapus data pada table dengan parameter id
    
        function edit($id){
        $where = array('id' => $id);
        $data['user'] = $this->m_data->edit_data($where,'user')->result();
        $this->load->view('v_edit',$data);
        }
        //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan melalui model
        //kemudian data tersebut disimpan kembali dengan id yang sama.

        

    function print($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('printPreview', $data);
    }
}


