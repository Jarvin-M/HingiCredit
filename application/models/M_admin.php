<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function add_admin($a=array())
	{	
		$this->db->insert('sys_admin',$a);
	}
	
	public function get_admin_dets($uname){
		
		return $this->db->where('username',$uname)->get('sys_admin')->row();
	}
	
	public function get_banks(){
		return $this->db->get('banks');
	}
	
	public function get_banks_activate(){
		return $this->db->where('status',1)->get('banks')->num_rows();
	}
	
	public function get_banks_blocked(){
		return $this->db->where('status',0)->get('banks')->num_rows();
	}
	
	public function block($id){
			$this->db->set('status',0)->where('id',$id)->update('banks');
			return true;
		}
		
		public function delete($id){
			$this->db->where('id',$id)->delete('banks');
			return true;
		}
		
		public function activate($id){
			$this->db->set('status',1)->where('id',$id)->update('banks');
			return true;
		}
	
	public function admin_login($login_dets){
		$a=$this->db->where($login_dets)->get('sys_admin');
		if($a->num_rows()==1){
			return true;
		} else {
			return false;
		}
	}
}
