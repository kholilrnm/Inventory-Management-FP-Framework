<?php 
 
class mlogin extends CI_Model{	
	function check($table,$where){		
		return $this->db->get_where($table,$where);
	}	
}