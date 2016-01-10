<?php
if (!defined('BASEPATH')) exit("No direct script access allowed");
class Phonebook_con extends CI_Controller{
  public function index(){
	$data['contact_details']=$this->phonebook_model->contact_details();
	$data['title']='PhoneBook Home';
	$data['contact_info']='table';
	$this->load->view('contents/homepage',$data);
  }
  public function create_contact(){
  	$data['title']='Create Contact';
	$data['create']='create';
	$this->load->view('contents/homepage',$data);

  }
  public function contact_validation(){
  	$this->form_validation->set_rules('name', 'Name', 'required|is_unique[contact.contact_name]|min_length[4]|max_length[20]');
  	$this->form_validation->set_rules('number', 'Number', 'required|min_length[13]|max_length[16]');
  	$this->form_validation->set_rules('email', 'Email', 'valid_email');
  	$this->form_validation->set_message('is_unique', 'The given Name already exists.');
  	if ($this->form_validation->run()==FALSE) {
	   $data['create']='create';
	   $data['title']='Error';
	   $this->load->view('contents/homepage',$data);
  }

	 else{
	   $result=$this->phonebook_model->contact_insert();
       if ($result) {
        	redirect('Phonebook_con','refresh');
        } 
	 } 
  }
public function contact_delete(){

	$id=$_GET['var'];
	$delete=$this->phonebook_model->contact_delete($id);
	if ($delete) {
	  redirect('Phonebook_con','refresh');
	}
}

public function contact_edit(){
	$contact_id=$_GET['var'];
	$data['particular_id_contents']=$this->phonebook_model->particular_id_contents_values($contact_id);
	$data['title']='Edit Contact';
	$data['edit']='edit';

	$this->load->view('contents/homepage',$data);
}

public function edit_validation(){
	    $contact_id=$this->input->post('id');
		$this->form_validation->set_rules('newName', 'Name', 'required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('newNumber', 'Number', 'required|min_length[13]|max_length[16]');
		$this->form_validation->set_rules('newEmail', 'Email', 'valid_email');
		if ($this->form_validation->run()==FALSE) {
			$data['particular_id_contents']=$this->phonebook_model->particular_id_contents_values($contact_id);
	        $data['title']='Edit Contact';
	        $data['edit']='edit';
            $this->load->view('contents/homepage',$data);
	    }
	    else{
	    	$edit_results=$this->phonebook_model->update($contact_id);
	    	if ($edit_results) {
	    		redirect('Phonebook_con','refresh');
	    	}
	    }
	
	
}
	public function searchContact(){
		$search=$this->input->post('search');
		$data['contact_details']=$this->phonebook_model->searchContact($search);
		$data['title']='PhoneBook Home';
		$data['contact_info']='table';
		$this->load->view('contents/homepage',$data);
	}

	public function suggest(){
		$word=$this->input->post('searchWordValue');
		echo "Hello".$word;
	}

}




?>