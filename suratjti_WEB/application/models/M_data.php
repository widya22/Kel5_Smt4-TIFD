<?php 
 
class M_data extends CI_Model{
  
  //MODEL DOSEN	
    function tampil_dataSuratDosen(){
      //return $this->db->get('surat');
      $this->db->select('*');
    $this->db->from('surat');
    $this->db->where("status_surat", "Menunggu Dosen");
    //$this->db->where("traking_surat", "Menunggu Admin");
    //$this->db->where("usertype","admin");
    return $query=$this->db->get();
        } 
    /*function input_data($data,$table){
		$this->db->insert($table,$data);
    }*/
    
    function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
    }
    
    function edit_data($where,$table){		
        return $this->db->get_where($table,$where);
    }
    function detail_data($where,$table){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('surat','user.NIM = surat.NIM');		
    return $this->db->get_where($table,$where);
  }
    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
  }
  function myjoin(){
    $this->db->select('*');
    $this->db->from('user');
    $this->db->join('surat','user.NIM = surat.NIM');
    $query = $this->db->get();
    foreach ($query->result() as $row) {
      echo $row->ID_SURAT;
      echo $row->NAMA_MHS;
      # code...
    }
  }
  public function detaildata($id) {
    $this->db->select('*');
    $this->db->from('surat');
    $this->db->join('user', 'user.nim = surat.nim');
    $this->db->join('dosen', 'dosen.nip = surat.nip');    
    $this->db->join('jenis_surat', 'jenis_surat.id_jenis_surat = surat.id_jenis_surat');
    $this->db->where('surat.id_surat', $id);
    return $this->db->get()->result();
  }
  public function detailanggota($id) {
    $this->db->select('*');
    $this->db->from('surat');
    $this->db->join('user', 'user.nim = surat.nim');    
    $this->db->join('detail_surat', 'detail_surat.id_surat = surat.id_surat');    
    $this->db->where('surat.id_surat', $id);
    return $this->db->get()->result();
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


  function tampil_data_mhs(){
    $this->db->where('PRODI', $_SESSION['prodi']);
    return $this->db->get('user');
    }
  function tampil_jenis_surat(){
    return $this->db->get('jenis_surat');
    }  
  function tampil_data_suratPending(){
    //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->join('user', 'surat.NIM=user.NIM');
  $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
  $this->db->like("status_surat", 'Menunggu');
  //$this->db->like("id_jenis_surat", 'MK');
      if($_SESSION["id"]!= 'super'){
          $this->db->where("PRODI",$_SESSION['prodi']);
        }

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
      if($_SESSION["id"]!= 'super'){
        $this->db->where("PRODI",$_SESSION['prodi']);
      }
  return $query=$this->db->get();
      }
  
  function tampil_data_suratSelesai(){
  //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
  $this->db->like("status_surat", "Selesai");
  $this->db->join('user', 'surat.NIM=user.NIM');
      if($_SESSION["id"]!= 'super'){
        $this->db->where("PRODI",$_SESSION['prodi']);
      }
  return $query=$this->db->get();
  }    
  function tampil_data_suratDiProsesMK(){
    //return $this->db->get('surat');
    $this->db->select('*');
    $this->db->from('surat');
    $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
    $this->db->like("status_surat", "Sedang Dalam Proses");
    $this->db->like("id_jenis_surat", "MK");
    $this->db->join('user', 'surat.NIM=user.NIM');
      if($_SESSION["id"]!= 'super'){
        $this->db->where("PRODI",$_SESSION['prodi']);
      }
    return $query=$this->db->get();
    }
    function tampil_data_suratDiProsesOBS(){
      //return $this->db->get('surat');
      $this->db->select('*');
      $this->db->from('surat');
      $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
      $this->db->like("status_surat", "Sedang Dalam Proses");
      $this->db->like("id_jenis_surat", "OBS");
      $this->db->join('user', 'surat.NIM=user.NIM');
        if($_SESSION["id"]!= 'super'){
          $this->db->where("PRODI",$_SESSION['prodi']);
        }
      return $query=$this->db->get();
      }
    function tampil_data_suratDiProsesTA(){
      //return $this->db->get('surat');
      $this->db->select('*');
      $this->db->from('surat');
      $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
      $this->db->like("status_surat", "Sedang Dalam Proses");
      $this->db->like("id_jenis_surat", "TA");
      $this->db->join('user', 'surat.NIM=user.NIM');
        if($_SESSION["id"]!= 'super'){
          $this->db->where("PRODI",$_SESSION['prodi']);
        }
      return $query=$this->db->get();
      }
      function tampil_data_suratDiProsesPKL(){
        //return $this->db->get('surat');
        $this->db->select('*');
        $this->db->from('surat');
        $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
        $this->db->like("status_surat", "Sedang Dalam Proses");
        $this->db->like("id_jenis_surat", "PKL");
        $this->db->join('user', 'surat.NIM=user.NIM');
          if($_SESSION["id"]!= 'super'){
            $this->db->where("PRODI",$_SESSION['prodi']);
          }
        return $query=$this->db->get();
        }
    function tampil_data_suratDapatDiambil(){
      //return $this->db->get('surat');
      $this->db->select('*');
      $this->db->from('surat');
      $this->db->order_by('TANGGAL_PENGAJUAN', 'DESC');
      $this->db->like("status_surat", "Dapat Diambil");
      $this->db->join('user', 'surat.NIM=user.NIM');
      if($_SESSION["id"]!= 'super'){
        $this->db->where("PRODI",$_SESSION['prodi']);
      }
      return $query=$this->db->get();
      }
  function input_jenisSurat($data,$table){
		$this->db->insert($table,$data);
    }

  function simpan_js($id_jenis_surat,$jenis_surat){
        $hasil=$this->db->query("INSERT INTO jenis_surat (ID_JENIS_SURAT,JENIS_SURAT) VALUES ('$id_jenis_surat','$jenis_surat')");
        return $hasil;
    }
    
    
  function update_tolak($alasan,$ids){
        $hasil=$this->db->query("UPDATE `surat` SET `STATUS_SURAT` = 'DiTolak- $alasan' WHERE `surat`.`ID_SURAT` = '$ids';");
        return $hasil;
    }
    
  function search($search){
    $hasil=$this->db->query("SELECT *, jenis_surat FROM surat INNER JOIN jenis_surat ON surat.ID_JENIS_SURAT 
    = jenis_surat.ID_JENIS_SURAT WHERE surat.NIM='$search' OR jenis_surat.JENIS_SURAT='$search'");
   
        return $hasil;

  }
    //MODEL MAHASISWA
    function tampil_data()
	{
		return $this->db->get('user');
	}

	function input_data($data, $table)
	{
		$this->db->insert($table, $data); //masukkan data jenis surat ke database
  }

  function update_jensu_data( $where, $data, $table)
	{
    $this->db->where($where);
    $this->db->update($table, $data); //update data jenis surat ke database
	}

	function tampil_surat()
	{
		$nim = $_SESSION["nim"];

		$this->db->order_by('TANGGAL', 'DESC');
		$this->db->where('NIM', $nim);
		return $query = $this->db->from('surat')
			->join('jenis_surat', 'jenis_surat.ID_JENIS_SURAT=surat.ID_JENIS_SURAT')
			->get();
	}

	function Tampil_surat2($status)
	{
		$nim = $_SESSION["nim"];
		// print_r($status); untuk menampilkan $status

		$this->db->order_by('ID_SURAT', 'DESC'); //untuk mengurut data sql berdasarkan id surat
		$this->db->where('NIM', $nim); //pilih data spesidik berdasarkan nim
		$this->db->where('STATUS_SURAT', $status); //pilih bdata spesifik berdasarkan status surat
		return $query = $this->db->from('surat') //perintah join sql di ci
			->join('jenis_surat', 'jenis_surat.ID_JENIS_SURAT=surat.ID_JENIS_SURAT')
			->get(); //dapatkan hasil datanya
	}


	function surat_list()
	{
    $nim = $_SESSION["nim"];
		$hasil = $this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim' ORDER BY TANGGAL DESC");
		return $hasil->result();
	}

	function surat_diproses()
	{
		$nim = $_SESSION["nim"];
		$hasil = $this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
								WHERE surat.NIM= '$nim' && surat.STATUS_SURAT='Sedang Dalam Proses'  
                ORDER BY TANGGAL DESC");
		return $hasil->result();
	}

	function surat_diambil()
	{
		$nim = $_SESSION["nim"];
		$hasil = $this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
                WHERE surat.NIM= '$nim' && surat.STATUS_SURAT='Dapat Diambil'
                ORDER BY TANGGAL DESC");
		return $hasil->result();
	}

	function surat_selesai()
	{
		$nim = $_SESSION["nim"];
		$hasil = $this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
                WHERE surat.NIM= '$nim' && substring(surat.STATUS_SURAT, 1,8 )='Selesai'
                ORDER BY TANGGAL DESC");
		return $hasil->result();
	}

	function surat_gagal()
	{
		$nim = $_SESSION["nim"];
		$hasil = $this->db->query("SELECT * FROM surat JOIN jenis_surat 
								ON surat.ID_JENIS_SURAT=jenis_surat.ID_JENIS_SURAT 
                WHERE surat.NIM= '$nim' && substring(surat.STATUS_SURAT, 1,8 )='DiTolak'
                ORDER BY TANGGAL DESC");
		return $hasil->result();
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