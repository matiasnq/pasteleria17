<?php
session_start();
if(!isset($_SESSION['ingreso'])){
    header("Location:index.php?acceso=denegado");
}
 
?>
<!-- sacar el punto del cerrar sesion -->
<header class="encabezado">
    <h1>Bienvenido Administrador</h1>
    <span id="fecha"></span>
    <nav>
        <ul>
            <li><a href="cerrar-login.php">Cerrar Sesión</a></li>
        </ul>
    </nav>
    
</header>
<script>
 var dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sabado"];
    var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
    var hoy = new Date();
    var diahoy = hoy.getDay();
    var meshoy = hoy.getMonth();
        
    var quedia = dias[diahoy]+" "+hoy.getDate()+" de "+meses[meshoy]+"  del "+hoy.getFullYear();
    var contenedor = document.getElementById("fecha");
 
    contenedor.innerHTML = quedia;
</script>