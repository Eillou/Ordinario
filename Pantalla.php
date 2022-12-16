<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="est.css">
	<title>Aviso de compra</title>
</head>
<body>

	<main>
		<h1>Su compra ha sido realizada con éxito.</h1>
		<p>Muchas gracias por elegir Pipo online para realizar su compra de artículos del hogar!</p>
        <p>Desea volver al inicio o al carrito?</p>
        <button id="regresar" class="btn btn-danger" onclick="location.href='Inicio.php'">Inicio</button>
        <button id="Carrito" class="btn btn-danger" onclick="location.href='compras.php'">Carrito</button>
	</main>

	<div class="aviso-cookies" id="aviso-cookies">
		<img class="galleta" src="./img/cookie.svg" alt="Galleta">
		<h3 class="titulo">Cookies</h3>
		<p class="parrafo">Utilizamos cookies propias y de terceros para mejorar nuestros servicios.</p>
		<button class="boton" id="btn-aceptar-cookies">De acuerdo</button>
		<a class="enlace" href="aviso-cookies.html">Aviso de Cookies</a>
	</div>
	<div class="fondo-aviso-cookies" id="fondo-aviso-cookies"></div>

	<script src="js/aviso-cookies.js"></script>
</body>
</html>