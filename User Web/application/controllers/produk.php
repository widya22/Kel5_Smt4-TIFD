<?php
class Produk extends CI_Controller{
    public function index()
    {
        $data['produk'] = $this->m_produk->tampil_produk()->
        result();
        $this->load->view('Includes/header');
        $this->load->view('Produk/v_produk', $data);
		$this->load->view('Includes/sidebar');
		$this->load->view('Includes/footer');
    }

    public function tambah_produk()
    {
        $nama   = $this->input->post('nama_p');
        $harga  = $this->input->post('harga_p');
        $foto   = $_FILES['foto_p'];
        
        if($foto=''){

        }else {
            $config['upload_path']      = './assets/foto';
            $config['allowed_types']    = 'jpg|jpeg|png';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto_p')){
                echo "Gagal Mengunggah Data";
                die();
            }else{
                $foto=$this->upload->data('file_name');
            }
        }

        $data=array(
            'nama_p'   => $nama,
            'harga_p'  => $harga,
            'foto_p'   => $foto
        );

        $this->m_produk->input_data($data, 'tb_produk');
        redirect('produk/index');
    }

    public function hapus_produk($id)
    {
        $where = array ('id_p'=> $id);
        $this->m_produk->hapus_data($where, 'tb_produk');
        redirect ('produk/index');
    }

    public function lihat_produk($id)
    {
        $this->load->model('m_produk');
        $lihat_produk=$this->m_produk->lihat_data($id);
        $data['lihat_produk']=$lihat_produk;
        
        //view untuk melihat data lengkap produk
        $this->load->view('Includes/header');
        $this->load->view('produk/v_lihat_produk', $data);
        $this->load->view('Includes/sidebar');
        $this->load->view('Includes/footer');
    }
}