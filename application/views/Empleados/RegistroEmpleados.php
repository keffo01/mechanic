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
					<header class="card text-center"><h2>Lista de Empleados</h2></header>
					<br>
					<table class="table table-striped table-bordered" cellspacing="0" width="100%" id="Empleados">
					<thead>
						<tr>
							<th>Nombres</th>
							<th>Apellidos</th>
							<th>Cargo</th>
							<th>Salario</th>
							
						</tr>
					</thead>
					<tbody>
						<?php foreach ($empleado as $e) {?>
						<tr>
							<td><?=$e->Nombres?></td>
							<td><?=$e->Apellidos?></td>
							<td><?=$e->Cargo?></td>
							<td><?=$e->Salario?></td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</body>
<?=$JS?>