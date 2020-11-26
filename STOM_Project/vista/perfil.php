<?php
    // iniciamos session
    require_once("../controlador/controlador.php");
    session_start();

    if(isset($_SESSION['nombre'])){
        
        $nombreU = $_SESSION['nombre'];
        $id = $_SESSION['id'];
        
        //print_r($id); die();
        list($nombre, $contrasena, $telefono, $correo) = perfil($id);
        
    }else{
        session_destroy();
        echo "<script>alert('No has iniciado sesión');
        window.location.href='../vista/login.html';
        </script>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo "$nombreU | STOM"; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../css/perfil.css">
          <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="../plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="../plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="../plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="../plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="../plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="../plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="../css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">
        
    </head>
    <body>
        <header id="header" class="fixed-top header-solid animated fadeInDown" role="banner">
	<a class="navbar-brand navbar-bg" href="../vista/index.html"><img class="img-fluid float-right" src="../images/logo.png" alt="logo"></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					       
                        <a class="nav-link" href="C:/XAMPP/htdocs/STOM/vista/index.html">
				            Carrito
						</a>
						<a class="nav-link" href="../vista/indexx.php">
							Inicio
						</a>
                        <a class="nav-link" href="../vista/Tienda.html">
							Tienda
						</a>
                       
					
					<li class="nav-item dropdown">
						
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<?php echo "$nombreU"; ?>
						</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="perfil.php">Perfil</a>
                          <a class="dropdown-item" href="../controlador/logout.php">Salir</a>  
                        </div>
                        
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
        <div class="header">
            <img class="avatar" src="../images/avatares/61e3be3d46618fcf6eba1b1c452fd5fd.jpg"/>
            <h1 class="user-name"><?php echo "$nombreU"; ?></h1>
        </div>
        <ul class="register-box">
            <li>
                <form action="../controlador/modifUsuario.php" method="post">
                <label for="username">Usuario</label>
                <input type="text" placeholder="Ingresa tu usuario" name="nombre" value="<?php echo"$nombre" ?>" required>
                <label for="password">Contraseña</label>
                <input type="password"  name="contrasena" Value="<?php echo"$contrasena" ?>" readonly>
                <label for="text">Telefono</label>
                <input type="text" placeholder="Ingresa tu numero de telefono" name="telefono" value="<?php echo"$telefono" ?>" required>
                <label for="correo">Correo</label>
                <input type="text" placeholder="Ingresa tu correo" name="correo" value="<?php echo"$correo" ?>" required>
                <input type="submit" value="Actualizar">
                </form>
            </li>
        </ul>
        
    </body>
</html>