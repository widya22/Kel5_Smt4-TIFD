<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';

// use namespace
use Restserver\Libraries\REST_Controller;

class data_user extends REST_Controller{

    public function __construct(){
        parent::__construct();
        $this->load->model('api/Model_user' , 'user');
    }
    public function index_get()
    {
        $id = $this->get('NIM');
        
     
        $user = $this->user->index($id);
 
        if ($user) {
            $this->response([
                'status' => TRUE,
                'data' => $user
            ], REST_Controller::HTTP_OK);
        }else {
            $this->response([
                'status' => FALSE,
                'message' => 'User Tidak Ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_put() {
        if($this->put('NIM')) {
            $nim = $this->put('NIM');
            $password_lama = $this->put('password_lama');
            $password_new = $this->put('password_new');
            $password_hash = md5($password_new);

            $user = $this->db->get_where('user', ['NIM' => $nim])->row_array();
            if($user){
                if(md5($password_lama) == $user['PASSWORD_MHS']) {
                    $this->db->set('PASSWORD_MHS', $password_hash);
                    $this->db->where('NIM', $nim);

                    if($this->db->update('user')) {
                        // jika berhasil update
                        $this->set_response([
                            'status' => true,
                            'message' => 'Berhasil mengupdate password'
                        ], 200);
                    } else {
                        // jika gagal update
                        $this->set_response([
                            'status' => false,
                            'message' => 'Gagal mengupdate password'
                        ], 401);
                    }
                } else {
                    // jika password lama salah
                    $this->set_response([
                        'status' => false,
                        'message' => 'Password lama tidak sesuai'
                    ], 200);
                }
            } else {
                // jika tidak ada user dengan id 
                $this->set_response([
                    'status' => false,
                    'message' => 'User could not be found'
                ], 404);
            }
        } else {
            // jika tidak ada parameter id
            $this->set_response([
                'status' => false,
                'message' => 'User could not be found'
            ], 404);
        }
    }
    
}