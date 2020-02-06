<?php
require("../php/conexion.php");
$idprod=$_GET['idproducto'];
$consulta = mysqli_query($conexion, "select * from productos where idproducto=$idprod");
$registro=mysqli_fetch_assoc($consulta);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Panel administración web "Ponele Dulce!"</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../css/bootstrap.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../css/mis-estilos.css" type="text/css">
    <link rel="stylesheet" href="fuentes/fuentes.css">
    <link rel="stylesheet" href="icomoon/style.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
</head>


<body>
   
    <!-- CONTENIDO LOGIN -->
    
    <!-- CONTENIDO LOGIN -->
    <div class="container-fluid">
    <!-- arriba -->
        <div class="row">
         <div class="col-lg-12 col-xs-12 text-center">
            <?php
        require("encabezado.php");
        ?>          
         </div>

          <div class="col-lg-10 col-xs-12">
           <a href="panel.php">
               Volver al listado</a>
               <h2>Formulario de ELIMINACION DE PRODUCTO:</h2>
            <form method="POST" action="producto-eliminar.php" onsubmit="return eliminarProducto('<?php echo $registro['titulo']?>')">
           
           <table class="tablapanel">
                  <tr>
                     
                      <td>Id producto:</td>
                      <td><?php echo $registro['idproducto']?></td>
                  </tr>
                  <tr>
                  <td>Título:</td>
                  <td><?php echo $registro['titulo'];?></td>
                  </tr>
                  <tr>
                      <td>Detalle:</td>
                      <td><?php echo $registro['detalle'];?></td>
                  </tr>
                  <tr>
                      <td>Precio:</td>
                      <td><?php echo $registro['precio']?></td>
                  </tr>
                  <tr>
                      <td>Foto:</td>
                      <td><img src="../imagenes/<?php echo $registro['foto']?>" alt="imagen no disponible"></td>
                  </tr>
                  <tr>
                      <td>Categoria:</td>
                      <td>
                         <?php if($registro['categoria']==1){
                         echo "1 - Dulce";
                        }else{
                            echo "2 - Panificado";
                        }?>              
                    </td>
                    
                  <tr>
                  <td>
                  <input type="hidden" name="producto_id" id="producto_id" value="<?php echo $registro['idproducto']?>">
                  <input type="submit" value="Eliminar Producto">
                  </td>
                  </tr>
                  
           </table>
           </form>
            
           <!--  </div>-->
        </div>
        </div>
    </div>
    <?php mysqli_close($conexion);?>
    <!-- FIN CONTENIDO LOGIN -->
    
    


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
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
        
        function eliminarProducto(titulo){
            eliminarProducto=confirm("Si pulsa Aceptar, se eliminara el producto"+ titulo);
            if(eliminarProducto){
               return true;
               }
               window.location="panel.php";
               return false;
            }
        
    </script>

</body>
</html>