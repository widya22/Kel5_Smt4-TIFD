<?php

class M_form extends CI_Model
{


  public function get_jenis()
  {
    return $this->db->get('jenis_surat');
  }

  public function get_dosen()
  {
    return $this->db->get('dosen');
  }

  function tambahsurat($data, $table)
  {
    $this->db->insert($table, $data);
  }

  function hapus_data($where, $table)
  {
    $this->db->where($where);
    $this->db->delete($table);
  }

  public function lihat_data($id = NULL)
  {
    $query = $this->db->get_where('tb_produk', array('id_p' => $id))->row();
    return $query;
  }
}
