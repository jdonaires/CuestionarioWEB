<!DOCTYPE html>
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
	?>
<html>
<head>
	<title>Formulario</title>
	<style>
	body{background-color: #264673; box-sizing: border-box; font-family: Arial;}

	form{
		background-color: white;
		padding: 10px;
		margin: 30px auto;
		width: 400px;
	 }

	 input[type=text], input[type=password]{
	 	padding: 10px;
	 	width: 380px;
	 }

	 input[type="submit"]{
	 	border:0;
	 	background-color: #ED8824;
	 	padding: 10px 20px; 
	 }

	 .error{
	 	background-color: #FF9185;
	 	font-size: 12px;
	 	padding: 10px; 
	 }
	 .correcto{
	 	background-color: #A0DEA7;
	 	font-size: 12px;
	 	padding: 10px; 
	 } 		

	</style>
</head>
<body>
	<form action= "Formulario.php" method= "POST">
		
		<?php
		if(isset($_POST['txtCurso'])){
			$curso = $_POST['txtCurso'];
			$campos= array();

			if($curso == ""){
				array_push($campos, "El campo no puede estar vacio");
			}
			if(count($campos) > 0){
				echo "<div class ='error'>";
				for($i=0;$i < count($campos); $i++){
					echo"<li>".$campos[$i]."</div>";
				}
			}else{
				echo "<div class ='correcto'>
				Datos correctos";
			}
			echo "</div>";
		}
		?>
		<br> </br>
		Curso: <input type="text" name="txtCurso" placeholder="Insertar curso"> <br/><br/>
		<input type= "submit" value= "Guardar" name="btnGuardar">
	</form>
	<br/>
	<form action= "Eliminar.php" method= "POST">
		Eliminar Curso: <input type="text" name="txtCurso" placeholder="Insertar curso a eliminar"> <br/><br/>
		<input type= "submit" value= "Eliminar" name="btnEliminar">
	</form>
	<br/>
	<form action= "Consultar.php" method= "POST">
		<input type= "submit" value= "Registro" name="btnRegistro">
	</form>
</body>
</html>