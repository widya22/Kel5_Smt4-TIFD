<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	public function index()
	{
		$data['jenis'] = $this->m_form->get_jenis()->result();
		$data['dosen'] = $this->m_form->get_dosen()->result();

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
		$status			= $this->input->post('STATUS_SURAT');
		$tracking		= $this->input->post('TRAKING_SURAT');

		$data = array(
			'NIP'  				=> $nip,
			'ID_JENIS_SURAT'  	=> $jenis_surat,
			'NIM'				=> $nim,
			'NAMA_MITRA'  		=> $nama_mitra,
			'ALAMAT_MITRA'  	=> $alm_mitra,
			'TANGGAL'  			=> $tgl,
			'TANGGAL_PENGAJUAN' => $tgl_pengajuan,
			'STATUS_SURAT'  	=> $status,
			'TRAKING_SURAT'		=> $tracking,
		);

		$this->m_form->tambahsurat($data, 'surat');
		redirect('form');
	}
}
