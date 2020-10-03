<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';

class loginuser extends REST_Controller {
    public function __construct() {
        parent::__construct();
        // Load Akun Model
        $this->load->model('api/Login', 'a');
    } 

    /**
    * Login Akun
    *------------------------------
    * @param: NIM
    * @param: password
    *------------------------------
    * @method : POST
    */
    public function index_post() {

        # Form Validation
        $this->form_validation->set_rules('NIM', 'Email', 'trim|required');
        $this->form_validation->set_rules('PASSWORD_MHS', 'Password', 'trim|required');
        if ($this->form_validation->run() == FALSE) {
            // Form Validation
            $message = array(
                'status' => false,
                'error' => $this->form_validation->error_array(),
                'message' => validation_errors()
            );
            $this->response($message, REST_Controller::HTTP_NOT_FOUND);
        } else {
            // Load Login Function
            $output = $this->a->akun_login($this->input->post('NIM'), $this->input->post('PASSWORD_MHS'));
            if(!empty($output) AND $output != FALSE) {

                // Load Authorization Token Library
                $this->load->library('Authorization_Token');

                // Generate Token
                
                $token_data['NAMA_MHS'] = $output->NAMA_MHS;
                $token_data['NIM'] = $output->NIM;
                $token_data['PRODI'] = $output->PRODI;
                $token_data['HP'] = $output->HP;
                $token_data['PASSWORD_MHS'] = $output->PASSWORD_MHS;
                $token_data['status'] = $output->status;

                $akun_token = $this->authorization_token->generateToken($token_data);

                $return_data = [
                    'NAMA_MHS' => $output->NAMA_MHS,
                    'NIM' => $output->NIM,
                    'PRODI' => $output->PRODI,
                    'HP' => $output->HP,
                    'PASSWORD_MHS' => $output->PASSWORD_MHS,
                    'status' => $output->status,
                    'token' => $akun_token,
                    'pesan' => "Selamat Datang",
                ];

                // Login Success
                $message = [
                    'status' => TRUE,
                    'data' => $return_data,
                    'message' => "Selamat Datang"
                ];
                $this->response($message, REST_Controller::HTTP_OK);
            } else {
                // LoginError
                $message = [
                    'status' => FALSE,
                    'message' => "NIM atau Password Salah"
                ];
                $this->response($message, REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }
}