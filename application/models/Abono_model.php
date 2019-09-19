<?php
/**
 * 
 */
class Abono_model extends CI_model
{
	public function showAbono(){
		$this->db->select('*');
		$this->db->from('abono');
		$ab = $this->db->get();
		return $ab->result();
	}
	
public function Save($abono){
	$g = $this->db->insert('abono',$abono);
	if ($g) {
		return 'Exito al guardar';
	}else{
		return 'A ocurrido un error';
	}

}
public function GetCuenta(){
	$cuenta = $this->db->get('cuenta');
	return $cuenta->result();
}
}
?>