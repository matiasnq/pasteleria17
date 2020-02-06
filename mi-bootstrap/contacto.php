<?php
    if(isset($_GET['rta'])){
        if($_GET['rta'] == 'error'){
            echo "Los campos Nombre, Mail y Mensaje son obligatorios";
        }elseif($_GET['rta'] == 'ok'){
            echo "Su consula se envió correctamente";
        }elseif($_GET['rta'] == 'mastarde'){
            echo "Intente enviar su consulta en otro momento";
        }
    }
?>
        
          
           <!-- Comienzo CONTENIDO -->
            <div class="col-lg-12 col-xs-12">
                <h2>Contacto</h2>
                <p class="texto-contacto">Nuestro horario de atención de 7hs a 19hs de Lunes a Sábados.</p>
                <p class="texto-contacto">Para consultas y suscripciones completa los datos del formulario!</p>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-xs-12">
                        <address class="texto">
                            <p>Nuestra Empresa esta ubicada en: <br> Calle 123 GBA</p>
                            <p>Llamanos al: <br> +5411 1111 1111</p>
                            <p>Escribinos a: <br> <a href="mailto:poneledulce@gmail.com">poneledulce@gmail.com</a></p>
                        </address>
                    </div>
                    <div class="col-lg-4 col-xs-12">
                        <form id="formulario" class="texto" action="php/formulario-contacto.php" method="POST">
                           <label for="nombre">Nombre:</label>
                            <input name="nombre" id="nombre" type="text" placeholder="Su Nombre y Apellido *">
                            <label for="mail">Mail:</label>
                            <input name="mail" id="mail" type="email" placeholder="Su Mail *">
                            <label for="mensaje">Mensaje:</label>
                            <textarea name="mensaje" id="mensaje" cols="30" rows="5" placeholder="Su Mensaje *"></textarea>
                            <input name="suscripcion" id="suscripcion" type="checkbox" checked>
                            <label for="suscripcion">Suscribirme al Newsletter para recibir promociones!</label>
                            <input type="submit" value="Enviar" class="boton">
                        </form>
                        
                    </div>
                </div>
            </div>
            <
        
  