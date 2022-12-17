<!DOCTYPE html>
<html lang="es">
<head>


    <title> Pipo</title> <b>
    <link rel="stylesheet" href="est.css"/>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

</head>
<body>

  
    <header>
        <nav>
            <ul>
            <li ><a href="index.php">Inicio</a></li>
            <li ><a href="iniciar.php">Iniciar sesión</a></li>
            <li ><a href="registro.php">Registrarse</a></li>
            <li ><a href="compras.php">Comprar</a></l>      
            </ul>
        </nav>
    </header>
    <br><br><br>
    <main>
    <p class="bien">
        Bienvenido a la tienda online de Pipo donde podrás encontrar gran variedad de productos básicos del hogar 
       </p>
       <br><br><br><br><br><br>
       <p class="bien1">
        <img class="imagen1" src="Imagenes/Pagina/compra.jpg">
Aquí podrás comprar cualquiera de nuestros productos desde la comodidad de tu hogar o donde sea que te encuentres, el primer paso es registrarse en nuestra página.  </p>
       
       <br><br><br>
       <img class="imagen2" src="Imagenes/Pagina/regis.jpg">
       <br><br><br>
       
       <p class="bien1">
        Una vez que te hayas registrado podrás empezar a comprar en nuestra página.
       </p>
  </main>
       <br><br><br><br>

    <div class="aviso-cookies" id="aviso-cookies">

		<h3 class="titulo">Cookies</h3>
		<p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
		<button class="boton" id="btn-aceptar-cookies" onclick="display:none">De acuerdo</button>
		<a class="enlace" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">Aviso de Cookies</a>
	</div>
	<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

	<script src="js/aviso-cookies.js"></script>
      <div>
        <footer>
         Todos los derechos reservados apartir de <?php echo date ("d.m.Y H:i:s");?></p>
        </footer>
      </div>

</body>
</html>
<?php
include("conexion.php");
$caducidad = 60 * 60 + time();

if($_COOKIE["visitas"] == NULL){

  setcookie("visitas", 1, $caducidad);
  
  } else {
  
  $suma = $_COOKIE["visitas"] + 1;
  
  setcookie("visitas", $suma, $caducidad);
  
  }

    ?>

