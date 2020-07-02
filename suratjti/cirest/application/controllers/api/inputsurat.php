<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class inputsurat extends REST_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('api/InputModel');
    }

    
    public function index_post(){
            
                $NIP = $this->post('NIP');
                $ID_JENIS_SURAT = $this->post('ID_JENIS_SURAT');
                $NIM = $this->post('NIM');
                $NIP = $this->post('NIP');
                $NAMA_MITRA = $this->post('NAMA_MITRA');
                $ALAMAT_MITRA = $this->post('ALAMAT_MITRA');
                $TANGGAL = $this->post('TANGGAL');
                $TANGGAL_PENGAJUAN = $this->post('TANGGAL_PENGAJUAN');
                $STATUS_SURAT = "OK";
                $KETERANGAN = $this->post('KETERANGAN');

                $data = array(
                    'NIP' => $NIP,
                    'ID_JENIS_SURAT' => $ID_JENIS_SURAT,
                    'NIM' => $NIM,
                    'NIP' => $NIP,
                    'NAMA_MITRA' => $NAMA_MITRA,
                    'ALAMAT_MITRA' => $ALAMAT_MITRA,
                    'TANGGAL' => $TANGGAL,
                    'TANGGAL_PENGAJUAN' => $TANGGAL_PENGAJUAN,
                    'STATUS_SURAT' => $STATUS_SURAT,
                    'KETERANGAN' => $KETERANGAN
                );
                if($this->InputModel->insert($data)) {
                    // jika tidak pembayaran berhasil
                    $this->set_response([
                        'status' => true,
                        'message' => 'Gagal '
                    ], 200);
                } else {
                    // jika tidak pembayaran gagal
                    $this->set_response([
                        'status' => false,
                        'message' => 'Berhasil '
                    ], 401);
                }
    }
}