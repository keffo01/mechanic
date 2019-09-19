<?php
/**
 * 
 */
class Abono extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Abono_model','AMD',TRUE);
	}

	public function index(){
		$cu = $this->AMD->GetCuenta();
		$ab = $this->AMD->showAbono();
		$content['cuenta'] = $cu;
		$content['Abono'] = $ab;
		$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
		$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
		$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
		$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
		$this->load->view('Abonos/Abono',$content);
	}

	public function GuardarAbono(){
		$Abono = array('Fecha_abono' => $this->input->post('Fecha_abono'),
						'Responsable' => $this->input->post('Responsable'),
						'Cantidad' => $this->input->post('Cantidad'),
						'Cuenta' => $this->input->post('Cuenta')
						 );
		$ga = $this->AMD->Save($Abono);
		redirect('Abono');
	}
}
?>