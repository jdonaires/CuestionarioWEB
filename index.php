<?php 
	session_start();
	unset($_SESSION['usuario']);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<body>
<header>
	<div class="w3-container w3-orange w3-center">
		<h1>BIENVENIDO</h1>
	</div>
</header>

	
	<div class="w3-container w3-purple">
		<h2>Login</h2>
	</div>

	<form class="w3-container" action="controller_login.php" method="post">
		<p>
			<label class="w3-label-black">Usuario</label>
			<input class="w3-input w3-border " type="text" name="usuario">
		</p>
		<p>
			<label class="w3-label-black">Clave</label>
			<input class="w3-input w3-border" type="password" name="pas">
		</p>
		<p>
			<input type="hidden" name="entrar" value="entrar">
			<button class="w3-btn w3-purple">Aceptar</button>
		</p>
		<p>Si aún no tienes cuenta ve al siguiente link <a href="registrarse.php">Registrarse</a></p>
	</form>
<footer>
	<div class="w3-container w3-orange">
		<h4>CUESTIONARIO </h4>
	</div>
</footer>
</body>
</html>