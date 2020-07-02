<?php 
 
class InputModel extends CI_Model {
    
   public function view_surat()
    {
        $this->db->select('surat.ID_SURAT, surat.NIP,
         surat.ID_JENIS_SURAT, surat.NIM, 
         surat.NAMA_MITRA, surat.ALAMAT_MITRA, surat.TANGGAL, 
         surat.TANGGAL_PENGAJUAN, surat.STATUS_SURAT, surat.KETERANGAN');
         $this->db->from('surat');
         $this->db->join('dosen','surat.NIP = dosen.NIP ');
         $this->db->join('jenis_surat ','surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT; ');

         $query = $this->db->get();
         return $query;

    }
    public function insert($data)
    {
            $this->db->insert('surat',$data);


    }


}