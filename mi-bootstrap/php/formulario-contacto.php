<?php
$quenombre = trim($_POST['nombre']);
$quemail = trim($_POST['mail']);
$quemensaje = trim($_POST['mensaje']);

if(strlen($quenombre) ==0 || strlen($quemail) == 0 || strlen($quemensaje)== 0 ){
    $respuesta = 'error';
}else{
    $destinatario = 'matiasn.quintana@gmail.com';
    $asunto = "Contacto desde la Web Ponele Dulce!";
    
    $mensaje = "";
    foreach($_POST as $k => $v){
        $mensaje .= ucfirst($k).": $v\r\n";
    }
    
    //envio al administrador    
    $envioadmin = mail($destinatario, $asunto, $mensaje);
    
    //4ta opcion cabecera
    $cabecera = "MIME-Version: 1.0\r\n";
    $cabecera .= "Content-type: text/html; charset=utf-8\r\n";
    $cabecera .= "From: no-reply@poneledulce.com.ar";
    $mensaje2= "";
    foreach($_POST as $k => $v){
        $mensaje2 .= ucfirst($k).': '.$v.'<br>';
    }
    $html = "<div style='background: white; color:red;'>".$mensaje2."</div>";
    //envio al usuario
    $enviousuario = mail($quemail,"Gracias por sumarte a nuestra web!", $html, $cabecera);
    
    if($envioadmin && $enviousuario){
        $respuesta = 'ok';
    }else{
        $respuesta = 'mas tarde';
    }
    
}
header("Location:../index.php?contenido=contacto&respuesta=$respuesta");

?>