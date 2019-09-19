<?php
/**
 * 
 */
class Pago extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Pagos_model','PaM',TRUE);
	}

	public function index(){
		$tpla = $this->PaM->GetTotalPlanilla();
		$pa = $this->PaM->ShowPagos();
		$content['TotalPlanilla'] =$tpla;
		$content['pago'] = $pa;
		$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
		$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
		$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
		$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
		$this->load->view('Pagos/Pagos',$content);

	}

	public function Planillas(){
		
		$emp = $this->PaM->GetEmpleados();
		$pla = $this->PaM->ShowPlanilla();
		$content['empleado'] = $emp;
		$content['planilla'] = $pla;
		$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
		$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
		$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
		$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
		$this->load->view('Pagos/Planillas',$content);
	}

	public function GuardarPago(){
		$mes=date("m")-1;
		$total_pagos = ($this->input->post('Total_planilla')+$this->input->post('Energía')+$this->input->post('Agua')+$this->input->post('Establecimiento')+$this->input->post('Otros'));
		$pago = array('mes' => $mes,
			'año' => date("Y"),
			'Planillas' => $this->input->post('Total_planilla'),
			'Energía' => $this->input->post('Energía'),
			'Agua' => $this->input->post('Agua'),
			'Establecimiento' => $this->input->post('Establecimiento'),
			'Otros' => $this->input->post('Otros'),
			'Total' => $total_pagos
		);

		$this->PaM->SavePago($pago);
		redirect('Pago');
	}
	
	public function GuardarPlanilla(){
		$mes=date("m")-1;

		$bono = $this->input->post('Bonos');
		$salario = $this->input->post('Detalle');
		$Descuentos = $this->input->post('Descuentos');
		$Total_Salario = ($salario+$bono)-$Descuentos;
		
		$planilla = array('Fecha_pago' => $this->input->post('Fecha_pago'),
			'Empleado_id' => $this->input->post('Empleado_id'),
			'Detalle' => $this->input->post('Detalle'),
			'Descuentos' => $this->input->post('Descuentos'),
			'Bonos' => $this->input->post('Bonos'),
			'Total_descuentos'=> $Descuentos,
			'Mes_correspondiente' => $mes,
			'Total' => $Total_Salario
		);
		$this->PaM->SavePlanilla($planilla);
		redirect('Pago/Planillas');
	}
}
