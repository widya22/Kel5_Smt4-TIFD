<?php 
 
class DosenModel extends CI_Model {

    public function getDosen() {
        return $this->db->get('dosen')->result_array();
    }

}