<?php

class detailmodel extends CI_Model{
	
	
	public function insertdata($data){
         $this->load->database();
         return $this->db->insert('staff',$data);
	}


	public function getRecord(){
		$this->load->database();
		return $this->db->get('staff')->result();
		
	}

	public function editData($id){
		$this->load->database();
		$this->db->where('id',$id);
		return $this->db->get('staff')->result();
	}

	public function updateData($id,$data){
		$this->load->database();
		$this->db->where('id',$id);
		return $this->db->update('staff',$data);
	}

	public function deleteData($id){
		$this->load->database();
		$this->db->where("id",$id);
		return $this->db->delete("staff");
	}
}