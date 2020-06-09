<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	public function index()
	{
		$data['jenis_surat'] = $this->m_form->get_jenis()->result();
		$data['dosen'] = $this->m_form->get_dosen()->result();

		$dariDB = $this->m_form->cekkodebarang();
		// contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
		$nourut = substr($dariDB, 4, 4);
		$kodeBarangSekarang = $nourut + 1;
		$data = array('ID_SURAT' => $kodeBarangSekarang);

		$this->load->view('v_form', $data);
	}

	public function tambahsurat()
	{
		$nip			= $this->input->post('NIP');
		$jenis_surat	= $this->input->post('ID_JENIS_SURAT');
		$nim			= $this->input->post('NIM');
		$nama_mitra		= $this->input->post('NAMA_MITRA');
		$alm_mitra		= $this->input->post('ALAMAT_MITRA');
		$tgl			= $this->input->post('TANGGAL');
		$tgl_pengajuan	= $this->input->post('TANGGAL_PENGAJUAN');
		$tracking		= $this->input->post('TRAKING_SURAT');
		$nim_anggota	= $this->input->post('NIM_ANGGOTA');
		$anggota_mhs	= $this->input->post('ANGGOTA_MHS');
		$id_surat		= $this->input->post('id_surat');

		$data = array(
			'ID_SURAT'			=> $id_surat,
			'NIP'  				=> $nip,
			'ID_JENIS_SURAT'  	=> $jenis_surat,
			'NIM'				=> $nim,
			'NAMA_MITRA'  		=> $nama_mitra,
			'ALAMAT_MITRA'  	=> $alm_mitra,
			'TANGGAL'  			=> $tgl,
			'TANGGAL_PENGAJUAN' => $tgl_pengajuan,
			'TRAKING_SURAT'		=> $tracking,
		);

		$data2 = array(
			'ID_SURAT'			=> $id_surat,
			'ANGGOTA_MHS'		=> $anggota_mhs,
			'NIM_ANGGOTA'		=> $nim_anggota,
		);

		$this->m_form->tambahsurat($data, 'surat');
		$this->m_form->tambahsurat2($data2, 'detail_surat');
		redirect('form');
	}
}
