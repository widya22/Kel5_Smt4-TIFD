<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form2 extends CI_Controller
{

    public function index()
    {
        $data['dosen'] = $this->m_form2->get_dosen()->result();
        $data['jenis_surat'] = $this->m_form2->get_js()->result();
        $this->load->view('v_form2', $data);
    }

    public function tambahsurat()
    {
        $id_surat       = $this->input->post('ID_SURAT');
        $js             = $this->input->post('ID_JS');
        $nip            = $this->input->post('NIP');
        $nim_u          = $this->input->post('NIM_U');
        $nama_mitra     = $this->input->post('NAMA_MITRA');
        $alm_mitra      = $this->input->post('ALAMAT_MITRA');
        $tgl            = $this->input->post('TANGGAL');
        $tgl_pengajuan  = $this->input->post('TANGGAL_PENGAJUAN');
        $tracking       = $this->input->post('STATUS_SURAT');
        $nama_user      = $this->input->post('NAMA_USER');
        $ket            = $this->input->post('KETERANGAN');

        $data = array(
            'ID_SURAT'          => md5($id_surat),
            'NIP'               => $nip,
            'NIM'               => $nim_u,
            'NAMA_MITRA'        => $nama_mitra,
            'ALAMAT_MITRA'      => $alm_mitra,
            'TANGGAL'           => $tgl,
            'TANGGAL_PENGAJUAN' => $tgl_pengajuan,
            'STATUS_SURAT'      => $tracking,
            'ID_JENIS_SURAT'    => $js,
            'KETERANGAN'        => $ket
        );

        $nim    = $_POST['nim'];
        $nama   = $_POST['nama'];

        $data2 = array();
        $index = 0; // Set index array awal dengan 0
        foreach ($nim as $datanim) { // Kita buat perulangan berdasarkan nim sampai data terakhir
            array_push($data2, array(
                'ID_SURAT'    => md5($id_surat),
                'NIM_ANGGOTA' => $datanim,
                'ANGGOTA_MHS' => $nama[$index],  // Ambil dan set data nama sesuai index array dari $index
            ));
            $index++;
        }

        $sql = $this->m_form2->save_batch($data2);
        $this->m_form2->tambahsurat($data, 'surat');

        $data_session = array( //menginset session
			'surat_baru' => "surat_baru"
		);
        $this->session->set_userdata($data_session);
        
        redirect('home/surat_saya');
    }
}
