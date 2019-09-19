<?php 
/**
 * 
 */
class Inicio extends CI_Controller
{
	
	public function Index(){
		if ($this->session->userdata('Rol_id') != '') 
		{
			$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
			$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
			$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
			$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
			
			$this->load->view('Inicio',$content);
		}else{
			redirect(base_url());
		}
	}
}

?> 