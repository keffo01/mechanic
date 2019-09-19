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
					<header class="card text-center"><h2>Planilla de empleados</h2></header>
				<br>
				<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="TablaPlanilla">
					<thead class="thead-dark">
						<tr>
							<th class="th-sm">Fecha de pago</th>
							<th>Empleado</th>
							<th>Detalle</th>
							<th>AFP</th>
							<th>ISSS</th>
							<th>Otros descuentos</th>
							<th>Total descuentos</th>
							<th>Bonos</th>
							<th>Salario Final</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($planilla as $p) { ?>
							<tr>
								<td><?=$p->Fecha_pago?></td>
								<td><?=$p->Empleado_id?></td>
								<td><?=$p->Detalle?></td>
								<td><?=$p->AFP?></td>
								<td><?=$p->ISSS?></td>
								<td><?=$p->Descuentos?></td>
								<td><?=$p->Total_descuentos?></td>
								<td><?=$p->Bonos?></td>
								<td><?=$p->Total?></td>
							</tr>
						<?php }?>
					</tbody>
				</table>
				<div> 
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPlanilla">Nuevo pago</button>
				</div>
			</div>
		</div>
	</div>
				</div>
			</div>
		</div>
	</div>
</body>

	

<div class="modal fade" id="modalPlanilla">
		<div class="modal-dialog">
			<div class="modal-content" >
				<div class="modal-header">
					<div class="modal-title"><h3>Pago de planilla</h3></div>
					<button class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form method="POST" action="<?=base_url('Pago/GuardarPlanilla')?>">
						<div class="row" style="padding: 8px;">
							<div class="col-md-4">Fecha de pago</div>
							<div class="col-md-6"><input type="date" name="Fecha_pago" class="form-control"></div>
							
							<div class="col-md-3"></div>
						</div>
						<div class="row" style="padding: 8px;">
							<div class="col-md-4">Empleado</div>
							<div class="col-md-6"><select name="Empleado_id" class="form-control">
								<option value="">--Seleccione empleado--</option>
								<?php foreach ($empleado as $e ) { ?>
									<option value="<?=$e->Id_empleado?>"><?=$e->Nombres.' '.$e->Apellidos?></option>
								<?php } ?>
							</select></div>
							<div class="col-md-3"></div>
						</div>
						<div class="row" style="padding: 8px;">
							<div class="col-md-4">Detalle</div>
							<div class="col-md-6"><input type="text" name="Detalle" class="form-control"></div>
							
							<div class="col-md-3"></div>
						</div>
						<div class="row" style="padding: 8px;">
							<div class="col-md-4">Bonos</div>
							<div class="col-md-6"><input type="text" name="Bonos" class="form-control"></div>
							
							<div class="col-md-3"></div>
						</div>
						<div class="row" style="padding: 8px;">
							<div class="col-md-4">Descuentos</div>
							<div class="col-md-6"><input type="text" name="Descuentos" class="form-control"></div>
							
							<div class="col-md-3"></div>
						</div>
						<div class="modal-footer ">
							<button type="submit" class="btn btn-block btn-success">Guardar</button>

						</div>
					</form>
				</div>


			</div>
		</div>
	</div>
<?=$JS?>
</html>
