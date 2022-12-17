<?php
session_start();
include("conexion.php");


$Usuario = $_POST['Usuario'];
$Contraseña = $_POST['Contraseña'];
			
        	
	    $revision = mysqli_query($conex, "SELECT * FROM regi WHERE Usuario='$Usuario' and Contraseña='$Contraseña'");
	    
	    if (mysqli_num_rows($revision) > 0) {
           
            echo '
            <script>
            alert("Error en inicio de sesion");
            window.location = "index.php";
            </script>
            ';
            exit;
	    } else {
            $_SESSION['Usuario'] = $Usuario;
            
            header("location: iniciar.php");
            

            exit;
	    }
?>