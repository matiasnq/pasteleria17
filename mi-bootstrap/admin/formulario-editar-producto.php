<?php
require("../php/conexion.php");
$idprod=$_GET['idproducto'];
$consulta = mysqli_query($conexion, "select * from productos where idproducto=$idprod");

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
               <h2>Formulario de edicion de producto:</h2>
            <form method="POST" action="producto-editar.php" enctype="multipart/form-data">
           
           <table class="tablapanel">
                  <tr>
                     <?php $registro=mysqli_fetch_assoc($consulta);?>
                      <td>Id producto:</td>
                      <td><?php echo $registro['idproducto']?></td>
                  </tr>
                  <tr>
                  <td>Título:</td>
                  <td><input type="text" name="producto_titulo" id="producto_titulo" value="<?php echo $registro['titulo'];?>"></td>
                  </tr>
                  <tr>
                      <td>Detalle:</td>
                      <td><textarea name="producto_detalle" id="producto_detalle" cols="30" rows="10"><?php echo $registro['detalle'];?></textarea></td>
                  </tr>
                  <tr>
                      <td>Precio:</td>
                      <td><input type="text" name="producto_precio" id="producto_precio" value="<?php echo $registro['precio']?>"></td>
                  </tr>
                  <tr>
                      <td>Foto:</td>
                      <td><img src="../imagenes/<?php echo $registro['foto']?>" alt="imagen no disponible"></td>
                      <td><input type="file" name="producto_foto" id="producto_foto"></td>
                  </tr>
                  <tr>
                      <td>Categoria:</td>
                      <td><select name="producto_menucat" id="producto_menucat">
                         <?php if($registro['categoria']==1){?>
                         <option value="1" selected>Dulce</option>
                         <option value="2">Panificado</option>
                         <?php }else{?>
                         <option value="1">Dulce</option>
                         <option value="2" selected>Panificado</option>
                         <?php } ?>
                         
                          
                      </select></td>
                    
                  <tr>
                  <td><input type="submit" value="Modificar Producto">
                  <input type="hidden" name="producto_id" id="producto_id" value="<?php echo $registro['idproducto']?>">
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
    </script>

</body>
</html>