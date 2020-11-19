<?php
    // iniciamos session
    require_once("../controlador/controlador.php");
    session_start();

    if(isset($_SESSION['usuario'])){
        
        $nombreU = $_SESSION['usuario'];
    
    }else{
        session_destroy();
        echo "<script>alert('No has iniciado sesión');
        window.location.href='../vista/login.html';
        </script>";
    }
?>

<img class="" src="../images/slider/bg1.jpg" alt="slider">