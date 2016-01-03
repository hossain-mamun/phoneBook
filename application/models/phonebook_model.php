<?php
if (!defined('BASEPATH')) exit("No direct script access allowed");
class Phonebook_model extends CI_Model{
	public function contact_details(){
		$this->db->select("*");
		$this->db->from('contact');
		$this->db->order_by("contact_id","desc");
		$query=$this->db->get();
		$results=$query->result();
		return $results;
	}

	public function contact_insert(){
		$attr=array(
	    'contact_name'=>ucwords($this->input->post('name')),
		'contact_number'=>$this->input->post('number'),
		'contact_email'=>$this->input->post('email'),
     );
		$insert=$this->db->insert('contact',$attr);
		if ($insert) {
			return true;
		}
		else{
			return false;
		}
	}
	public function contact_delete($id){
		$query=$this->db->delete('contact',array('contact_id' => $id));
		if ($this->db->affected_rows()==1) {
     	return TRUE;
        }
        else{
     	return FALSE;
        }

	}
}
?>