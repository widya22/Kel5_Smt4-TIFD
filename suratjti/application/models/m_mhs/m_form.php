<?php

class M_form extends CI_Model
{
  public function get_dosen()
  {
    return $this->db->get('dosen');
  }

  public function get_surat()
  {
    return $this->db->get('surat');
  }

  public function get_js()
  {
    return $this->db->get('jenis_surat');
  }

  function tambahsurat($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function save_batch($data2)
  {
    return $this->db->insert_batch('detail_surat', $data2);
  }
}
