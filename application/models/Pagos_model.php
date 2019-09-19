<?php
class Pagos_model extends CI_model{

	public function ShowPagos(){

		$this->db->select('*');
		$this->db->from('pagos');
		$pago = $this->db->get();
		return $pago->result();
	}

	public function ShowPlanilla(){

		$this->db->select('*');
		$this->db->from('planilla');
		$planilla = $this->db->get();
		return $planilla->result();
	}

	public function SavePago($pago){
		$sp = $this->db->insert('pagos',$pago);
		if ($pago) {
		return 'Guardado exitoso';
		}else{
			return 'A ocurrido un error';
		}
	}

	public function SavePlanilla($planilla){
		$sp = $this->db->insert('planilla',$planilla);
		if ($sp) {
			return 'Guardado exitoso';
		}else {
			return 'A ocurrido un error';
		}
	}

	public function GetEmpleados(){
		$em = $this->db->get('empleado');
		return $em->result();
	}

	public function GetTotalPlanilla(){
		$mes=date("m")-1;
		$this->db->select('SUM(planilla.Total) as Total,Mes_correspondiente');
		$this->db->from('planilla');
		$this->db->where('Mes_correspondiente='.$mes);
		$GTP = $this->db->get();
		return $GTP->row();
	}
}