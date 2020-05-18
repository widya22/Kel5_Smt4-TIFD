<?php

class M_form extends CI_Model
{
  public function cekkodebarang()
  {
    $query = $this->db->query("SELECT MAX(ID_SURAT) as id_surat from surat");
    $hasil = $query->row();
    return $hasil->id_surat;
  }

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

  function tambahsurat2($data2, $table)
  {
    $this->db->insert($table, $data2);
  }
}
