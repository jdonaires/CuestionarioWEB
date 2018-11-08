<!DOCTYPE html>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<?php
	$server="localhost";
	$usuario="root";
	$contraseña="";
	$bd="cuestionario";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die ("Error en la conexion");

	$consulta = mysqli_query($conexion," SELECT * from curso")
		or die ("Error al consultar los registros");

	echo '<table border="1">';
	echo '<tr>';
	echo '<th id="curso">Curso</th>';
	echo '</tr>';

	while ($extraido = mysqli_fetch_array($consulta)) {
		echo '<tr>';
		echo '<td>'.$extraido['Curso'].'</td>';
		echo '</tr>';
	}

	mysqli_close($conexion);
	echo '</table>';
	?>
</body>
</html>