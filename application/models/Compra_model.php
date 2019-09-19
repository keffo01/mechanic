<?php
/**
 * 
 */
class Compra_model extends CI_model
{
	public function ShowCompras(){

		$this->db->select('*');
		$this->db->from('compras');
		$compra= $this->db->get();
		return $compra->result();
	}

	public function GetFacturaCompra($id){
		$this->db->select('*');
		$this->db->from('compras');
		$this->db->where('Id_compra='.$id);
		$compra= $this->db->get();
		return $compra->row();
	}

	public function SaveCompra($compras){
		$SC = $this->db->insert('compras',$compras);
		if($SC){
			return 'Compra registrada';
		}else{
			return 'A ocurrido un error';
		}
	}
}
 ?>