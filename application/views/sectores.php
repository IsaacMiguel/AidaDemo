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

	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<ul class="nav navbar-nav navbar-right">
			<li><a href="#"><p>User / <?php echo $this->session->userdata('user');?></p></a></li>
			<li><a href="<?php echo SITE_URL;?>index.php/login/logout">Logout</a></li>
		</ul>
	</nav>

		<div class="row">
<!-- First row -->
			<div class="col-md-12"><!-- Col-md-12 -->
				<div class="panel panel-default">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<p class="tit">Seleccione su sector</p>
						</div>
					</div>
					<div class="row"><!-- Div Row -->
						<form method="post" action="sector/loadBoardSector">
							<div class="col-md-4 col-md-offset-4"><!-- Div col-md-6 -->
								<select  id='sector' name='sector'>
									<?php
										foreach ($data as $d) {
											echo "<option value=".$d->codigo.">".$d->nombre."</option>";
										}
									?>
								</select>
							</div><!-- ./Div col-md-6 -->
							<div class="col-md-3">
								<button type="submit" class="btn btn-primary"><p>Cargar</p></button>
							</div>
						</form>
					</div><!-- ./Div Row -->
				</div>
			</div><!-- ./Col-md-12 -->
		</div>
	</div><!-- ./Container -->
</body>
</html>