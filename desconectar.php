
    <?php
        require_once('../DAL/conexion.php');
        // ** cerrar sesion **
        if(isset($_GET['modo']) == 'desconectar')
        {
           
        //limpiamos todas las variables de sesion iniciadas
        $_SESSION['MM_Username'] = NULL ;
        $_SESSION['MM_Id'] = NULL;
        $_SESSION['MM_Nick_user'] = NULL;
        $_SESSION['MM_Foto_user'] = NULL;
        $_SESSION['MM_mail_user'] = NULL;
 
          unset($_SESSION['MM_Username']);
          unset($_SESSION['MM_Id']);
          unset($_SESSION['MM_Nick_user']);
          unset($_SESSION['MM_Foto_user']);
          unset($_SESSION['MM_mail_user']);               
 
          //redireccionamos al index
          header ("Location: http://localhost:81/cuestionario/index.php");
 
        }
  ?>