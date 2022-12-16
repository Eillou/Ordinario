<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MB7HJ8K');</script>
	<!-- End Google Tag Manager -->


    <title> Pipo</title> <b>
    <link rel="preconnect" href="https://fonts.gstatic.com">
	  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="est.css"/>
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>

</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB7HJ8K"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
  
    <header>
        <nav>
            <ul>
            <li ><a href="inicio.php">Inicio</a></li>
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
        <img class="imagen1" src="imagenes/pagina/compra.jpg">
Aquí podrás comprar cualquiera de nuestros productos desde la comodidad de tu hogar o donde sea que te encuentres, el primer paso es registrarse en nuestra página.  </p>
       
       <br><br><br>
       <img class="imagen2" src="imagenes/Pagina/regis.jpg">
       <br><br><br>
       
       <p class="bien1">
        Una vez que te hayas registrado podrás empezar a comprar en nuestra página.
       </p>
  </main>
       <br><br><br><br>

    <div class="aviso-cookies" id="aviso-cookies">
		<img class="galleta" src="imagenes/Pagina/cookie.svg" alt="Galleta">
		<h3 class="titulo">Cookies</h3>
		<p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
		<button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
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

if($_COOKIE["UltimaVisita"] == NULL){

setcookie("UltimaVisita", date("m/d/y"), $caducidad);
}
if($_COOKIE["visitas"] == NULL){

  setcookie("visitas", 1, $caducidad);
  
  } else {
  
  $suma = $_COOKIE["visitas"] + 1;
  
  setcookie("visitas", $suma, $caducidad);
  
  }

    ?>
