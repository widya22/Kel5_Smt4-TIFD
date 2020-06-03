<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
    $this->load->helper('url');

    if($this->session->userdata('status') != "login"){
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
    
    function tambah(){
		$this->load->view('v_input'); 
    }
    //function tambah diatas berfungsi untuk menampilkan v_input agar dapat memasukan data.
    
    function tambahJS_aksi(){ // Tambah Jenis Surat
		$id_jenis_surat = $this->input->post('id_jenis_surat');
		$jenis_surat = $this->input->post('jenis_surat');
 
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
    function update($id){
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
        redirect('http://localhost/suratjti/admin/dtSrtPd');
    }
    function updateTolak($id){
      $alasan = $this->input->post('alasan');
       
      $data = array(
          'STATUS_SURAT' => $alasan
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
        
}


