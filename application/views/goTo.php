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

<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="#"><p>User / <?php echo $this->session->userdata('user');?></p></a></li>
		<li><a href="<?php echo SITE_URL;?>index.php/login/logout"><p>Logout</p></a></li>
	</ul>
</nav>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<h1> - Menu - Ir a:</h1>	
				</div>
			</div>
		<hr>
			<div class="row">
				<div class="col-md-3 col-md-offset-1">
					<button class="btn btn-primary" type="button" id="sectores" name="sectores" onclick="redirect_to(this.id)"><p>Sectores</p></button>
				</div>
				<div class="col-md-3">
					<button class="btn btn-primary" type="button" id="turnos" name="turnos" onclick="redirect_to(this.id)"><p>Turnos</p></button>
				</div>
				<div class="col-md-3">
					<button class="btn btn-primary" type="button" id="cartel" name="cartel" onclick="redirect_to(this.id)"><p>Cartelera</p></button>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="<?php echo SITE_URL;?>public/js/jquery-1.11.3.js"></script>
<script type="text/javascript">
	function redirect_to(elem){
		window.location.href='<?php echo SITE_URL;?>index.php/gotosector/'+elem;
	}
</script>
</body>
</html>