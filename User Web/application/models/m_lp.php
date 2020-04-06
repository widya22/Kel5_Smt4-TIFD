<?php

class M_lp extends CI_Model{
    public function tampil_admin()
    {
        return $this->db->get('tb_admin');
    }

    public function tampil_services()
    {
        return $this->db->get('tb_services');
    }

    public function tampil_produk()
    {
        return $this->db->get('tb_produk');
    }

}
