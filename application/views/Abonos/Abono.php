<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Planillas</title>
</head>
<body>
	<div class="row">
		<div class="col-md-2 col-xs-12">
			<?=$sidenav?>
		</div>
		<div  class="col-md-12 mx-auto col-xs-8">
			<div id="contenido">
				<?=$Navbar?>
				<div class="container col-xs-12" style="padding: 12px;">
					<header class="card text-center"><h2>Abonos a Mechanic 6:33</h2></header>
					<br>
					<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="TablaAbonos">
						<thead class="thead-dark">
							<tr>
								<th>Fecha</th>
								<th>Responsable</th>
								<th>Cantidad</th>
								<th>Cuenta</th>
								
							</tr>
						</thead>
						<tbody>
							<?php foreach($Abono as $p) { ?>
								<tr>
									<td><?=$p->Fecha_abono?></td>
									<td><?=$p->Responsable?></td>
									<td><?=$p->Cantidad?></td>
									<td><?=$p->Cuenta?></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
					<div class="col-sm-12"> 
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpago">Nuevo Abono</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalpago">
		<div class="modal-dialog">
			<div class="modal-content" >
				<div class="modal-header">
					<div class="modal-title"><h3>Abono a cuenta</h3></div>
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body" >
					<form method="post" action="<?=base_url('Abono/GuardarAbono')?>">
						<div class="row" style="padding: 8px;">

						<div class="col-md-5">Fecha del abono</div>
						<div class="col-md-6"><input type="date" name="Fecha_abono" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Responsable</div>
						<div class="col-md-6"><input type="text" name="Responsable" placeholder="Responsable del abono" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Cantidad</div>
						<div class="col-md-6"><input type="text" name="Cantidad" placeholder="Cantidad del abono" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Cuenta</div>
						<div class="col-md-6"><select class="form-control" name="Cuenta">
							<option value="0">Seleccione cuenta</option>
							<?php foreach ($cuenta as $c) {?>
							<option value="<?=$c->Id_cuenta?>"><?=$c->Banco;?></option>
							<?php } ?>
						</select></div>
						<div class="col-md-3"></div>
					</div>
				
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Guardar</button>
				</div>
					</form>
			</div>
		</div>
	</div>
</body>
<?=$JS?>
</html>
