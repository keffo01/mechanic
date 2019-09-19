<?php
/**
 * 
 */
class Venta_model extends CI_model
{

public function Show(){
	$this->db->select('*');
	$this->db->from('Ventas');
	$venta = $this->db->get();
	return $venta->result();
}
public function fact($id){

	$this->db->select('*');
	$this->db->from('Ventas');
	$this->db->where('Id_venta='.$id);
	$venta = $this->db->get();
	return $venta->row();
	}	
	
public function Save($saving){

$saved = $this->db->insert('Ventas',$saving);

if($saved){
	return 'Registro guardado';
}else{
	return 'A ocurrido un error';
}

}

}
 ?>