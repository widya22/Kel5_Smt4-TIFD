<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
    $this->load->helper('url');

    if($this->session->userdata('status') != "login0"){
    redirect(base_url("login0"));             
  }
}
    function index(){
      $data['surat'] = $this->m_data->tampil_data_suratPending()->result();
      $this->load->view('suratPending',$data);
      }
    function jnSrt(){
      $data['jenis_surat'] = $this->m_data->tampil_jenis_surat()->result();
      $this->load->view('jenisSurat',$data);   
      }  
	  function dtMhs(){
		  $data['user'] = $this->m_data->tampil_data_mhs()->result();
      $this->load->view('dataMahasiswa',$data);   
      }
  
    function dtSrtPd(){
      $data['surat'] = $this->m_data->tampil_data_suratPending()->result();
      $this->load->view('suratPending',$data);
      }
    function dtSrtTlk(){
      $data['surat'] = $this->m_data->tampil_data_suratTolak()->result();
      $this->load->view('suratTolak',$data);
      }
    function dtSrtSls(){
      $data['surat'] = $this->m_data->tampil_data_suratSelesai()->result();
      $this->load->view('suratSelesai',$data);
      }      
      function dtSrtProses(){
        $data['surat'] = $this->m_data->tampil_data_suratDiProses()->result();
        $this->load->view('suratProses',$data);
        }
        function dtSrtDapatDiambil(){
          $data['surat'] = $this->m_data->tampil_data_suratDapatDiambil()->result();
          $this->load->view('suratDapatDiambil',$data);
          }
    function tambah(){
		$this->load->view('v_input'); 
    }
    //function tambah diatas berfungsi untuk menampilkan v_input agar dapat memasukan data.
    
    function tambahJS_aksi(){ // Tambah Jenis Surat
		$id_jenis_surat = $this->input->post('ijs');
		$jenis_surat = $this->input->post('js');
 
		$data = array(
			'id_jenis_surat' => $id_jenis_surat,
			'jenis_surat' => $jenis_surat
			);
		$this->m_data->input_jenisSurat($data,'jenis_surat');
		redirect('admin/index');
    }
    //Pada fungsi tambah_aksi data yang diinputkan akan dimasukkan kedalam array $data kemudia diparsing ke model m_data

    function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'user');
		redirect('crud/index');
    }
    //fungsi hapus menghapus data pada table dengan parameter id

    function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'user')->result();
		$this->load->view('v_edit',$data);
    }
    //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan melalui model
    //kemudian data tersebut disimpan kembali dengan id yang sama.
    function detailSurat0($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $this->load->view('detailsurat0', $data);
    }
    function detailSuratTlk($id)
    {
    $data['detailnilai'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $this->load->view('alasanTolak', $data);
    }
    function update($id){
        //$id = $this->input->post('id');
        //$nama = $this->input->post('nama');
        //$alamat = $this->input->post('alamat');
        //$pekerjaan = $this->input->post('pekerjaan');    
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
    function updatestatus2($id){
      //$id = $this->input->post('id');
      //$nama = $this->input->post('nama');
      //$alamat = $this->input->post('alamat');
      //$pekerjaan = $this->input->post('pekerjaan');    
      $data = array(
          'STATUS_SURAT' => "Dapat Diambil"
          //'alamat' => $alamat,
          //'pekerjaan' => $pekerjaan
      );
          
      $where = array(
          'ID_SURAT' => $id
      );
  
      $this->m_data->update_data($where,$data,'surat');
      redirect('admin/dtSrtPd');
  }
  function updatestatus3($id){
    //$id = $this->input->post('id');
    //$nama = $this->input->post('nama');
    //$alamat = $this->input->post('alamat');
    //$pekerjaan = $this->input->post('pekerjaan');    
    $data = array(
        'STATUS_SURAT' => "Selesai"
        //'alamat' => $alamat,
        //'pekerjaan' => $pekerjaan
    );
        
    $where = array(
        'ID_SURAT' => $id
    );

    $this->m_data->update_data($where,$data,'surat');
    redirect('admin/dtSrtPd');
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
      redirect('http://localhost/suratjti/admin/dtSrtPd');
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
  function tambah_aksiJs(){
		$ijs = $this->input->post('ijs');
		$js = $this->input->post('js');
		
 
		$data = array(
			'ID_JENIS_SURAT' => $ijs,
			'JENIS_SURAT' => $js
			
			);
		$this->m_data->input_data($data,'jenis_surat');
		redirect('admin/JnSrt');
    }

    function tolak(){
      $ids=$this->input->post('ids');
      $alasan=$this->input->post('alasantlk');      
      $this->m_data->update_tolak($ids,$alasan);
      
  } 


    function updateTolak1($id){
      //$id = $this->input->post('id');
      //$nama = $this->input->post('nama');
      //$alamat = $this->input->post('alamat');
      //$pekerjaan = $this->input->post('pekerjaan');    
      $data = array(
          'STATUS_SURAT' => "DiTolak - Data Surat Tidak Lengkap"
          //'alamat' => $alamat,
          //'pekerjaan' => $pekerjaan
      );    
      $where = array(
          'ID_SURAT' => $id
      );
  
      $this->m_data->update_data($where,$data,'surat');
      redirect('http://localhost/suratjti/admin/dtSrtPd');
  }
  function updateTolak2($id){
    //$id = $this->input->post('id');
    //$nama = $this->input->post('nama');
    //$alamat = $this->input->post('alamat');
    //$pekerjaan = $this->input->post('pekerjaan');    
    $data = array(
        'STATUS_SURAT' => "DiTolak - Data Surat Tidak Valid"
        //'alamat' => $alamat,
        //'pekerjaan' => $pekerjaan
    );    
    $where = array(
        'ID_SURAT' => $id
    );

    $this->m_data->update_data($where,$data,'surat');
    redirect('http://localhost/suratjti/admin/dtSrtPd');
}
function updateTolak3($id){
  //$id = $this->input->post('id');
  //$nama = $this->input->post('nama');
  //$alamat = $this->input->post('alamat');
  //$pekerjaan = $this->input->post('pekerjaan');    
  $data = array(
      'STATUS_SURAT' => "DiTolak - Identitas Mahasiswa Tidak Lengkap"
      //'alamat' => $alamat,
      //'pekerjaan' => $pekerjaan
  );    
  $where = array(
      'ID_SURAT' => $id
  );

  $this->m_data->update_data($where,$data,'surat');
  redirect('http://localhost/suratjti/admin/dtSrtPd');
}
function updateTolak4($id){
  //$id = $this->input->post('id');
  //$nama = $this->input->post('nama');
  //$alamat = $this->input->post('alamat');
  //$pekerjaan = $this->input->post('pekerjaan');    
  $data = array(
      'STATUS_SURAT' => "DiTolak - Identitas Mahasiswa Tidak Valid"
      //'alamat' => $alamat,
      //'pekerjaan' => $pekerjaan
  );    
  $where = array(
      'ID_SURAT' => $id
  );

  $this->m_data->update_data($where,$data,'surat');
  redirect('http://localhost/suratjti/admin/dtSrtPd');
}
function print($id)
{
$data['detailnilai'] = $this->m_data->detaildata($id);
$data['detailAnggota'] = $this->m_data->detailanggota($id);
$this->load->view('printPreview', $data);
}
}


