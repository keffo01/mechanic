<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Pagos de la empresa</title>
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
					<header class="card text-center"><h2>Pagos de Mechanic 6:33</h2></header>
					<br>
					<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="TablaPagos">
						<thead class="thead-dark">
							<tr>
								<th>Mes</th>
								<th>Año</th>
								<th>Total de planillas</th>
								<th>Total Electricidad</th>
								<th>Total Agua</th>
								<th>Total Establecimiento</th>
								<th>Otros</th>
								<th>Total de pagos</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($pago as $p) { ?>
								<tr>
									<td><?=$p->mes?></td>
									<td><?=$p->año?></td>
									<td><?=$p->Planillas?></td>
									<td><?=$p->Energía?></td>
									<td><?=$p->Agua?></td>
									<td><?=$p->Establecimiento?></td>
									<td><?=$p->Otros?></td>
									<td><?=$p->Total?></td>

								</tr>
							<?php }?>
						</tbody>
					</table>
					<div> <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalpago">Nuevo pago</button></div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalpago">
		<div class="modal-dialog">
			<div class="modal-content" >
				<div class="modal-header">
					<div class="modal-title"><h3>Pagos de la empresa</h3></div>
					<button class="close" data-dismiss="modal">&times;</button>

				</div>
				<div class="modal-body" >
					<form method="POST" action="<?=base_url('Pago/GuardarPago')?>">
						<div class="row">
							<div class="col-md-5">Mes correspondiente</div>
							<div class="col-md-6"><input type="text" name="Total_planilla" class="form-control" value="<?=$TotalPlanilla->Mes_correspondiente?>" id="mes" readonly=""></div>
						</div>
						
								
						<div class="row" style="padding: 8px;">
							<div class="col-md-5">Total de planillas del mes</div>
							<div class="col-md-6"><input type="text" name="Total_planilla" class="form-control" value="<?=$TotalPlanilla->Total?>" readonly=""></div>
							
							<div class="col-md-3"></div>
						</div>
					
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Electricidad</div>
						<div class="col-md-6"><input type="text" name="Energía" placeholder="Cantidad del recibo" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Agua</div>
						<div class="col-md-6"><input type="text" name="Agua" placeholder="Cantidad del recibo" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Establecimiento</div>
						<div class="col-md-6"><input type="text" name="Establecimiento" placeholder="Cantidad del recibo" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					<div class="row" style="padding: 8px;">

						<div class="col-md-5">Otros</div>
						<div class="col-md-6"><input type="text" name="Otros" placeholder="Cantidad extra" class="form-control"></div>
						<div class="col-md-3"></div>
					</div>
					
			
				<div class="row" style="padding: 8px;">
					<div class="col-md-5">Motivo de otros gastos</div>
					<div class="col-md-6"><input type="text" name="MOG" placeholder="Motivo de los gastos extra" class="form-control"></div>
					<div class="col-md-2"></div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
<?=$JS?>
</html>
