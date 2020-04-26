<?php
session_start();
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

//CONEXION BASE DE DATOS
include 'conexion.php';

$consulta="SELECT * FROM usuarios WHERE USR_usuario = '$usuario' and USR_clave='$clave'";
$resultado=mysqli_query($conexion,$consulta);

 $filas = mysqli_num_rows($resultado);

if ($filas>0){

    $fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);
    $_SESSION['usuario']=$fila["USR_usuario"];
    header("Location:PaginaPrincipal.php");
 }

 else{

      header("Location:For_login.html");
  }
 
 //mysqli_free_result($resultado);
 mysqli_close($conexion);


?>
