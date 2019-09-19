<?php
/**
 * 
 */
class Login_model extends CI_model
{
	
	public function verifyUser($user,$pass){
		$this->db->select('*');
		$this->db->from('Usuario');
		$this->db->where('Nombre',$user);
		$this->db->where('Pass',$pass);
		$login = $this->db->get();

		return $login->row();
	}
}

 ?>