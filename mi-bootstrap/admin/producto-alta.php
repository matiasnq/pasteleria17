<?php
require("../php/conexion.php");

$titulo = $_POST['titulo'];
$detalle = $_POST['detalle'];
$precio = $_POST['precio'];
$foto = $_FILES['foto'];
$categoria = $_POST['menucat'];
$precio = (int)$precio;
$categoria = (int)$categoria;




if($_FILES['foto']['size'] > 0 && ($_FILES['foto']['type'] == 'image/pjpeg' || $_FILES['foto']['type'] == 'image/jpeg')){
    $nombreimagen = $_FILES['foto']['name'];//nombre img
    $archivo = $_FILES['foto']['tmp_name'];//archivo
    $ruta = "imagenes";
    $ruta="../".$ruta."/".$nombreimagen;
    move_uploaded_file($archivo,$ruta);
    
}


$foto=$_FILES['foto']['name'];
//var_dump($categoria);


$consulta = "insert into productos VALUES(null,'".$titulo."','".$detalle."','".$precio."','".$foto."','".$categoria."')";
$query= mysqli_query($conexion, $consulta);

if($query){
    echo header("location:panel.php");
}else{
    echo "error";
}


//cerrar conexion;*/
?>