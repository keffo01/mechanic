<?php

class Compra extends CI_controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Compra_model','CM',TRUE);
	}

	public function index(){
			$content['compra'] = $this->CM->ShowCompras();
			$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
			$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
			$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
			$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);

			$this->load->view('Compras/RegistroCompras',$content);
	}
	public function Nueva(){
			$content['Navbar'] = $this->load->view('contenidos/Navbar',FALSE,TRUE);
			$content['sidenav'] =$this->load->view('contenidos/Sidenav',FALSE,TRUE);
			$content['CSS'] =$this->load->view('contenidos/Links',FALSE,TRUE);
			$content['JS'] =$this->load->view('contenidos/Scripts',FALSE,TRUE);
			$this->load->view('Compras/NuevaCompra',$content);
	}
	public function Factura(){
		$fac['factura'] = $this->CM->GetFacturaCompra($_REQUEST['id']);
		$this->load->view('Compras/Factura',$fac);

	}
	public function GuardarCompra(){

		if($_FILES['FotoFactura']['name']>0){
			echo "Error".$_FILES['FotoFactura']['Error'].'<br>';
		}else{
			move_uploaded_file($_FILES['FotoFactura']['tmp_name'], "compras/".$_FILES['FotoFactura']['name']);
		}
		$dir = "compras/".$_FILES['FotoFactura']['name'];

		$compras = array('Fecha_compra' => $this->input->post('Fecha_compra'),
						 'No_factura' =>$this->input->post('Factura'),
						 'Monto_compra' => $this->input->post('Monto_compra'),
						 'Descripcion' => $this->input->post('Descripcion'),
						 'Proveedor' => $this->input->post('Proveedor'),
						 'Foto_factura' => $dir
						);
		$C = $this->CM->SaveCompra($compras);
		redirect('Compra');
	}
}
?>