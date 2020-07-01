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


	function surat_list(){
		$nim=$_SESSION["nim"];
		$hasil=$this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim'");
		return $hasil->result();
	}

	function surat_diproses(){
		$nim=$_SESSION["nim"];
		$hasil=$this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim' && surat.STATUS_SURAT='Diproses'");
		return $hasil->result();
	}

	function surat_diambil(){
		$nim=$_SESSION["nim"];
		$hasil=$this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim' && surat.STATUS_SURAT='Diambil'");
		return $hasil->result();
	}

	function surat_selesai(){
		$nim=$_SESSION["nim"];
		$hasil=$this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim' && surat.STATUS_SURAT='Selesai'");
		return $hasil->result();
	}

	function surat_gagal(){
		$nim=$_SESSION["nim"];
		$hasil=$this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim' && surat.STATUS_SURAT='Gagal'");
		return $hasil->result();
	}

	function get_surat_by_kode($kobar){
		$hsl=$this->db->query("SELECT * FROM detail_surat WHERE ID_SURAT='$kobar'");
		return $hsl->result();
	}

	function bukti_surat1($id_sur){
		$this->db->where('ID_SURAT', $id_sur);
		return $this->db->from('surat')->get();
	}

	function bukti_surat2($id_sur){
		$this->db->where('ID_SURAT', $id_sur);
		return $this->db->from('detail_surat')->get();
	}

}