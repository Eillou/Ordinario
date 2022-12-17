
<?php

session_start();
if(isset($_SESSION['Usuario'])){
header("location = compras.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> Pipo</title> <b>
        <link rel="stylesheet" href="est.css"/>
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
    <p class="bien">
        Bienvenido a la tienda online de Pipo donde podrás encontrar gran variedad de productos básicos del hogar 
       </p>
       <br><br><br><br><br><br>
       <form action="sesion.php" method="POST">
       <fieldset>
         <legend> <mark>Iniciar sesión</mark></legend> 
                <label  for="name">Usuario</label>
                <br>
                <input type="text" id="name" name="Usuario" placeholder="Usuario" required>
               <br>
               <label  for="name">Contraseña </label>
               <br>
               <input  type="password" id="name" name="Usuario" placeholder="Contraseña" required>
               <br>
               <br>
               <input type="submit" value="Enviar">
                 
     </form>
     <?php
include("conexion.php");
    ?>
</body>
</html>