<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_bank extends CI_Model {

	public function add_bank($a=array())
	{	
		$this->db->insert('banks',$a);
	}
	
	//get bank admin dets
	public function get_admin_dets($uname){
		
		return $this->db->where('username',$uname)->get('sys_admin')->row();
	}
	
	
	public function get_bank_dets(){}
	public function block_bank(){}
	
	
	
	
	//bank login
	public function admin_login($login_dets){
		$a=$this->db->where($login_dets)->get('sys_admin');
		if($a->num_rows()==1){
			return true;
		} else {
			return false;
		}
	}
}
