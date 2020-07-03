<?php defined('BASEPATH') OR exit('No direct script access allowed');

use Restserver\Libraries\REST_Controller;

require APPPATH . '/libraries/REST_Controller.php';

class dosen extends REST_Controller {
    public function __construct() {
        parent::__construct();
        // Load Akun Model
        $this->load->model('api/DosenModel', 'a');
    } 

    public function index_get()
    {
        $dosen = $this->a->getDosen();
        if ($dosen){
            $this->response([
                'status' => true,
                'data' => $dosen
            ], REST_Controller::HTTP_OK);
        }
    }
}