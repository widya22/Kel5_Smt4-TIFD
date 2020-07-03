<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model
{
       
        public function index($id){
      
                return $this->db->get_where('surat' , ['NIM' => $id])->result_array();
            
        }
}