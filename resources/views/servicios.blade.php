<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Transportes Joselito</title>
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">

		<!-- Google Font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
		<!-- Font Awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css" />

		<!-- Bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/dropdown.css" />

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

		<link rel="stylesheet" href="css/owl.carousel.css" />
		<link rel="stylesheet" href="css/global.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		<link href="css/skin.less" rel="stylesheet/less">
	</head>
	<body>
		<!-- Loader Starts here -->
		<div class="loader-block">
			<div class="loader">
				Loading...
			</div>
		</div>
		<!-- Loader Ends here -->
		<!--Wrapper Section Start Here -->
		<div id="wrapper" class="homepage common-page service-page">
			<!--header Section Start Here -->
			@include('partials.nav')
			<!--header Section ends Here -->
			<!--banner Section starts Here -->
			<div class="banner service-banner spacetop">
				<div class="banner-image-plane parallax">
					
				</div>
				<div class="banner-text">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Servicios</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section">
					<div class="other-services ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 clearfix">
									<div class="heading">
										<span>nuestros</span>
										<h3>servicios</h3>
									</div>
								</div>
								<div class="col-xs-12 service-category">
									<div class="service-tab zoom">
										<figure>
											<a href="#"> <img src="images/truck-2.jpg" alt="" /> </a>
										</figure>
										<div class="service-text">
											<h5>Transporte de carga pesada</h5>
											<p>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
											</p>
											<a class="services-link button button-hover" href="#">Leer más</a>
										</div>
									</div>
									<div class="service-tab zoom">
										<figure class="pos-t">
											<a href="#"> <img src="images/dock-yard.jpg" alt="" /> </a>
										</figure>
										<div class="service-text">
											<h5>Transporte de combustible</h5>
											<p>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
											</p>
											<a class="services-link button button-hover" href="#">Leer más</a>
										</div>
									</div>
									<div class="service-tab zoom">
										<figure>
											<a href="#"> <img src="images/man.jpg" alt="" /> </a>
										</figure>
										<div class="service-text">
											<h5>transporte frigorifico</h5>
											<p>
												Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
											</p>
											<a class="services-link button button-hover" href="#">Leer más</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="parallax-window3 custom-window" data-parallax="scroll" data-image-src="images/parallex-image.jpg">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="more-services-text ">
										<h3>Más sevicios</h3>
										<p>
											Tambien hacemos transporte a vehiculos pesador, melaza y otros productos, los cuales no son confiados por nuestros clientes, a los cuales siempre atendemos, para brindarle el sevicio que se merecen.
										</p>
										<a class="services-link button button-hover" href="#">Ver más servicios</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					@include('partials.banner')
				</div>
	
		<!--Section box ends Here -->
		</section>
		<!--Section area ends Here -->
		<!--Footer area starts Here -->
		@include('partials.footer')
		<!--Footer area ends Here -->

		</div>
		<!--Wrapper Section ends Here -->

		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/less.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/parallax.js"></script>
		
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</body>
</html>