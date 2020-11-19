<?php
	require_once("../modelo/modelo.php");
	
	function instancia( ){
		$db=Database::getInstance();
		$conn = $db->getConnection();
		$MySQL = new Modelo($conn);
		return $MySQL;
	}
	
    function perfil($id){
        $MySQL = instancia();
        $query = $MySQL->datosPerfil($id);
    
        $nombre = $contrasena = $telefono = $correo = null;
    
        foreach ($query as $filas){
            $nombre = $filas['nombre'];
            $contrasena = $filas['contrasena'];
            $telefono = $filas['telefono'];
            $correo = $filas['correo'];
        }
        
        $resultado[] = $nombre;
        $resultado[] = $contrasena;
        $resultado[] = $telefono;
        $resultado[] = $correo;
        
        return $resultado;
    
    }

?>

