<?php 
require("../php/conexion.php");
$idprod= $_POST['producto_id'];
$titulo= $_POST['producto_titulo'];
$detalle= $_POST['producto_detalle'];
$precio= $_POST['producto_precio'];
$foto = $_FILES['producto_foto'];
$categoria = $_POST['producto_menucat'];
$precio = (int)$precio;
$categoria=(int)$categoria;
//var_dump($idprod);
//consulta para saber el nombre original de la foto
$consulta = mysqli_query($conexion, "select foto from productos where idproducto=$idprod");
$registro=mysqli_fetch_row($consulta);
//echo $registro[0];

//si realiza un cambio en la imagen..
if($_FILES['producto_foto']['size'] > 0 && ($_FILES['producto_foto']['type'] == 'image/pjpeg' || $_FILES['producto_foto']['type'] == 'image/jpeg')){
    $nombreimagen = $_FILES['producto_foto']['name'];//nombre img
    $archivo = $_FILES['producto_foto']['tmp_name'];//archivo
    $ruta = "imagenes";
    $ruta="../".$ruta."/".$nombreimagen;
    move_uploaded_file($archivo,$ruta);
    $foto=$nombreimagen;
    $consultafoto="UPDATE productos SET 
    foto='".$foto."' where idproducto=$idprod";
                                    
$queryedicionfoto=mysqli_query($conexion,$consultafoto);
    
    
}

    
/* vardumpsssssssssssssssssssssss
var_dump($idprod);
echo "------------------";
var_dump($titulo);
echo "------------------";
var_dump($detalle);
echo "------------------";
var_dump($precio);
echo "------------------";
var_dump($foto);
echo "------------------";
var_dump($categoria);
echo "------------------";
*/
$consultaedicion="UPDATE productos SET 
    titulo='".$titulo."',
    detalle='".$detalle."',
    precio='".$precio."',
    categoria='".$categoria."'
    where idproducto=$idprod";
                                    
$queryedicion=mysqli_query($conexion,$consultaedicion);

if($queryedicion){
    echo header("location:panel.php");
}else{
    echo "error";
}

mysqli_close($conexion);

?>