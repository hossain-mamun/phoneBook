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
	    'contact_name'=>mb_convert_case($this->input->post('name'),MB_CASE_TITLE,"UTF-8"),
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
	public function particular_id_contents_values($contact_id){
       $this->db->select("*");
       $this->db->from('contact');
       $this->db->where('contact_id',$contact_id);
       $query=$this->db->get();
       $results=$query->result();
       return $results;
	}
	public function update($contact_id){
		$newname=mb_convert_case($this->input->post('newName'),MB_CASE_TITLE,"UTF-8");
		$newnumber=$this->input->post('newNumber');
		$newemail=$this->input->post('newEmail');
		$data=array(
              'contact_name'=>$newname,
              'contact_number'=>$newnumber,
              'contact_email'=>$newemail

			);
		$this->db->where('contact_id', $contact_id);
        $result=$this->db->update('contact', $data);
        return $result;
	}
}
?>