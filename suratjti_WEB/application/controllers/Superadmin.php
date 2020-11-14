<?php

class superadmin extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('M_superadmin', 'super');
        $this->load->helper('url');
        $this->load->library('session');

        if($this->session->userdata('status') != "login0"){
            redirect(base_url().'login0');
        }

    }
    
    function index(){ //untuk super admin
        $data['admin'] = $this->super->tampil_data_admin();
        $data['superadmin'] = $this->super->tampil_data_super_admin();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/v_super_admin',$data);
        }
    
    function jnSrt(){
        $data['jenis_surat'] = $this->super->tampil_jenis_surat()->result();
        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/jenisSurat',$data);
    }

    function dtMhs(){
        $data['data_mahasiswa'] = $this->super->tampil_data_mhs()->result();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/dataMahasiswa', $data);
    }

    function dtSrtPd(){
        $data['dtSrtPd'] = $this->super->tampil_data_suratPending()->result();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/suratPending', $data);
    }

    function dtSrtProses(){
        $data['surat'] = $this->super->tampil_data_suratDiProses()->result();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/suratProses', $data);
    }

    function dtSrtDapatDiambil(){
        $data['surat'] = $this->super->tampil_data_suratDiAmbil()->result();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/suratDapatDiambil', $data);
    }

    function dtSrtTlk(){
        $data['surat'] = $this->super->tampil_data_suratTolak()->result();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/suratTolak', $data);
    }

    function dtSrtSls(){
        $data['surat'] = $this->super->tampil_data_suratSelesai()->result();

        $this->load->view('v_superadmin/sidebar_menu');
        $this->load->view('v_superadmin/suratSelesai', $data);
    }


    function detailSuratTolak($id)
    {
    $data['detail'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $data['kembali'] =base_url('superadmin/dtSrtTlk');
    $side['tolak'] = 'tolak';

    $this->load->view('v_superadmin/sidebar_menu', $side);
    $this->load->view('v_superadmin/detailSurat', $data);
    }

    function detailSuratSelesai($id)
    {
    $data['detail'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $data['kembali'] =base_url('superadmin/dtSrtSls');
    $side['selesai'] = 'selesai';

    $this->load->view('v_superadmin/sidebar_menu', $side);
    $this->load->view('v_superadmin/detailSurat', $data);
    }

    function detailSuratMenunggu($id)
    {
    $data['detail'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $data['kembali'] =base_url('superadmin/dtSrtPd');
    $side['menunggu'] = 'menunggu';

    $this->load->view('v_superadmin/sidebar_menu', $side);
    $this->load->view('v_superadmin/detailSurat', $data);
    }

    function detailSuratProses($id)
    {
    $data['detail'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $data['kembali'] =base_url('superadmin/dtSrtProses');
    $side['proses'] = 'proses';

    $this->load->view('v_superadmin/sidebar_menu', $side);
    $this->load->view('v_superadmin/detailSurat', $data);
    }

    function detailSuratDiambil($id)
    {
    $data['detail'] = $this->m_data->detaildata($id);
    $data['detailAnggota'] = $this->m_data->detailanggota($id);
    $data['kembali'] =base_url('superadmin/dtSrtDapatDiambil');
    $side['ambil'] = 'ambil';

    $this->load->view('v_superadmin/sidebar_menu', $side);
    $this->load->view('v_superadmin/detailSurat', $data);
    }

    function tambah_aksi(){ //tambah jenis nsuratr
        $id = $this->input->post('id_admin');
        $nama = htmlspecialchars($this->input->post('nama'));
        $prodi = $this->input->post('prodi');
        $pwd = htmlspecialchars($this->input->post('pwd'));
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
            redirect('superadmin');
        }else {
        $this->m_data->input_data($data,'admin');
        $this->session->set_userdata('tambah_sukses', 'ubah');
        redirect('superadmin');
        }
    }

    function edit_superadmin($id){
        $data["superadmin"] = $this->m_data->edit_admin($id)->result();
        $data["kembali"] =  base_url("superadmin");

        $this->load->view('v_superadmin/v_edit_superadmin', $data);
    }

}