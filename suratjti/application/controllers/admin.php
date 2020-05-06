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
    
    function tambah_aksi(){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
 
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
			);
		$this->m_data->input_data($data,'user');
		redirect('crud/index');
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

    function update($id){
        //$id = $this->input->post('id');
        //$nama = $this->input->post('nama');
        //$alamat = $this->input->post('alamat');
        //$pekerjaan = $this->input->post('pekerjaan');
    
        $data = array(
            'TRAKING_SURAT' => "Selesai"
            //'alamat' => $alamat,
            //'pekerjaan' => $pekerjaan
        );
    
        $where = array(
            'ID_SURAT' => $id
        );
    
        $this->m_data->update_data($where,$data,'surat');
        redirect('http://localhost/suratadmin/crud/dtSrtPd');
    }
    //sama seperti hapus data, pada fungsi edit ini id dipilih sebagai parameter kemudian data yang ada di id itu ditampilkan pada array
    // melalui model
    //kemudian data tersebut disimpan kembali dengan id yang sama.
    
}
