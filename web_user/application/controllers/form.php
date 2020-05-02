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
		$id_surat		= $this->input->post('ID_SURAT');
		$tgl			= $this->input->post('TANGGAL');
		$status			= $this->input->post('STATUS_SURAT');
		$jenis_surat	= $this->input->post('ID_JENIS_SURAT');
		$tgl_pengajuan	= $this->input->post('TANGGAL_PENGAJUAN');
		$nama_mitra		= $this->input->post('NAMA_MITRA');
		$alm_mitra		= $this->input->post('ALAMAT_MITRA');
		$nip			= $this->input->post('NIP');

		$data = array(
			'ID_SURAT'			=> $id_surat,
			'NIP'  				=> $nip,
			'ID_JENIS_SURAT'  	=> $id_surat,
			'NAMA_MITRA'  		=> $nama_mitra,
			'ALAMAT_MITRA'  	=> $alm_mitra,
			'TANGGAL'  			=> $tgl,
			'TANGGAL_PENGAJUAN' => $tgl_pengajuan,
			'STATUS_SURAT'  	=> $status,
		);

		$this->m_form->tambahsurat($data, 'surat');
		redirect('form');
	}
}
