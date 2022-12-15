<!DOCTYPE html>
<html>
<head>
    <title> Pipo</title> <b>
        <link rel="stylesheet" href="est.css"/>
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
            <li ><a href="inicio.php">Inicio</a></li>
            <li ><a href="iniciar.php">Iniciar sesion</a></li>
            <li ><a href="registro.php">Registrarse</a></li>
            <li ><a href="compras.php">Comprar</a></l>      
            </ul>
        </nav>
      

    </header>
    <p class="bien">
        Bienvenido a la tienda online de Pipo donde podras encontrar gran variedad de productos basicos del hogar 
       </p>
       <br><br><br><br><br><br>
       <p class="bien1">
        <img class="imagen1" src="imagenes/pagina/compra.jpg">
Aqui podras comprar cualquiera de nuestros productos desde la comodidad de tu hogar o donde sea que te encuentres, el primer paso es registrarse en nuestra pagina  

       </p>
       <br><br><br><br><br><br>
       <p class="bien1">
        <img class="imagen2" src="imagenes/pagina/regis.jpg">
        Una vez que te hayas registrado podras empezar a comprar en nuestra pagina
       </p>
       <br><br><br><br>

        <div id="cajacookies">
        <p class="LINK"><button onclick="aceptarCookies()" class="boton">Aceptar y cerrar éste mensaje</button>
        Éste sitio web usa cookies, si permanece aquí acepta su uso.
        Puede leer más sobre el uso de cookies en nuestra <?php echo '<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">política de privacidad</a>';?>
        </p>
        </div>
       <div> <br>
        <footer>
         Todos los derechos reservados
<?php
echo date ("d.m.Y H:i:s");

?>. </p>

        </footer>
    </div>

</body>
<script>
    function compruebaAceptaCookies() {
      if(localStorage.aceptaCookies != 'true'){
        cajacookies.style.display = 'block';
      }
    }
    
    function aceptarCookies() {
      localStorage.aceptaCookies = 'true';
      cajacookies.style.display = 'none';
    }
    
    $(document).ready(function () {
      compruebaAceptaCookies();
    });
    </script>
</html>
<?php
include("conexion.php");
    ?>
