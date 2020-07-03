<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Surat extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->database();
    }



    //Menampilkan data surat
    function index_get() {
        $id = $this->get('id_surat');
        if ($id == '') {
            $surat = $this->db->get('surat')->result();
        } else {
            $this->db->where('id_surat', $id);
            $surat = $this->db->get('surat')->result();
        }
        $this->response($surat, 200);
    }

    //function tambah data surat
    function index_post() {
        $data = array(
                    'id_surat'           => $this->post('id_surat'),
                    'nip'          => $this->post('nip'),
                    'id_jenis_surat'    => $this->post('id_jenis_surat'),
                    'nim'          => $this->post('nim'),
                    'nama_mitra'          => $this->post('nama_mitra'),
                    'alamat_mitra'          => $this->post('alamat_mitra'),
                    'tanggal'          => $this->post('tanggal'),
                    'tanggal_pengajuan'          => $this->post('tanggal_pengajuan'),
                    'status_surat'          => $this->post('status_surat'),
                    'keterangan'          => $this->post('keterangan'));
        $insert = $this->db->insert('surat', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //function tambah ubah surat
    function index_put() {
        $id = $this->put('id_surat');
        $data = array(
                    'id_surat'           => $this->put('id_surat'),
                    'nip'          => $this->put('nip'),
                    'id_jenis_surat'    => $this->put('id_jenis_surat'),
                    'nim'          => $this->put('nim'),
                    'nama_mitra'          => $this->put('nama_mitra'),
                    'alamat_mitra'          => $this->put('alamat_mitra'),
                    'tanggal'          => $this->put('tanggal'),
                    'tanggal_pengajuan'          => $this->put('tanggal_pengajuan'),
                    'status_surat'          => $this->put('status_surat'),
                    'keterangan'          => $this->put('keterangan'));
                    $this->db->where('id_surat', $id);
        $update = $this->db->update('surat', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
    //Masukan function selanjutnya disini
     //function hapus data surat
     function index_delete() {
        $id = $this->delete('id_surat');
        $this->db->where('id_surat', $id);
        $delete = $this->db->delete('surat');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
}


?>    