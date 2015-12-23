<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<meta charset='UTF-8'>

	<!-- CSS bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap-theme.css">

	<!-- CSS custom -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/login.css">
</head>

<body>
<div id="page">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<h3> - Menu - </h3>
		<hr>
			<div class="row">
				<div class="col-md-3">
					<label for="sectores">Sectores: </label>	
					<button class="form-control" id="sectores" name="sectores" onclick="redirect_to(this)"></button>
				</div>
				<div class="col-md-3">
					<label for="turnos">Turnos: </label>
					<button class="form-control" id="turnos" name="turnos" onclick="redirect_to(this)"></button>
				</div>
				<div class="col-md-3">
					<label for="Cartel">Cartel: </label>
					<button class="form-control" id="cartel" name="cartel" onclick="redirect_to(this)"></button>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(
		function redirect_to(elem){
			window.location.href='<?php echo SITE_URL;?>index.php/goTo/'+elem;
		}
	);
</script>
</body>
</html>