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
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/main.css">

</head>
<body>
	<div id="page"><!-- Container -->
		<div class="row">
			<div class="col-md-12"><!-- Col-md-12 -->
				<div class="row"><!-- Div Row -->
					<?php foreach ($data as $d) {
						echo '<div class="col-md-6 sector"><!-- Div col-md-6 -->';
						echo '<div class="panel panel-default panelSector">';
						echo '<div class="panel-body">';
						echo '<p><strong>' . $d->nombre . '</strong></p>';
						echo '<label>' . $d->turnoul . '</label>';
						echo '</div>';
						echo '</div>';
						echo '</div><!-- ./Div col-md-6 -->';
					}?>
				</div><!-- ./Div Row -->
			</div><!-- ./Col-md-12 -->
		</div>

		<div class="row">
			<div class="col-md-12"><!-- Col-md-12 -->
				<div class="row">
					<div class="col-md-10 sectorAdvertising">
						<div class="panel panel-default">
								<div class="panel-body advertising">
									<p>PUBLICIDAD</p>
								</div>
							</div>
						</div>
				</div>
			</div><!-- ./Col-md-12 -->
		</div>
	</div><!-- ./Container -->
</body>
</html>