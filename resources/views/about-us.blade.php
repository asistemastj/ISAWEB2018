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
		<div id="wrapper" class="homepage common-page about-us-page about">
			<!--header Section Start Here -->
			@include('partials.nav')
			<!--header Section Ends Here -->
			<!--banner Section starts Here -->
			<div class="banner spacetop">
				<div class="banner-image parallax">

				</div>
				<div class="banner-text">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Nosotros</h1>
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
					<div class="amazing-features ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<img src="images/truck.jpg" alt="" />
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="amazing-text">
										<div class="heading">
											<span>un pequeña reseña sobre</span>
											<h3>nosotros</h3>
										</div>
										<p>
											TRANSPORTES Y SERVICIOS GENERALES JOSELITO S.A.C. es una empresa de transporte terrestre especializados en el mercado peruano, iniciamos nuestras operaciones hace 38 años bajo el nombre de Transportes Paredes, con el objetivo de transportar mercancía en general, basándose para ello en los permisos de seguridad, calidad y tecnología.
										</p>
										<p>
											Actualmente nos dedicamos al transporte de carga en general para la industria nacional por toda la red de carreteras especialmente de la costa peruana. Contamos con una moderna flota, conformada por 63 tractos remolcadores, 66 cisternas, 29 plataformas, 6 furgón refrigerado y personal altamente calificado, nuestras actividades se desarrollan en la sede principal Trujillo y la sede Lima.
										</p>
										<a href="{{route('contacto')}}" class="button contact-us">contactanos</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="features ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="features-text">
										<div class="heading">
											<span>nuestros</span>
											<h3>valores</h3>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="features-tab bottom-border">

										<i class="icon-ship"></i>
										<div class="tab-text">
											<h5>COMPROMISO</h5>
											<p>
												Vamos más allá de cumplir con una obligación, ponemos toda nuestra capacidad para sacar adelante aquello que se nos ha confiado.
											</p>
										</div>
									</div>
									<div class="features-tab bottom-border">
										<i class="icon-plane"></i>
										<div class="tab-text">
											<h5>SEGURIDAD</h5>
											<p>
												Nos comprometemos siempre con lo que podemos cumplir, informado siempre de cualquier amenaza de incumplimiento de acuerdos comprometidos. Resolveremos inmediatamente cualquier acuerdo.
											</p>
										</div>
									</div>
									<div class="features-tab">
										<i class="icon-truck"></i>
										<div class="tab-text">
											<h5>CONFIABILIDAD</h5>
											<p>
												Velamos porque la información confidencial de nuestro clientes se maneje con absoluta discreción y reserva, para generar un ambiente comercial exitoso.
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6">
									<div class="features-tab bottom-border">
										<i class="icon-train"></i>
										<div class="tab-text">
											<h5>HONESTIDAD</h5>
											<p>
												Actuamos con transparencia en todos nuestros procesos y procedimientos para generar confiabilidad a nuestros  cliente.
											</p>
										</div>
									</div>
									<div class="features-tab bottom-border">
										<i class="icon-clock"></i>
										<div class="tab-text">
											<h5>PUNTUALIDAD</h5>
											<p>
												Estamos comprometidos en aportar nuestra experiencia y conocimiento para lograr satisfacer las necesidades de nuestros clientes con entregas oportunas de las mercancías encomendadas en el tiempo establecido.
											</p>
										</div>
									</div>

									<div class="features-tab">
										<i class="icon-globe"></i>
										<div class="tab-text">
											<h5>CALIDAD</h5>
											<p>
												Nuestro objetivo principal es ofrecer un servicio de calidad, por eso nuestro compromiso es la seguridad e integridad de la carga, desde el momento del cargue hasta su destino final en el sitio de descargue.
											</p>
										</div>
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
			@include('partials.footer')
		</div>
		<!--Wrapper Section Ends Here -->

		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/less.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<!--Parrallax -->
		<script type="text/javascript" src="js/parallax.js"></script>

		<!-- REVOLUTION BANNER CSS SETTINGS -->
	
		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>
	</body>
</html>