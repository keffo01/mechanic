<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Registro de ventas</title>
</head>
<body>
	<div class="row">
		<div class="col-md-2 col-xs-12">
			<?=$sidenav?>
		</div>
		<div  class="col-md-12 mx-auto col-xs-8">
			<div id="contenido">
				<?=$Navbar?>
				<br>
				<div class="container col-xs-12">
					<header class="card text-center"><h2>Compras de la empresa</h2></header>
					<br>
					<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="TablaCompras">
					<thead class="thead-dark">
						<tr>
							<th>Fecha</th>
							<th>No. Factura</th>
							<th>Monto</th>
							<th>Detalle</th>
							<th>Proveedor</th>
							<th>Factura</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($compra as $c) {?>
						<tr>
							<td><?=$c->Fecha_compra?></td>
							<td><?=$c->No_factura?></td>
							<td><?=$c->Monto_compra?></td>
							<td><?=$c->Descripcion?></td>
							<td><?=$c->Proveedor?></td>
							<td><button class="btn btn-info" data-toggle="modal" data-target="#ver" onclick="VerFacturaCompra(<?=$c->Id_compra?>);">Ver</button></td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</body>

<div class="modal fade" id="ver">
	<div class="modal-dialog">
		
		<div class="modal-content" >
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" >&times;</button>
			</div>
			<div class="modal-body" id="modalC">
			</div>	
		</div>
	
	</div>
</div>

</html>
<?=$JS;?>