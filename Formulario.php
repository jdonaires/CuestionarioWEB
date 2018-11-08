<!DOCTYPE html>
<?php
	$server="localhost";
	$usuario="root";
	$contraseña="";
	$bd="cuestionario";

	$conexion = mysqli_connect($server, $usuario, $contraseña, $bd)
		or die ("Error en la conexion");

	$curso = $_POST['txtCurso'];
	$descripcion = $_POST['txtDescripcion'];

	$insertar = "INSERT INTO curso values (NULL,'$curso','$descripcion')";

	$resultado = mysqli_query($conexion,$insertar)
		or die ("Error al insertar los registros");

	mysqli_close($conexion);
	?>
<html>
<head>
	<title>Formulario</title>
	<style>
	body{background-color: #7099F6; box-sizing: border-box; font-family: Arial;}

	form{

		background: rgba(0,0,0,.5);
		padding: 10px;
		margin: 30px auto;
		width: 400px;
	 }

	 input[type=text], input[type=password]{
	 	padding: 10px;
	 	width: 380px;
	 	background: rgba(0,0,0,.5);
	 }

	 input[name=txtDescripcion]{
	 	padding: 30px;
	 	width: 340px;
	 }


	 input[type="submit"]{
	 	border:0;
	 	background-color: #D4AC0D;
	 	padding: 10px 20px; 
	 }

	 .error{
	 	background-color: #FF9184;
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
				array_push($campos, "<b>El campo curso no puede estar vacio</b>");
			}
			if(count($campos) > 0){
				echo "<div class ='error'>";
				for($i=0;$i < count($campos); $i++){
					echo"<li>".$campos[$i]."</div>";
				}
			}else{
				echo "<div class ='correcto'>
				<b>Datos correctos</b>";
			}
			echo "</div>";
		}
		?>
		<br> </br>
		<b>Curso: </b>  <input type="text" name="txtCurso" placeholder="Insertar curso"> <br/><br/>
		<b> Descripción del curso: </b> <input type="text" name="txtDescripcion"> <br/><br/>
		<input type= "submit" value= "Guardar" name="btnGuardar">

	</form>
	<br/>
	<form action= "Eliminar.php" method= "POST">
		<b> Eliminar Curso: </b> <input type="text" name="txtCurso" placeholder="Insertar curso a eliminar"> <br/><br/>
		<input type= "submit" value= "Eliminar" name="btnEliminar"> 
	</form>
	<br/>
	<form action= "Consultar.php" method= "POST">
		<input type= "submit" value= "Registro" name="btnRegistro">
	</form>
</body>
</html>