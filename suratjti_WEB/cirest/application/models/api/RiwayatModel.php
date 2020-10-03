<?php

class RiwayatModel extends CI_Model
{
    public function index($id = null)
    {
        return $this->db->get_where('surat', ['NIM' => $id])->result_array();
    }

    public function getDetailRiwayat($id_surat)
    {
        $query = "SELECT surat.ID_SURAT, detail_surat.ANGGOTA_MHS, detail_surat.NIM_ANGGOTA,
         dosen.NIP, dosen.NAMA_DOSEN, jenis_surat.JENIS_SURAT, surat.NAMA_MITRA, surat.ALAMAT_MITRA,
          surat.TANGGAL, surat.TANGGAL_PENGAJUAN, surat.STATUS_SURAT, surat.KETERANGAN FROM surat

        JOIN detail_surat ON surat.ID_SURAT = detail_surat.ID_SURAT
        JOIN dosen ON surat.NIP = dosen.NIP
        JOIN jenis_surat ON surat.ID_JENIS_SURAT = jenis_surat.ID_JENIS_SURAT
        
        WHERE surat.ID_SURAT = '$id_surat'";

        return $this->db->query($query)->result_array();
    }
}
