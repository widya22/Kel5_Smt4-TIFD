<?php

class M_produk extends CI_Model{
    public function tampil_produk()
    {
        return $this->db->get('tb_produk');
    }

    function input_data($data, $table)
    {
      $this->db->insert($table, $data);
    }

    function hapus_data($where, $table)
    {
      $this->db->where($where);
      $this->db->delete($table);
    }

    public function lihat_data($id=NULL)
    {
        $query=$this->db->get_where('tb_produk', array('id_p'=>$id))->row();
        return $query;
    }
}