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
  	$this->form_validation->set_rules('name', 'Name', 'required');
  	$this->form_validation->set_rules('number', 'Number', 'required|is_unique[contact.contact_number]|min_length[14]|max_length[16]');
  	$this->form_validation->set_message('is_unique', 'The given Number already exists.');
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

}




?>