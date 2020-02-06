  <?php
    $consulta = mysqli_query($conexion, "SELECT * FROM productos WHERE categoria = 2");

?> 
           <!-- Comienzo CONTENIDO -->
            <div class="col-lg-12 col-xs-12">
                <h2>Panificados</h2>
                <p>Todos los productos panificados que tenemos para vos!</p>
            
            <div class="row text-center">
               <?php
                    while($registro = mysqli_fetch_assoc($consulta)){
                        
                    
                ?>
                <div class="col-lg-4 col-xs-6">
                <h2><?php echo $registro['titulo'];?></h2><img class="img-responsive productos" src="imagenes/<?php echo $registro['foto'];?>" alt="img1"><p><?php echo $registro['detalle']?></p>
                <p>$<?php echo $registro['precio'];?>.-</p>
                </div>
                <?php
                }
                ?>
                
            </div>
            <?php
            mysqli_close($conexion);
            ?>
            
            
<!-- Fin del Contenido -->
   