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
				<div class="panel panel-default">
					<div class="row">
						<h1>Seleccione su sector</h1>
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