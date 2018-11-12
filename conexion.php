<?php 
// *** validamos para el login del sitio
if (!isset($_SESSION)) {
  session_start();
}
?>
<?php
//conectamos la tabla
$link = mysqli_connect("localhost","root","","cuestionario") or die("Error en la consulta" . mysqli_error($link)); 
?>
<?php
//verificamos el archivo include si lo encontramos usamos la ruta
 if (is_file ('../DESIGNER/include.php')){
     include ('../DESIGNER/include.php');
    }
    else {
    include ('./DESIGNER/include.php');
    }
?>