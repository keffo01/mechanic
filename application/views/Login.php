<!DOCTYPE html>
<html lang="en">
<head>
	<?=$CSS?>
	<meta charset="UTF-8">
	<title>Mechanic 6:33</title>
</head>
<body>
	<br><br>

	<div class="row">
		<div class="col-md-4 col-sm-12 bg-black" style="height: 700px; margin-top: -50px;">
			<div class="mx-auto" style="margin-top: 20px;">
					<img src="<?=base_url()?>assets/img/lion-logo.png">
				</div>
			<div style="margin-top: 30px;">
					<form method="post" action="<?=base_url()?>Login/Sigin">
			<h3 class="text-light text-center">Iniciar sesión</h3>
					<div class="col-sm-8 mx-auto" style="padding: 12px;">
						<input type="text" name="user" id="user" placeholder="Usuario" class="form-control">
					</div>
					<div class="col-sm-8 mx-auto" style="padding: 12px;">
						<input type="password" name="pass" id="pass" placeholder="Pass" class="form-control">
					</div>
					<?=$error;?>
					<div class="col-sm-7 mx-auto "style="padding: 12px;">
						<button type="submit" class="btn btn-warning"><strong>Iniciar Sesión</strong></button>
					</div>
			</form>
			</div>
		</div>
		<div class="col-md-8" style="margin-top: -50px; background-image: url('assets/img/torno.gif'); background-repeat: no-repeat; background-size: cover;" id="imgLogin"></div>
	</div>
</body>
</html>
