<?php
/**
 * 
 */
class Login extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model', 'LGMD',TRUE);
	}

	public function index(){
		switch ($this->session->userdata('Rol_id')) {
			case '':
				$content['error'] = $this->session->flashdata('Error');
				$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
				$this->load->view('Login',$content);
				break;
			
			case '1':
			redirect(base_url().'Inicio');
				break;
		}
		

	}
	Public function Sigin(){
		$user = $this->input->post('user');
		$pass = $this->input->post('pass');
		$sigIn = $this->LGMD->verifyUser($user,$pass);
		if($sigIn){
			$access = array('Logueado' => TRUE,
							'Id_usuario' => $sigIn->Id_usuario,
							'Nombre' => $sigIn->Nombre,
							'Rol_id' => $sigIn->Rol_id 
						);
			$this->session->set_userdata($access);
			$this->index();
		}else{
			$this->session->set_flashdata('Error','<div class="border border-danger" >Nombre de usuario o contraseña incorrectos</div>');
			redirect(base_url().'Login');
		}
	}
	public function Logout(){
		$this->session->sess_destroy();
		redirect(base_url().'Login');
	}

}
?>