<script type="text/javascript" src="<?=base_url()?>assets/js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/DataTables/datatables.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/assets/css/fileinputs/js/fileinput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script src="sweetalert2.all.min.js"></script>


<script>
function openNav() {
  document.getElementById("sidebar").style.width = "250px";
  document.getElementById("contenido").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("sidebar").style.width = "0";
  document.getElementById("contenido").style.marginLeft= "0";
}
</script>
<script>
	function VerFacturaVenta(id){
		$('#modalV').load('<?=base_url()?>Venta/Factura?id='+id);
	}
</script>
<script>
	function VerFacturaCompra(id){
		$('#modalC').load('<?=base_url()?>Compra/Factura?id='+id);
	}
</script>
<script>
	$(document).ready(main);
 
var contador = 1;
 
function main(){
	$('.menu_bar').click(function(){
		// $('nav').toggle(); 
 
		if(contador == 1){
			$('nav').animate({
				left: '0'
			});
			contador = 0;
		} else {
			contador = 1;
			$('nav').animate({
				left: '-100%'
			});
		}
 
	});
 
};
</script>
<script>
	$(document).ready( function () {
    $('#Empleados').DataTable();
    $('#TablaVentas').DataTable();
    $('#TablaCompras').DataTable();
    $('#TablaAbonos').DataTable();
    $('#TablaPagos').DataTable();
    $('#TablaPlanilla').DataTable();
    $('.dataTables_length').addClass('bs-select');
} );
</script>
<!--script para file input -->
<script>
	const uploadButton = document.querySelector('.browse-btn');
const fileInfo = document.querySelector('.file-info');
const realInput = document.getElementById('real-input');

uploadButton.addEventListener('click', (e) => {
  realInput.click();
});

realInput.addEventListener('change', () => {
  const name = realInput.value.split(/\\|\//).pop();
  const truncated = name.length > 20 
    ? name.substr(name.length - 20) 
    : name;
  
  fileInfo.innerHTML = truncated;
});
</script>
<!--script para file input/ -->