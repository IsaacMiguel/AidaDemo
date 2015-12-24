<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset='UTF-8'>

	<!-- CSS bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/bootstrap-theme.css">

	<!-- CSS custom -->
	<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL;?>public/css/login.css">
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<ul class="nav navbar-nav navbar-right">
		<li><a href="<?php echo SITE_URL;?>index.php/login/logout">Logout</a></li>
	</ul>
</nav>

<div id="page">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
				<h3> - Login - </h3>
		<hr>
			<div class="row">
				<form method="POST" action="<?php echo SITE_URL;?>index.php/login/auth">
					<label for="acount">Mi cuenta</label>
					<input class="form-control" type="text" id="acount" name="acount" maxlength="15" placeholder="Acount..." required>
				<hr>
					<label for="password">Contraseña</label>
					<input class="form-control" type="password" id="password" name="password" maxlength="15" placeholder="Password..." required>
				<hr>
					<button class="btn btn-primary" type="submit">LogIn</button>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>