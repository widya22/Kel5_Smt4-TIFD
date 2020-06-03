<?php 
 
class M_data extends CI_Model{
  
  //MODEL DOSEN	
    function tampil_data(){
      //return $this->db->get('surat');
      $this->db->select('*');
    $this->db->from('surat');
    $this->db->where("status_surat", "Menunggu Dosen");
    //$this->db->where("traking_surat", "Menunggu Admin");
    //$this->db->where("usertype","admin");
    return $query=$this->db->get();
        } 
    function input_data($data,$table){
		$this->db->insert($table,$data);
    }
    
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
  


  //MODEL ADMIN
  function tampil_data_mhs(){
		return $this->db->get('user');
    }
  function tampil_jenis_surat(){
    return $this->db->get('jenis_surat');
    }  
  function tampil_data_suratPending(){
    //return $this->db->get('surat');
    $this->db->select('*');
  $this->db->from('surat');
  $this->db->like("status_surat", 'Menunggu');
  //$this->db->where("traking_surat", "Menunggu Admin");
  //$this->db->where("usertype","admin");
  return $query=$this->db->get();
      }
  function tampil_data_suratTolak(){
  //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->where("status_surat", "Ditolak");
  //$this->db->where("usertype","admin");
  return $query=$this->db->get();
      }
  
  function tampil_data_suratSelesai(){
  //return $this->db->get('surat');
  $this->db->select('*');
  $this->db->from('surat');
  $this->db->where("status_surat", "Selesai");
  //$this->db->where("usertype","admin");
  return $query=$this->db->get();
  }    
  
  function input_jenisSurat($data,$table){
		$this->db->insert($table,$data);
    }   
}