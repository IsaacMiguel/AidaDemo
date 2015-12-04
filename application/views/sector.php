<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aida Turnos</title>

	<!-- CSS bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap-theme.css">

	<!-- CSS custom -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/sector.css">

</head>
<body>
	<div id="page"><!-- Container -->
		<div class="row">
<!-- First row -->
			<div class="col-md-12"><!-- Col-md-12 -->
				<div class="row">
					<h1><?php echo $data->nombre?></h1>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-1">
						<button class="btn btn-primary">UP</button>
					</div>
					<div class="col-md-2">
						<p>ANTERIOR</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-4">
						<div class="panel panel-default">
							<div class="panel-body">
								<p><?php echo $data->turnoul?></p>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<button class="btn btn-success">LLAMAR</button>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2 col-md-offset-1">
						<button class="btn btn-primary">DOWN</button>
					</div>
					<div class="col-md-2">
						<p>PROXIMO</p>
					</div>
				</div>
			</div><!-- ./Col-md-12 -->
		</div>
	</div><!-- ./Container -->
</body>
</html>