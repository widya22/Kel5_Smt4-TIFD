<?php

class Overview extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
	}

	public function index()
	{
        // load view admin/overview.php
        $this->load->view('admin/overview');
    }
    public function tampil(){
		$data['konten'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
    }
    
    public function formtambah()
	{
        // load view admin/overview.php
        $this->load->view('form');
    }
    
    function tambah_aksi(){
		$judul = $this->input->post('judul');
		$fasilitas = $this->input->post('fasilitas');
		$harga = $this->input->post('harga');
 
		$data = array(
			'judul' => $judul,
			'fasilitas' => $fasilitas,
			'harga' => $harga
			);
		$this->m_data->input_data($data,'konten');
		redirect('index.php/admin/overview');
    }
}