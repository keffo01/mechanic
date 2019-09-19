<?php
class Empleado extends CI_controller{
public function __construct(){
	parent::__construct();
	$this->load->model('Empleado_model','EM',TRUE);
}
public function index(){
			$e = $this->EM->ShowEmpleado();
			$content['empleado'] =$e;
			$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
			$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
			$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
			$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);

			$this->load->view('Empleados/RegistroEmpleados',$content);
}			
}
?>