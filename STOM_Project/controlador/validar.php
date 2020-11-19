<?php
    @session_start();
    require_once("../modelo/modelo.php");
    
    $contrasena = $_POST['contrasena'];
    $passEncriptada = md5($contrasena);

    $params = array(
            "nombre" => $_POST['nombre'],
            "contrasena" => $passEncriptada,
            );
    //print_r($params); die();

    //instancia y conexión bd
    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new modelo($conn);

    list ($valor, $error) = $sesion->validaUsuario($params);
    if (empty($valor)){
        echo "<script>alert('El usuario o la contraseña son incorrectos');
        window.location.href='../vista/login.html';
        </script>";
    }else{
        echo "<script>alert('Bienvenido');
        window.location.href='../vista/indexx.php';
        </script>";
    }
?>