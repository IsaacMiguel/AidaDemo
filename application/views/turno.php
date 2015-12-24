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
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/turno.css">

</head>
<body>
	<div id="page"><!-- Container -->
		<div class="row">
<!-- First row -->
			<div class="col-md-12"><!-- Col-md-12 -->
				<div class="panel panel-default">
					<div class="row"><!-- Div Row -->
						<div class="col-md-6"><!-- Div col-md-6 -->
							<ul class="list-group">
								<?php foreach ($data as $d) {
									echo "<li class='list-group-item'>";	
										echo "<div class='panel-body divRadio'>";
											echo "<div class='radio'><label class='radio'><input type='radio' name='id' id='".$d->codigo."' value='" . $d->codigo . "'/>" . $d->nombre . "</label></div>";
										echo "</div>";
									echo "</li>";	
								}?>
							</ul>
						</div><!-- ./Div col-md-6 -->
						<div class="col-md-6"><!-- Div col-md-6 -->
							<button type="submit" id="send" name="send" class="btn btn-primary"><p>Imprimir</p></button>
						</div><!-- ./Div col-md-6 -->
					</div><!-- ./Div Row -->
				</div>
			</div><!-- ./Col-md-12 -->
		</div>
	</div><!-- ./Container -->
	<script type="text/javascript" src="<?php echo SITE_URL;?>public/js/jquery-1.11.3.js"></script>
	<script type="text/javascript">
	$(document).ready(function () {
		$('#send').click(function () {
			var id = $("input:radio[name ='id']:checked").val();

			if (id === undefined) {
				alert("Debe seleccionar una opcion");
			}else{
				$.post("<?php echo SITE_URL;?>index.php/turno/printTurn/"+id,
					{
						id : id
					}, function (data) {
						if (confirm(data)) {
							$('#page').html(data);
								$.post("<?php echo SITE_URL;?>index.php/turno/recordTurnReq" ,
									{
										id : id
									});
							window.print();
							console.log(id);
							location.reload();
						}else{
							location.reload();
						}
					}
				);
			}
		});
	});
	</script>
</body>
</html>