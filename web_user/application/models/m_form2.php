<?php

class M_form2 extends CI_Model
{
  public function get_dosen()
  {
    return $this->db->get('dosen');
  }

  function tambahsurat($data, $table)
  {
    $this->db->insert($table, $data);
  }

  public function save_batch($data2)
  {
    return $this->db->insert_batch('detail_surat', $data2);
  }

  function tambahketua($data3, $table)
  {
    $this->db->insert($table, $data3);
  }
}
