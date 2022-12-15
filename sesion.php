<?php
include("conexion.php");

$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
			
        	
	    $revision = mysqli_query($conexion, "SELECT * FROM regi WHERE Usuario='$Usuario' and Contraseña='$Contraseña'");
	    
	    if (mysqli_num_rows($revision) > 0) {
	    	header ("location: HOLA.php");
            exit;
	    } else {
	    	echo '
            <script>
            alert)"Usuario no existe");
            windows.location = "HOLA.php";
            </script>
            ';
            exit;
	    }
?>