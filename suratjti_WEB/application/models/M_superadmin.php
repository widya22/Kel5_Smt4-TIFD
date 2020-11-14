<?php 

class M_superadmin extends CI_Model{
  
  //MODEL DOSEN	
    function tampil_dataSuratDosen()
    {
      $this->db->select('*');
      $this->db->from('surat');
      $this->db->where("status_surat", "Menunggu Dosen");
      return $query=$this->db->get();
  }

  //MODEL ADMIN
  function tampil_data_admin(){
  	$hasil = $this->db->query("SELECT * FROM `admin` WHERE `ROLES` != 'super' ORDER BY `ID_ADMIN` ASC ");
		return $hasil->result();
      }

  function tampil_data_super_admin(){
    $id_admin=$_SESSION['id_admin'];
    $hasil = $this->db->query("SELECT * FROM `admin` WHERE `ID_ADMIN` = '$id_admin'");
    return $hasil->result();
      }

  function tampil_jenis_surat(){
    return $this->db->get('jenis_surat');
    }  

  function tampil_data_mhs(){
    $this->db->order_by('TANGGAL', 'DESC');
    return $this->db->get('user');
    }

  function tampil_data_suratPending(){
    //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->join('user', 'surat.NIM=user.NIM');
  $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
  $this->db->like("status_surat", 'Menunggu');

  return $query=$this->db->get();
      }

      function tampil_data_suratPendingTA(){
        //return $this->db->get('surat');
      $this->db->select('*');
      $this->db->from('surat');
      $this->db->join('user', 'surat.NIM=user.NIM');
      $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
      $this->db->like("status_surat", 'Menunggu');
      $this->db->like("id_jenis_surat", 'TA');
          if($_SESSION["id"]!= 'super'){
              $this->db->where("PRODI",$_SESSION['prodi']);
            }
    
      return $query=$this->db->get();
          }

  function tampil_data_suratTolak(){
  //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
  $this->db->like("status_surat", "Ditolak");
  $this->db->join('user', 'surat.NIM=user.NIM');
  return $query=$this->db->get();
      }
  
  function tampil_data_suratSelesai(){
  //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
  $this->db->like("status_surat", "Selesai");
  $this->db->join('user', 'surat.NIM=user.NIM');
  return $query=$this->db->get();
  }

  function tampil_data_suratDiambil(){
    //return $this->db->get('surat');
    $this->db->select('*');
    $this->db->from('surat');
    $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
    $this->db->like("status_surat", "Dapat Diambil");
    $this->db->join('user', 'surat.NIM=user.NIM');
    return $query=$this->db->get();
    }
  
  function tampil_data_suratDiProses(){
    //return $this->db->get('surat');
    $this->db->select('*');
    $this->db->from('surat');
    $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
    $this->db->like("status_surat", "Sedang Dalam Proses");
    $this->db->join('user', 'surat.NIM=user.NIM');
    return $query=$this->db->get();
    }


  function input_jenisSurat($data,$table){
		$this->db->insert($table,$data);
    }

  function simpan_js($id_jenis_surat,$jenis_surat){
        $hasil=$this->db->query("INSERT INTO jenis_surat (ID_JENIS_SURAT,JENIS_SURAT) VALUES ('$id_jenis_surat','$jenis_surat')");
        return $hasil;
    }
    

	function get_surat_by_kode($kobar)
	{
		$hsl = $this->db->query("SELECT * FROM detail_surat WHERE ID_SURAT='$kobar'");
		return $hsl->result();
  }

  public function cek_idSurat()
  {
      $query = $this->db->query("SELECT MAX(ID_SURAT) as idSurat from surat");
      $hasil = $query->row();
      return $hasil->idSurat;
  }
  
  // end model mahasiswa

	function bukti_surat1($id_sur){
		$this->db->where('ID_SURAT', $id_sur);
		return $this->db->from('surat')
		->join('jenis_surat', 'jenis_surat.ID_JENIS_SURAT=surat.ID_JENIS_SURAT')
		->get();
	}

	function bukti_surat2($id_sur){
		$this->db->where('ID_SURAT', $id_sur);
		return $this->db->from('detail_surat')->get();
  }
  
  function bukti_surat3($id_sur){
		$nim = $_SESSION["nim"];
		$this->db->where('NIM', "E411");
		return $this->db->from('user')
		->join('admin', 'user.PRODI=admin.PRODI')
		->get();
  }
  
  function jenis_surat($id){ //ambil data dari surat
    $this->db->where('ID_JENIS_SURAT', $id);
    $this->db->from('jenis_surat');
    return $this->db->get();
  }

  function cek_data($id, $id_db, $database){ //cek database
    $this->db->from($database);
    $this->db->where($id_db, $id);
    return $this->db->count_all_results();
  }

  function edit_admin($id){ //ambil data dari admin
    $this->db->where('ID_ADMIN', $id);
    $this->db->from('admin');
    return $this->db->get();
  }

}