<?php
	require_once("../controlador/conexion.php");
	require_once("../controlador/controlador.php");



$params = array(
    "nombre" => $_POST['nombre'],
    "contrasena" => $_POST['contrasena'],
    "telefono" => $_POST['telefono'],
    "correo" => $_POST['correo'],
);
   
            $db = Database::getInstance();
            $conn = $db->getConnection();
            $sesion = new Modelo($conn);

            list ($valor,$error) = $sesion->modifUsuario( $params );
            if ( empty( $valor)){
                if ( !empty($error)) $_SESSION["error"] = $error;
                    }else{
                echo "<script>alert('Se han guardado los cambios')
                        window.location.href='../vista/perfil.php';
                                </script>";
                    }
       

?>