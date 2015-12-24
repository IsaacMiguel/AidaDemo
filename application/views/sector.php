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
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/sectores.css">

	<!-- CSS FlipClock -->
	<link rel="stylesheet" href="<?php echo SITE_URL;?>public/css/flipclock.css">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo SITE_URL;?>index.php/login/logout">Logout</a></li>
	</ul>
</nav>
	<div id="page"><!-- Container -->
		<div class="row">
<!-- First row -->
			<div class="col-md-12"><!-- Col-md-12 -->
				<div class="panel panel-default">
					<div class="row">
						<h1><label id="nombre" value="<?php echo $data->nombre?>"><?php echo $data->nombre?></label></h1>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-4 divBot">
							<button class="btn btn-primary increment call">PRÓXIMO</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-md-offset-3">
							<div class="panel">
								<div class="panel-body divBot">
									<div class="clock" style="margin:2em;"></div>
									<input id="codigo" value="<?php echo $data->codigo?>" hidden>
								</div>
							</div>
						</div>
						<div id="divCall" class="col-md-2">
							<button id="call" class="btn btn-success call">LLAMAR</button>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2 col-md-offset-4 divBot">
							<button class="btn btn-primary decrement call">ANTERIOR</button>
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
			clock = new FlipClock($('.clock'), <?php echo $data->turnoact?>, {
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

			$('#call').click( function () {
				var codigo = $("#codigo").val();
				var time  = clock.getTime();
				turnoact = time['time'];

				$.ajax({
					url: "http://localhost/aida/index.php/sector/RecordDataSector/",
					type: 'POST',
					data: {	codigo: codigo,
							turnoact: turnoact
					}
				});
			});
		});
	</script>
</body>
</html>