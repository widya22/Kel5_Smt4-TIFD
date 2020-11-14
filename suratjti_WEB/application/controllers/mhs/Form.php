<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Form extends CI_Controller
{

	public function index()
	{
		$data['dosen'] = $this->m_form->get_dosen()->result();
		$data['jenis_surat'] = $this->m_form->get_js()->result();
		$this->load->model('m_data');
		$this->load->view('v_mhs/v_form', $data);
	}

	public function tambahsurat()
	{
		$id1= $this->m_data->cek_idSurat();
		$newId = substr($id1, 2,8);
		if ($id1==''){
			$id_surat='SR00000001';
		}else {

			$tambah = $newId + 1;
			if (strlen($tambah) == 1){
			$id_surat = "SR0000000" .$tambah;
			}
			else if (strlen($tambah) == 2){
				$id_surat = "SR000000" .$tambah;
			}
			else if(strlen($tambah) == 3){
				$id_surat = "SR00000" .$tambah;  
			}
			else if (strlen($tambah) == 4){
				$id_surat = "SR0000" .$tambah;
			}
			else if(strlen($tambah) == 5){
				$id_surat = "SR000" .$tambah;   
			}
			else if(strlen($tambah) == 6){
				$id_surat = "SR00" .$tambah;   
			}
			else if(strlen($tambah) == 7){
				$id_surat = "SR0" .$tambah;   
			}
			else if(strlen($tambah) == 8){
				$id_surat = "SR" .$tambah;   
			}
		}

		


		// $id_surat       = $this->input->post('ID_SURAT');
		$js             = $this->input->post('ID_JS');
		$nip            = $this->input->post('NIP');
		$nim_u          = $this->input->post('NIM_U');
		$nama_mitra     = htmlspecialchars($this->input->post('NAMA_MITRA'));
		$alm_mitra      = htmlspecialchars($this->input->post('ALAMAT_MITRA'));
		$tgl            = $this->input->post('TANGGAL');
		$tgl_pengajuan  = $this->input->post('TANGGAL_PENGAJUAN');
		$tracking       = $this->input->post('STATUS_SURAT');
		$nama_user      = $this->input->post('NAMA_USER');
		$ket            = htmlspecialchars($this->input->post('KETERANGAN'));

		date_default_timezone_set('Asia/Jakarta');

		$data = array(
			'ID_SURAT'          => $id_surat,
			'NIP'               => $nip,
			'NIM'               => $nim_u,
			'NAMA_MITRA'        => $nama_mitra,
			'ALAMAT_MITRA'      => $alm_mitra,
			'TANGGAL'           => $tgl,
			'TANGGAL_PENGAJUAN' => $tgl_pengajuan,
			'STATUS_SURAT'      => $tracking,
			'ID_JENIS_SURAT'    => $js,
			'KETERANGAN'        => $ket
		);

		$nim    = $_POST['nim'];
		$nama   = $_POST['nama'];

		$data2 = array();
		$index = 0; // Set index array awal dengan 0
		foreach ($nim as $datanim) { // Kita buat perulangan berdasarkan nim sampai data terakhir
			array_push($data2, array(
				'ID_SURAT'    => $id_surat,
				'NIM_ANGGOTA' => $datanim,
				'ANGGOTA_MHS' => $nama[$index],  // Ambil dan set data nama sesuai index array dari $index
			));
			$index++;
		}

		$sql = $this->m_form->save_batch($data2);
		$this->m_form->tambahsurat($data, 'surat');


		redirect('mhs/home/surat_saya');
	}
}
