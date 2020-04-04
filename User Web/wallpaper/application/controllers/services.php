<?php
class Services extends CI_Controller{
    public function index()
    {
        $data['services'] = $this->m_services->tampil_services()->
        result();
        $this->load->view('Includes/header');
        $this->load->view('Services/v_services', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }

    public function tambah_services()
    {
        $nama       =$this->input->post('nama_s');
        $ket        =$this->input->post('ket_s');
        $harga      =$this->input->post('harga_s');
        $ikon       =$this->input->post('ikon_s');

        $data=array(
            'nama_s'    => $nama,
            'ket_s'     => $ket,
            'harga_s'   => $harga,
            'ikon_s'   => $ikon
        );

        $this->m_services->tambah_data($data, 'tb_services');
        redirect('services/index');
        
    }

    public function hapus_services($id)
    {
        $where = array ('id_s' => $id);
        $this->m_admin->hapus_data($where, 'tb_services');
        redirect ('services/index');
    }

    public function edit_services($id)
    {
        $where = array ('id_s'=>$id);
        $data['services']=$this->m_services->edit_data($where, 'tb_services')->result();

        $this->load->view('Includes/header');
        $this->load->view('Services/v_edit_services', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }

    public function update_services()
    {
        $id        = $this->input->post('id_s');
        $nama      = $this->input->post('nama_s');
        $ket       = $this->input->post('ket_s');
        $harga     = $this->input->post('harga_s');
        $ikon      = $this->input->post('ikon_s');

        // kita simpan data yang didapat dari post diatas pada array
        $data=array(
            'nama_s'   => $nama,
            'ket_s'    => $ket,
            'harga_s'  => $harga,
            'ikon_s'  => $ikon
        );

        $where=array(
            'id_s'     =>$id
        );

        $this->m_services->update_data($where, $data, 'tb_services');
        redirect('services/index');
    }

    public function lihat_services($id)
    {
        $this->load->model('m_services');
        $lihat_services=$this->m_services->lihat_data($id);
        $data['lihat_services']=$lihat_services;

        $this->load->view('Includes/header');
        $this->load->view('Services/v_lihat_services', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }

}