
<?php
	require_once("../controlador/conexion.php");
	require_once("../controlador/controlador.php");
	
	
	class Modelo{
		
		private $conn;
		
		function __construct( $conexion ){
			$this->conn = $conexion;
		}

		function select( $consulta ){ 
		    $this->total_consultas++;
		    $resultado = mysqli_query($this->conn, $consulta);
		    if(!$resultado){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	
		    }
		    return $resultado;
		}
		
		function mostrarTablas( ){
			$sqlTablas = "SELECT TABLE_NAME as 'tabla' FROM INFORMATION_SCHEMA.tables ";
			$sqlTablas .= "WHERE TABLE_SCHEMA='sistema_archivos'";
			//Se ejecuta la consulta
			$resTablas = mysqli_query($this->conn, $sqlTablas);
			if( !$resTablas ){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	$alert = 'danger';
			}
			$resultado = array();
			while($row = mysqli_fetch_array($resTablas))
			{
				$resultado[] = $row['tabla'];
			}
			return $resultado;
		}

		function agregaUsuario( $params ){
            $error = "";
            $valor = "";
            $nombre = $params["nombre"];
            $contrasena = $params["contrasena"];
            $telefono = $params["telefono"];
            $correo = $params["correo"];
            
            $query = "INSERT INTO usuarios (nombre, contrasena, telefono, correo ) VALUES ('$nombre', '$contrasena', '$telefono', '$correo');";
            
                
                if(!empty( $nombre) && !empty( $contrasena) && !empty( $telefono) && !empty( $correo)) {
                    if(! $this->conn->query($query)){
                        $error = 'Ocurrio un error ejecutando el query [' . $this->conn->error . ']';
                    }
                    $valor = $this->conn->affected_rows;
                }
            $resul[] = $valor;
            $resul[] = $error;
            return $resul;
        }
        
        function validaUsuario($params){
            $error = "";
            $valor = "";
            $nombre = $params["nombre"];
            $contrasena = $params["contrasena"];
            
            //CHECAR
            $passEncriptada = password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>10));
            //CHECAR
            
            $query = "SELECT * FROM usuarios WHERE nombre = '".$nombre."' AND contrasena = '".$contrasena."';";
            
            $resultado = mysqli_query($this->conn, $query);
            if(mysqli_num_rows($resultado)!=0){
                $valor = "OK";
                @session_start();
                $_SESSION["logueado"] = TRUE;
                
                while($row = mysqli_fetch_array($resultado))
                {
                    $_SESSION["nombre"] = $row['nombre'];
                    $_SESSION["id"] = $row['idusuario'];
                                    }
            }
            $resul[] = $valor;
            $resul[] = $error;
            return $resul;
        }
        
        
        
        function datosPerfil ($id){
            $query = "SELECT * FROM usuarios WHERE idusuario = ".$id;
            $resultado = mysqli_query($this->conn, $query);
            if( !$resultado){
                $error = 'MySQL Error:' . mysqli_connect_error();
            }
            return $resultado;
        }
    }