<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Aida Turnos</title>

	<!-- CSS bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap-theme.css">

	<!-- CSS custom -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/main.css">

	<!-- CSS FlipClock -->
	<link rel="stylesheet" href="<?php echo SITE_URL;?>public/css/flipclock.css">
</head>
<body>
	<div id="page"><!-- Container -->
		<div class="row">
			<div class="col-md-12"><!-- Col-md-12 -->
			<p style="text-align: center; font-size:5em;">TURNOS</p>
				<div class="row"><!-- Div Row -->
					<?php foreach ($data as $d) {
						echo '<div class="col-md-6 sector"><!-- Div col-md-6 -->';
						echo '<div class="panel panel-default panelSector">';
						echo '<div class="panel-body">';
						echo '<p><strong>' . $d->nombre . '</strong></p>';
						echo '<div id=' . $d->codigo . ' class="clock"></div>';
						echo '<input value=' . $d->turnoult . ' class="cValue" hidden>';
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
								<?php
									$i = $this->session->userdata('num_oferta');
									echo '<p style="text-align: center; font-size:3em;">'. $offer[$i]->NOMBRE." - $ ".$offer[$i]->PRECIO.'</p>';
								?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- ./Col-md-12 -->
		</div>
	</div><!-- ./Container -->
	<script src="<?php echo SITE_URL;?>public/js/jquery-1.11.3.js"></script>
	<script src="<?php echo SITE_URL;?>public/js/flipclock.js"></script>
	<script type="text/javascript">
		var clock;

		$(document).ready(function() {
			<?php foreach ($data as $d) { ?>
				// Instantiate a counter
				clock = new FlipClock($('#<?php echo $d->codigo;?>'), <?php echo $d->turnoult?>, {
					clockFace: 'Counter'
				});
			<?php }?>

			setInterval(loadTurns, 4000);

			function loadTurns () {
				var body = $('body').html();

				$.post("<?php echo SITE_URL;?>index.php/welcome/reload",
					{
						body : body
					}, function (datos) {
						if (datos === 'true') {
							location.reload();
						}
					});
			}
		});
	</script>
</body>
</html>