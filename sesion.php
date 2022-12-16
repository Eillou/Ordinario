<?php
session_start();
include("conexion.php");


$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
			
        	
	    $revision = mysqli_query($conex, "SELECT * FROM regi WHERE Usuario='$Usuario' and Contraseña='$Contraseña'");
	    
	    if (mysqli_num_rows($revision) > 0) {
            $_SESSION['Usuario'] = $Usuario;
	    	header ("location: iniciar.php");
            exit;
	    } else {
	    	echo '
            <script>
            alert("Usuario no existe");
            window.location = "registro.php";
            </script>
            ';
            exit;
	    }
?>