<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index($view=null, $page_data=null)
	{	
	
		if(!$this->loggedin()){ 
			redirect("home");
			
		}else{
			$this->load->model('M_admin');
			$data['title']="Admin | HingiCredit";
			$data['author']="don brians";
			$data['bactive']=$this->M_admin->get_banks_activate();
			$data['bblocked']=$this->M_admin->get_banks_blocked();
			
			
			if(isset($view)){
				$data['view']=$view;
				$data['page_data']=$page_data;
			} else {
				$data['view']=null;
				$data['page_data']=null;
			}
			
			$this->load->view('head',$data);
			$this->load->view('sysadmin/admin');
		}
	}
	public function financial(){
		$a=$this->load->model('M_admin');//->	get_banks();
		$a=$this->M_admin->	get_banks()->result_array();
		$view="list_financial";
		$this->index($view,$a);
	}
	
	public function accounts($meth,$id){
		$a=$this->load->model('M_admin');
		switch($meth){
			case "delete": $this->M_admin->delete($id); redirect('admin/financial','refresh'); break;
			case "block": $this->M_admin->block($id); redirect('admin/financial','refresh'); break;
			case "activate": $this->M_admin->activate($id); redirect('admin/financial','refresh'); break;
			default: break;
		}
	}
	
	public function loggedin(){
		if($this->session->userdata("ctrl","ad_id","type","role","username")){
			return true;
		} else{
			return false;
		}
	}
	
	public function logout(){
		$session_array=array(
					'ctrl',
					'ad_id',
					'type',
					'role',
					'username'
				);
		$this->session->unset_userdata($session_array);
		$this->index();
	}
}
