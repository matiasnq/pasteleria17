<?php 
require("php/conexion.php");

//menu, dsps revisar como hacerlo con submenu
$menu = array('Inicio' => 'Inicio',
                 'Quienes' => 'Quienes Somos?',
                 'Proddulce'=> 'Productos Dulces',
                 'Prodpan' => 'Panificados',
                 'Contacto' => 'Contacto');
$quecontenido = isset($_GET['contenido'])?$_GET['contenido']:'Inicio';

switch($quecontenido){
    case 'Quienes': $titulo = 'Quienes Somos?';
        $ruta= "quienes-somos.php";
        break;
    case 'Proddulce': $titulo = 'Productos Dulces';
        $ruta = "productos-cosas-dulces.php";
        break;
    case 'Prodpan': $titulo = 'Panificados';
        $ruta = "productos-panificados.php";
        break;
    case 'Contacto': $titulo = 'Contacto';
        $ruta = "contacto.php";
        break;
    case 'Inicio': default: $titulo = 'Ponele Dulce!';
        $ruta = "home.php";
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <!-- me faltaron los iconos -->
    <title>
        <?php echo $titulo;?>
    </title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/mis-estilos.css" type="text/css">
    <link rel="stylesheet" href="fuentes/fuentes.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    
</head>


<body>
    <!-- container -->

    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-lg-8 col-xs-12">
                
                    <img class="img-banner" src="imagenes/banner-poneledulce.jpg" alt="logo">
                    <!--  
                    <h1>Ponele Dulce!</h1>-->
                
            </div>
            <div class="col-lg-4 col-xs-12">
                   <ul class="redes-sociales">
                      <li><a href="#"><span class="icon-twitter"></span></a></li>
                      <li><a href="#"><span class="icon-facebook2"></span></a></li>
                      <li><a href="#"><span class="icon-instagram"></span></a></li>
                
                  </ul>
                   
            </div>
            <!-- Comienzo Navbar -->
            <div class="col-12">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img class="pd" src="imagenes/pd.gif" alt="Pd!"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
   <!-- INICIO UL LI MENU -->
    <ul class="navbar-nav">
     <?php 
        foreach($menu as $k => $v){
            $cont = ($quecontenido == $k)? 'class="nav-item-active"':'';
            echo '<li><a class="nav-link" href="index.php?contenido='.$k.'" '.$cont.'>'.$v.'</a></li>';
        }
        ?>
  
    </ul>
    <!-- FIN MENU UL LI -->
  </div>
</nav>
            </div>
            <!-- FIN Navbar -->
<!-- Comienzo CONTENIDO -->
<div class="col-12">
            
    <?php
        include($ruta);
    ?>
           
            </div>            
           
            </div>
            <div class="col-12 footer">
               <small>Copyright 2017 &copy; <a href="#">Matias     Quintana</a></small>
            </div>
        </div>
        
    
    
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> 
    <script>
        (function() {
            'use strict'

            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement('style')
                msViewportStyle.appendChild(
                    document.createTextNode(
                        '@-ms-viewport{width:auto!important}'
                    )
                )
                document.head.appendChild(msViewportStyle)
            }

        }())
        </script>

   
            
</body>
</html>