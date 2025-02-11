<?php
    // iniciamos session
    require_once("../controlador/controlador.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>STOM</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
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

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="../css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<div class="body-inner">

<!-- Header start -->
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
					       

						<a class="nav-link" href="../vista/indexx.php">
							Inicio
						</a>
                        <a class="nav-link" href="../vista/Tienda.html">
							Tienda
						</a>
					
					<li class="nav-item dropdown">
						<!-- <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
							aria-expanded="false">
							Tienda
						</a>
				        <div class="dropdown-menu">
							<a class="dropdown-item" href="about.html">Xbox</a>
							<a class="dropdown-item" href="service.html">PlayStation</a>
							<a class="dropdown-item" href="career.html">Accesorios</a>
							<a class="dropdown-item" href="testimonial.html">PC´s</a>
						</div> -->
                        
                        
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->

<!-- Slider start -->
<section id="home" class="p-0">
	<div id="main-slide" class="cd-hero">
		<ul class="cd-hero-slider">
			<li class="selected">
				<div class="overlay2">
					<img class="" src="../images/slider/bg1.jpg" alt="slider">
				</div>
				<div class="cd-full-width">
					<h2>De Gamers Para Gamers</h2>
					<h3>Atrevete a entrar a este mundo</h3>
					<a href="../vista/register.html" class="btn btn-primary white cd-btn">Regístrate</a>
					<a href="../vista/login.html" class="btn btn-primary solid cd-btn">Iniciar Sesión</a>
				</div> <!-- .cd-full-width -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="../images/slider/bg2.jpg" alt="slider">
				</div>
				<div class="cd-half-width">
					<h2>La PC de tus sueños</h2>
					<p>Atrevete a armar con nosotros la PC que siempre has querido</p>
				</div> <!-- .cd-half-width -->

				<div class="cd-half-width cd-img-container">
					<img src="../images/slider/bg-thumb1.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
			</li>
			<li>
				<div class="overlay2">
					<img class="" src="../images/slider/bg3.jpg" alt="slider">
				</div>
				<div class="cd-half-width cd-img-container img-right">
					<img src="../images/slider/bg-thumb2.png" alt="">
				</div> <!-- .cd-half-width.cd-img-container -->
				<div class="cd-half-width">
					<h2>Tu desafío es nuestra meta</h2>
					<p>Dinos lo que necesitas y nosotros nos encargamos del resto</p>
				</div> <!-- .cd-half-width -->
			</li>
			<li class="cd-bg-video">
				<div class="cd-full-width">
					<h2>ESTAMOS AQUÍ PARA HACER QUE SUCEDA</h2>
					<h3>Juntos haremos posibles grandes cosas</h3>

				</div> <!-- .cd-full-width -->
                
				<div class="cd-bg-video-wrapper" data-video="../videos/video">
					<!-- video element will be loaded using jQuery -->
				</div> <!-- .cd-bg-video-wrapper -->
			</li>
		</ul>
		<!--/ cd-hero-slider -->

		<div class="cd-slider-nav">
			<nav>
				<span class="cd-marker item-1"></span>
				<ul>
					<li class="selected"><a href="#0"><i class="fa fa-bicycle"></i> Inicio</a></li>
					<li><a href="#0"><i class="fa fa-hotel"></i> Dream</a></li>
					<li><a href="#0"><i class="fa fa-android"></i> Tech</a></li>
					<li class="video"><a href="#0"><i class="fa fa-video-camera"></i> Video</a></li>
				</ul>
			</nav>
		</div> <!-- .cd-slider-nav -->

	</div>
	<!--/ Main slider end -->
</section>
<!--/ Slider end -->


<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Servicios Que Brindamos <span class="title-desc">Un Equipo de Experiencia y Calidad
						</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-cubes"></i></span>
					<h3>Videojuegos</h3>
					<p>Encuentra los títulos más nuevos del mercado</p>
				</div>
			</div>
			<!--/ End first service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".8s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-gamepad"></i></span>
					<h3>Consolas</h3>
					<p>Consigue la consola ideal para tus gustos y presupuesto</p>
				</div>
			</div>
			<!--/ End Second service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.1s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-headphones"></i></span>
					<h3>Accesorios Gaming</h3>
					<p>Combina tu Setup con los mejores accesorios del mercado</p>
				</div>
			</div>
			<!--/ End Third service -->

			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay="1.4s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="fa fa-desktop"></i></span>
					<h3>PC's Gamer</h3>
					<p>Crea la PC Gamer ideal para ti</p>
				</div>
			</div>
			<!--/ End 4th service -->
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Counter Strat -->
<section class="ts_counter p-0">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">1200</span>
				</div>
				<h3>Clientes</h3>
			</div>

			<div class="facts two col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
					<span class="counter">1277</span>
				</div>
				<h3>Ventas</h3>
			</div>

			<div class="facts three col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">869</span>
				</div>
				<h3>Proyectos</h3>
			</div>

			<div class="facts four col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-trophy"></i></span>
				<div class="facts-num">
					<span class="counter">76</span>
				</div>
				<h3>Reconocimientos</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->

<section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ts-padding"
				style="height:650px;background:url(images/image-block-bg.jpg) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h2>Conozca más sobre nuestra empresa</h2>
					<h3>Porque elegirnos</h3>
					<p>Usted puede sentirse seguro al hacer cualquier compra con nosotros, el producto que elija
                        llegara 100% seguro a su destino.
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-bicycle"></i></span>
					<div class="feature-content">
						<h3>Miles de características</h3>
						<p>Puede encontrar algo que se acople a usted de entre todos los accesorios disponibles</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-diamond"></i></span>
					<div class="feature-content">
						<h3>Prestigio nacional</h3>
						<p>Miles de clientes satisfechos en toda la república</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left"><i class="fa fa-street-view"></i></span>
					<div class="feature-content">
						<h3>Apoyo Día y Noche</h3>
						<p>Si necesita ayuda con alguno de los productos que adquirió puede llamarnos a cualquier hora</p>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
	</div>
</section>
<!--/ Image block end -->


<!-- Team start -->
<section id="team" class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
				<h2 class="title">Conoce a nuestro equipo <span class="title-desc">Un equipo de experiencia y calidad</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row text-center">
			<!--/ Team 1 start -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="../images/team/team2.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Gustavo Téllez</h3>
						<p>Diseñador Web</p>
						<div class="team-social">
							<a class="fb" href="https://www.facebook.com/GustavoTellez23"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="https://www.twitter.com/GusSsJ23"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="https://www.instagram.com/gusssj23"><i class="fa fa-instagram"></i></a>
							<a class="linkdin" href="https://www.pinterest.com/GusSsj23"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 1 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInRight">
					<div class="img-hexagon">
						<img src="../images/team/team3.jpg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Octavio Limón</h3>
						<p>Diseñador Web</p>
						<div class="team-social">
							<a class="fb" href="https://www.facebook.com/NekroTavo"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="https://www.twitter.com/tavovizard"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="https://www.instagram.com/tavoreal_"><i class="fa fa-instagram"></i></a>
							<a class="linkdin" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 2 end -->
            <div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="../images/team/team4.jpeg" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Maria Cecilia Ochoa</h3>
						<p>Diseñador Web</p>
						<div class="team-social">
							<a class="fb" href="https://www.facebook.com/cecy.olmos.5"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="https://www.instagram.com/olmos_och"><i class="fa fa-instagram"></i></a>
							<a class="linkdin" href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Team end -->

<!-- Parallax 1 start -->
<section class="parallax parallax1">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Listo para iniciar tus compras</h2>
				<h3>Checa todos los productos que tenemos para ti</h3>
				<p>
					<a href="#" class="btn btn-primary solid">Ir a Tienda</a>
				</p>
			</div>
		</div>
	</div><!-- Container end -->
</section><!-- Parallax 1 end -->



<!-- Clients start -->
<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client1.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client2.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client3.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client4.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client5.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client6.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client7.png" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="../images/clients/client8.png" alt="client">
					</a>
				</figure>
			</div><!-- Owl carousel end -->
		</div><!-- Main row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Clients end -->


	<!-- Footer start -->
	<footer id="footer" class="footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Ventas recientes</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Master Race Xi2000</a></h4>
	            <p class="post-meta">
	              <span class="author">17 de Septiembre, Oaxaca</span>
	            </p>
	          </div>
	        </div><!-- 1st Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Master Race WX1500</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i>14 de Septiembre, Veracruz</span>
	            </p>
	          </div>
	        </div><!-- 2nd Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Master Race 5000X</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i>12 de Septiembre, Tijuana</span>
	            </p>
	          </div>
	        </div><!-- 3rd Latest Post end -->

	      </div>
	      <!--/ End Recent Posts-->


	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Fotos</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/1.jpg">
	              <img src="../images/gallery/1.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/2.jpg">
	              <img src="../images/gallery/2.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/3.jpg">
	              <img src="../images/gallery/3.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/4.jpg">
	              <img src="../images/gallery/4.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/5.jpg">
	              <img src="../images/gallery/5.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/6.jpg">
	              <img src="../images/gallery/6.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/7.jpg">
	              <img src="../images/gallery/7.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/8.jpg">
	              <img src="../images/gallery/8.jpg" alt="">
	            </a>
	            <a class="thumb-holder" data-rel="prettyPhoto" href="images/gallery/9.jpg">
	              <img src="../images/gallery/9.jpg" alt="">
	            </a>
	          </div>
	        </div>
	      </div>
	      <!--/ end flickr -->

	      <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title">Sobre STOM</h3>
	        <p>Somos una empresa multinacional ganadora de distintos premios. Creemos en la calidad y el estándar mundial.</p>
	        <h4>Dirección</h4>
	        <p>Limón #23, Valle de Santiago, GTO</p>
	        <div class="row">
	          <div class="col-md-6">
	            <h4>Correo:</h4>
	            <p>info@stom.com</p>
	          </div>
	          <div class="col-md-6">
	            <h4>Teléfono</h4>
	            <p>+52 1 456 114 3066</p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	            <input type="email" class="form-control" placeholder="Correo Electrónico" required="">
	            <span class="input-group-addon">
	              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
	            </span>
	          </div>
	        </form>
	      </div>
	      <!--/ end about us -->

	    </div><!-- Row end -->
	  </div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2020 STOM. <span>Designed by <a
	              href="https://themefisher.com">STOM.com</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Volver arriba"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="../plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="../plugins/bootstrap/bootstrap.min.js"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="../plugins/style-switcher.js"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="../plugins/owl/owl.carousel.js"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="../plugins/jquery.prettyPhoto.js"></script>
<!-- Bxslider -->
<script type="text/javascript" src="../plugins/flex-slider/jquery.flexslider.js"></script>
<!-- CD Hero slider -->
<script type="text/javascript" src="../plugins/cd-hero/cd-hero.js"></script>
<!-- Isotope -->
<script type="text/javascript" src="../plugins/isotope.js"></script>
<script type="text/javascript" src="../plugins/ini.isotope.js"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="../plugins/wow.min.js"></script>
<!-- Eeasing -->
<script type="text/javascript" src="../plugins/jquery.easing.1.3.js"></script>
<!-- Counter -->
<script type="text/javascript" src="../plugins/jquery.counterup.min.js"></script>
<!-- Waypoints -->
<script type="text/javascript" src="../plugins/waypoints.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="../plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>

</html>