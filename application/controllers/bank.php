<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class bank extends CI_Controller {

	public function index()
	{	
	
		//if(!$this->loggedin()){ redirect("home/index");}
		
			$data['title']="Admin | HingiCredit";
			$data['author']="don brians";
			
			$this->load->view('head',$data);
			$this->load->view('sysadmin/admin');
		
	}
	
	
	public function create($method=null){
		if($method=="add"){
			$add_dets=array(
				'name'=>$this->check_input($this->input->post('name')),
				'Location'=>$this->check_input($this->input->post('loc')),
				'Contact'=>$this->check_input($this->input->post('cont')),
				'email'=>$this->check_input($this->input->post('email')),
				'password'=>sha1($this->check_input($this->input->post('pwd'))),
				'tin'=>$this->check_input($this->input->post('tin'))
				
			);
			
			$this->load->model('M_bank');
			$this->M_bank->add_bank($add_dets);
			
		}
	
		$this->load->view('head');
		$this->load->view('bank/create');
	}
	
	
	public function loggedin(){
		if($this->session->userdata("ctrl","b_id","type","role","email")){
			return true;
		} else{
			return false;
		}
	}
	
	public function check_input($input){
		$output=htmlentities(stripslashes($input));
		return $output;
	}
}
