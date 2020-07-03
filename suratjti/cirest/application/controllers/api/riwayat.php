<?php
defined('BASEPATH') or exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . '/libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class riwayat extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('api/RiwayatModel', 'a');
    }

    public function index_get()
    {
        $id = $this->get('NIM');
        if ($id === null || $id === '') {
            $this->response([
                'status' => FALSE,
                'message' => 'Masukkan NIM Anda'
            ], REST_Controller::HTTP_NOT_FOUND);
        } else {
            $riwayat = $this->a->index($id);
            $this->response([
                'status' => TRUE,
                'data' => $riwayat
            ], REST_Controller::HTTP_OK);
        }
    }

    public function detail_post()
    {
        if ($this->post('id_surat')) {
            $id_surat = $this->post('id_surat');

            $detailRiwayat = $this->a->getDetailRiwayat($id_surat);

            if ($detailRiwayat) {
                $this->response([
                    'status' => TRUE,
                    'data' => $detailRiwayat
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status' => FALSE,
                    'message' => 'id_surat tidak ditemukan'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'id_surat tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
}
