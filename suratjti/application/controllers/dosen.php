<?php 

class Dosen extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
    $this->load->helper('url');
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("login1"));
		}
	}

	function index(){
        $data['surat'] = $this->m_data->tampil_dataSuratDosen()->result();
		$this->load->view('list',$data);
	}
	function list()
  {
    $data['surat'] = $this->m_data->tampil_dataSuratDosen()->result();
    $this->load->view('list',$data);   
  }

  function tambah()
  {
	$this->load->view('v_input'); 
  }  //function tambah diatas berfungsi untuk menampilkan v_input agar dapat memasukan data.

  function admin()
  {
  $this->load->view('indexadmin'); 
  }

  function ftambah(){
	$this->load->view('formtambah'); 
  }//Pada fungsi tambah_aksi data yang diinputkan akan dimasukkan kedalam array $data kemudia diparsing ke model m_data

  function hapus($id)
  {
	$where = array('id' => $id);
	$this->m_data->hapus_data($where,'surat');
	redirect('AgenTour/admin/crud/admin');
  }
    //fungsi hapus menghapus data pada table dengan parameter id

    

  function detailSurat($id)
  {
  $data['detailnilai'] = $this->m_data->detaildata($id);
  $this->load->view('detailsurat', $data);
  }

    
  function update($id){
  $data = array(
  'TRAKING_SURAT' => "Menunggu Admin"
  );
  $where = array(
  'ID_SURAT' => $id
  );
  
  $this->m_data->update_data($where,$data,'surat');
  redirect(base_url('dosen'));
  }
    //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan pada array
    // melalui model
	//kemudian data tersebut disimpan kembali dengan id yang sama.
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login1'));
	}
}