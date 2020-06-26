<?php 

class M_data extends CI_Model{
	function tampil_data(){
		return $this->db->get('user');
	}

	function input_data($data,$table){
		$this->db->insert($table,$data); //masukkan data ke database
	}

	function tampil_surat(){		
		$nim=$_SESSION["nim"];

		$this->db->order_by('TANGGAL', 'DESC');
		$this->db->where('NIM',$nim);
        return $query = $this->db->from('surat')
			->join('jenis_surat', 'jenis_surat.ID_JENIS_SURAT=surat.ID_JENIS_SURAT')	
		->get();
	}	

	function Tampil_surat2($status) 
    {
		$nim=$_SESSION["nim"];
		// print_r($status); untuk menampilkan $status

		$this->db->order_by('ID_SURAT', 'DESC'); //untuk mengurut data sql berdasarkan id surat
		$this->db->where('NIM',$nim); //pilih data spesidik berdasarkan nim
		$this->db->where('STATUS_SURAT',$status); //pilih bdata spesifik berdasarkan status surat
        return $query = $this->db->from('surat') //perintah join sql di ci
		  ->join('jenis_surat', 'jenis_surat.ID_JENIS_SURAT=surat.ID_JENIS_SURAT')
		->get(); //dapatkan hasil datanya
    } 
}