<?php 

// membuat class Crud yang mewarisi sifat dari class CI_Controller
class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		    //digunakan agar tidak menimpa __construct parent
		$this->load->model('m_data');   //membuka model m_data untuk bisa mengakses database
            $this->load->helper('url'); //mengaktifkan atau memanggil helper 'url' di controller agar tidak perlu mengaktifkannya di autoload
    }
    
	function index(){
		$data['user'] = $this->m_data->tampil_data()->result(); //menampilkan data user menggunakan function tampil_data yang ada di model m_data
		$this->load->view('v_tampil',$data); //memasukkan array data ke variabel dan memparsingnya ke dalam view v_tampil
    }
    
    //function untuk menampilkan v_input
    function tambah(){
        $this->load->view('v_input'); //view v_input adalah form yang digunakan untuk tempat input data
    }

    //function untuk memproses data yang ditambahkan pada form v_input
    function tambah_aksi(){

        //menangkap inputan dari form
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$pekerjaan = $this->input->post('pekerjaan');
 
        //menjadikan data yang ditangkap sebagai array
		$data = array(
			'nama' => $nama,
			'alamat' => $alamat,
			'pekerjaan' => $pekerjaan
            );
        
        //menginput array data, dan menyimpannya di tabel user
        $this->m_data->input_data($data,'user');
        //mengalihkan ke method index
		redirect('crud/index');
    }
    
    //function untuk hapus data
    function hapus($id){
        $where = array('id' => $id); //$id untuk menangkap id yang dikirim melalui url dari link hapus dan menjadikannya array
        $this->m_data->hapus_data($where,'user'); //mengembalikan array ke model m_data  dan menghapusnya dengan function hapus_data pada model m_data || $where berisi id dari data yg ingin dihapus
        redirect('crud/index');
    }

    //function untuk mengambil data yang akan diedit
    function edit($id){
        $where = array('id' => $id); //mengubah id menjadi array
        $data['user'] = $this->m_data->edit_data($where,'user')->result(); //mengambil data berdasarkan id dengan function edit_data() pada model m_data || result() untuk men-generate hasil query menjadi array
        $this->load->view('v_edit',$data); //memasukkan array data ke variabel dan memparsingnya ke dalam view v_edit
    }

    //function untuk update data
    function update(){

        //mengambil data dari form edit
        $id = $this->input->post('id');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $pekerjaan = $this->input->post('pekerjaan');
    
        //memasukkan data yang akan diupdate ke dalam variabel data
        $data = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'pekerjaan' => $pekerjaan
        );
    
        //penentu untuk data yang diupdate (id yg mana)
        $where = array(
            'id' => $id
        );
    
        //mengatur atau menghandle update data dengan function update_data pada model m_data
        $this->m_data->update_data($where,$data,'user');
        redirect('crud/index'); //kembali ke index setelah update data tersimpan
    }
}