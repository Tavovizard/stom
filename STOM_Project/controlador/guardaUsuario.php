<?php
	@session_start();
require_once("../modelo/modelo.php");
require_once("../controlador/conexion.php");
  
$contrasena = $_POST['contrasena'];
$passEncriptada = md5($contrasena);


$params = array(
    "nombre" => $_POST['nombre'],
    "contrasena" => $passEncriptada,
    "telefono" => $_POST['telefono'],
    "correo" => $_POST['correo'],
);


$db = Database::getInstance();
$conn = $db->getConnection();
$sesion = new Modelo($conn);

list ($valor,$error) = $sesion->agregaUsuario( $params );
if ( empty( $valor)){
    if ( !empty($error)) $_SESSION["error"] = $error;
}else{
    echo "<script>alert('Su usuario fue registrado exitosamente')
    window.location.href='../vista/login.html';
    </script>";
}

?>
