<html>
<head>
	<title>Registrar</title>
</head>
<body>
	<?php
	$server="localhost";
	$usuario="root";
	$contraseña="";
	$bd="dbcurso";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die ("Error en la conexion");

	$curso = $_POST['txtCurso'];

	$insertar = "INSERT INTO curso values (NULL,'$curso')";

	$resultado = mysqli_query($conexion,$insertar)
		or die ("Error al insertar los registros");

	mysqli_close($conexion);
		echo "Curso insertados correctamente";
	?>

	
</body>
</html>