<?php 
class Empleado_model extends CI_model{

	public function ShowEmpleado(){
		$this->db->select('*');
		$this->db->from('empleado');
		$em = $this->db->get();
		return $em->result();
	}
}
?>