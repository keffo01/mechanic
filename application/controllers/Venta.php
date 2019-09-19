<?php 
/**
 * 
 */
class Venta extends CI_controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Venta_model','VM',TRUE);
	}

	public function Index()
	{
		if ($this->session->userdata('Rol_id') != '') 
		{
			
			$v = $this->VM->Show();
			$content['venta'] = $v;
			$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
			$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
			$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
			$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
			
			$this->load->view('Ventas/RegistroVentas',$content);
		}else{
			redirect(base_url());
		}
	}
	public function Factura(){

		$f['factura'] =$this->VM->fact($_REQUEST['id']);
		$this->load->view('Ventas/Factura',$f);
	}
	
	public function Nueva(){
			$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
			$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
			$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
			$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
		$this->load->view('Ventas/NuevaVenta',$content);
	}

	public function GuardarVenta(){
 $imagen = $_FILES['FotoFactura'];
        if($_FILES['FotoFactura']['error']>0){
            echo "error: ".$_FILES['FotoFactura']['Error']."<br>";
        }else{
            move_uploaded_file($_FILES['FotoFactura']['tmp_name'],"upload/".$_FILES['FotoFactura']['name']);
        }

       $dir = "upload/".$_FILES['FotoFactura']['name'];

		$venta = array('Fecha_venta' => $this->input->post('Fecha_venta'),
						'Monto_venta' => $this->input->post('Monto_venta'),
						'Descripcion' => $this->input->post('Descripcion'),
						'No_factura' => $this->input->post('Factura'),
						'Foto_factura' => $dir,
						'Cliente' => $this->input->post('Cliente')
						 );

		$s = $this->VM->Save($venta);
		redirect('Venta');
	}
}

?>