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

	<!-- CSS FlipClock -->
	<link rel="stylesheet" href="<?php echo SITE_URL;?>public/css/flipclock.css">
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
						echo '<div class="clock" style="margin:2em;"></div>';
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
	<script src="<?php echo SITE_URL;?>public/js/jquery-1.11.3.js"></script>
	<script src="<?php echo SITE_URL;?>public/js/flipclock.js"></script>
	<script type="text/javascript">
			var clock;

			$(document).ready(function() {

				// Instantiate a counter
				clock = new FlipClock($('.clock'), <?php echo $d->turnoul?>, {
					clockFace: 'Counter'
				});

				// Attach a click event to a button a increment the clock
				$('.increment').click(function() {
					//clock.setValue(10);

					// Or you could decrease the clock
					// clock.decrement();

					clock.increment();

					// Or set it to a specific value
					// clock.setValue(x);
				});

				// Attach a click event to a button a decrement the clock
				$('.decrement').click(function() {
					clock.decrement();
				});

				$('.reset').click(function() {
					clock.reset();
				});

				/*
				// Use this code if you want to autoincrement the counter.
				var timer = new FlipClock.Timer(clock, {
					callbacks: {
						interval: function() {
							clock.increment();
						}
					}
				});

				timer.start();
				*/
			});
		</script>
</body>
</html>