<?php
    session_start();
include("../php/conexion.php");

$correo = mysqli_real_escape_string($conexion,trim($_POST['mail']));
$clave = mysqli_real_escape_string($conexion,trim($_POST['password']));

$consulta = mysqli_query($conexion, "SELECT * FROM administradores where mail = '$correo' and password = SHA1('$clave')");

if($registro = mysqli_fetch_assoc($consulta)){
    $_SESSION['ingreso'] = $correo;
    header("Location:panel.php");
}else{
    header("Location:index.php?log=error");
}
?>