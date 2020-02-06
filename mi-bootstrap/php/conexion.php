<?php 
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "poneledulce";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd) or die(header("Location:../mantenimiento.html"));
?>