<?php
	require_once("../controlador/conexion.php");
	require_once("../controlador/controlador.php");

function agregaUsuario( $params ){
            $error = "";
            $valor = "";
            $id = $params["idusuario"];
            $nombre = $params["nombre"];
            $telefono = $params["telefono"];
            $correo = $params["correo"];
            
            $query = "UPDATE usuarios SET nombre='$nombre', telefono='$telefono', correo='$correo' WHERE idusuario='$id'";
            
            
                
                if(!empty( $nombre) && !empty( $telefono) && !empty( $correo)) {
                    if(! $this->conn->query($query)){
                        $error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
                    }
                    $valor = $this->conn->affected_rows;
                }
            $resul[] = $valor;
            $resul[] = $error;
            return $resul;
        }