<?php 
 
class M_data extends CI_Model{
	
    function tampil_data(){
      //return $this->db->get('surat');
      $this->db->select('*');
    $this->db->from('surat');
    $this->db->where("traking_surat", "Menunggu Dosen");
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

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
}