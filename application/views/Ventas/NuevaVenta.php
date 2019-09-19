<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Nueva Venta</title>
</head>
<body>
	<div class="row">
		<div class="col-md-2 col-xs-3">
			<?=$sidenav?>
		</div>
		<div  class="col-md-12 mx-auto col-xs-9">
			<div id="contenido">
				<?=$Navbar?>
				<form method="POST" action="<?=base_url('Venta/GuardarVenta')?>" class="container " style="padding: 15px;" enctype="multipart/form-data">
					<div class="card" >
						<div class="card-header"><h2>Nueva Venta</h2></div>
						<fieldset class="card-content border" style="padding: 15px;">
							<div class="row" >
								<div class="col-md-1"></div>
							<div class="col-md-4">
								<label>Fecha de venta</label>
								<input type="date" name="Fecha_venta" class="form-control">
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<label >Monto</label>
								<input type="number" name="Monto_venta" class="form-control" placeholder="$0.00">
							</div>
							<div class="col-md-1"></div>
							</div>
							<div class="row" >
								<div class="col-md-1"></div>
							<div class="col-md-4">
								<label>Detalle de venta</label>
								<input type="text" name="Descripcion" class="form-control" placeholder="Descripción">
							</div>
							<div class="col-md-1"></div>
							<div class="col-md-4">
								<label >Cliente</label>
								<input type="text" name="Cliente" class="form-control" placeholder="Cliente">
							</div>
							<div class="col-md-1"></div>
							</div>
							<div class="row">
								<div class="col-md-1"></div>
								<div class="col-md-4">
									<label>No. Factura</label>
									<input type="text" name="Factura" class="form-control" placeholder="No. Factura">
								</div>
								<div class="col-md-1"></div>
								<div class="col-md-4">
										<label>Factura:</label><br>
										<input type="file" id="real-input" name="FotoFactura">
										<button type="button" class="browse-btn">
										factura
										</button>
										<span class="file-info">Upload a file</span>
								
								</div>
								<div class="col-md-1"></div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-4" style="margin-top: 12px;"> <input type="submit" class="btn btn-success btn-block" value="Guardar"></div>
								<div class="col-md-4"></div>
							</div>
						</fieldset>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
<?=$JS?>