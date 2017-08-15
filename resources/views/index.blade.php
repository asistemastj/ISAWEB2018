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

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
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
		<div id="wrapper" class="homepage homepage-1">
			<!--header Section Start Here -->
			@include('partials.nav')
			<!--header Section Ends Here -->
			<!--banner Section starts Here -->
			<div class="bannercontainer spacetop">
				<div class="banner">
					<ul>
						<!-- THE BOXSLIDE EFFECT EXAMPLES  WITH LINK ON THE MAIN SLIDE EXAMPLE -->

						<li data-transition="random" data-slotamount="1">
							<img src="images/banner-plane.jpg" alt="" />
							<div class="banner-text">
								<div class="caption sft big_white" data-x="0" data-y="100" data-speed="center" data-start="1700" data-easing="Power4.easeInOut">
									<a href="#" class="shipping">ground shipping</a>
								</div>
								<div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
									<h2>ONE STOP SOLUTION
									YOUR TRANSPORT
									REQUIREMENTS</h2>
								</div>
								<div class="caption lfr medium_grey"  data-x="left" data-y="center" data-speed="300" data-start="2000">
									<a href="{{route('servicios')}}" class="services-link">Nuestro Servicio</a>
								</div>
							</div>
						</li>
						<li data-transition="random" data-slotamount="1">
							<img src="images/banner-train.jpg" alt="" />
							<div class="banner-text">
								<div class="caption sft big_white" data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="Power4.easeInOut">
									<a href="#" class="shipping">ground shipping</a>
								</div>
								<div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
									<h2>ONE STOP SOLUTION
									YOUR TRANSPORT
									REQUIREMENTS</h2>
								</div>
								<div class="caption lfr medium_grey" data-x="left" data-y="center" data-speed="300" data-start="2000">
									<a href="{{route('servicios')}}" class="services-link">Nuestro Servicio</a>
								</div>
							</div>
						</li>
						<li data-transition="random" data-slotamount="1">
							<img src="images/banner-truck.jpg" alt="" />
							<div class="banner-text">
								<div class="caption sft big_white" data-x="0" data-y="100" data-speed="700" data-start="1700" data-easing="Power4.easeInOut">
									<a href="#" class="shipping">ground shipping</a>
								</div>
								<div class="caption sfb big_orange clearfix"  data-x="100" data-y="350" data-speed="500" data-start="1900" data-easing="Power4.easeInOut">
									<h2>ONE STOP SOLUTION
									YOUR TRANSPORT
									REQUIREMENTS</h2>
								</div>
								<div class="caption lfr medium_grey"  data-x="left" data-y="center" data-speed="300" data-start="2000">
									<a href="{{route('servicios')}}" class="services-link">Nuestro Servicio</a>
								</div>
							</div>
						</li>

					</ul>
				</div>
			</div>
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section">
					<div class="services">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="heading">
										<span>LOGISTIC SERVICES</span>
										<h2>OUR SERVICES</h2>
									</div>
								</div>
							</div>
							<div id="services-slides" class="services-slider">
								<div class="slides-tab zoom">
									<figure>
										<a href="#"><img src="images/goods-train.jpg" alt="" /></a>
									</figure>
									<div class="slides-text">
										<h4><a href="#">GROUND SHIPPING</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adip
											iscing elit. Aenean in ante magna. Quisque
											sodales, exid fermentum tempor.
										</p>
										<a href="#" class="read-more">read more <span>></span></a>
									</div>
								</div>
								<div class="slides-tab zoom">
									<figure>
										<a href="#"><img src="images/plane.jpg" alt="" /></a>
									</figure>
									<div class="slides-text">
										<h4><a href="#">AIR FREIGHT</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adip
											iscing elit. Aenean in ante magna. Quisque
											sodales, exid fermentum tempor.
										</p>
										<a href="#" class="read-more">read more <span>></span></a>
									</div>
								</div>
								<div class="slides-tab zoom">
									<figure>
										<a href="#"><img src="images/yard.jpg" alt="" /></a>
									</figure>
									<div class="slides-text">
										<h4><a href="#">SEA DELIVERY</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adip
											iscing elit. Aenean in ante magna. Quisque
											sodales, exid fermentum tempor.
										</p>
										<a href="#" class="read-more">read more <span>></span></a>
									</div>
								</div>
								<div class="slides-tab zoom">
									<figure>
										<a href="#"><img src="images/goods-train.jpg" alt="" /></a>
									</figure>
									<div class="slides-text">
										<h4><a href="#">GROUND SHIPPING</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adip
											iscing elit. Aenean in ante magna. Quisque
											sodales, exid fermentum tempor.
										</p>
										<a href="#" class="read-more">read more <span>></span></a>
									</div>
								</div>
								<div class="slides-tab zoom">
									<figure>
										<a href="#"><img src="images/plane.jpg" alt="" /></a>
									</figure>
									<div class="slides-text">
										<h4><a href="#">AIR FREIGHT</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adip
											iscing elit. Aenean in ante magna. Quisque
											sodales, exid fermentum tempor.
										</p>
										<a href="#" class="read-more">read more <span>></span></a>
									</div>
								</div>
								<div class="slides-tab zoom">
									<figure>
										<a href="#"><img src="images/yard.jpg" alt="" /></a>
									</figure>
									<div class="slides-text">
										<h4><a href="#">SEA DELIVERY</a></h4>
										<p>
											Lorem ipsum dolor sit amet, consectetur adip
											iscing elit. Aenean in ante magna. Quisque
											sodales, exid fermentum tempor.
										</p>
										<a href="#" class="read-more">read more <span>></span></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="features">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<div class="features-text">
										<div class="heading">
											<span>AMAZING FEATURES</span>
											<h3>WE OFFER QUICK &
											POWERFUL SOLUTION
											FOR TRANSPORT</h3>
										</div>

										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing
											elit. Aenean in ante magna. Quisque sodales, exid
											fermentum tempor.
										</p>
										<a href="service.html" class="services-link button">our services</a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-8 custom-padding">
									<div class="row">
										<div class="col-xs-12 col-sm-6">
											<div class="features-tab">

												<i class="icon-ship"></i>
												<div class="tab-text">
													<h5>QUICKEST CARGO</h5>
													<p>
														Lorem ipsum dolor sit amet, cons
														ctetur adipiscing elit. Aenean in
														ante magna. Quisque
													</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="features-tab">
												<i class="icon-train"></i>
												<div class="tab-text">
													<h5>FAST AIR FREIGHT</h5>
													<p>
														Lorem ipsum dolor sit amet, cons
														ctetur adipiscing elit. Aenean in
														ante magna. Quisque
													</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="features-tab">
												<i class="icon-plane"></i>
												<div class="tab-text">
													<h5>GROUND SHIPPING</h5>
													<p>
														Lorem ipsum dolor sit amet, cons
														ctetur adipiscing elit. Aenean in
														ante magna. Quisque
													</p>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-sm-6">
											<div class="features-tab">
												<i class="icon-clock"></i>
												<div class="tab-text">
													<h5>TIMELY DELIVERY</h5>
													<p>
														Lorem ipsum dolor sit amet, cons
														ctetur adipiscing elit. Aenean in
														ante magna. Quisque
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="about">
						<div class="figure parallax">
							
						</div>
						<div class="transport-king">
							<div class="about-us">
								<div class="description">
									<div class="heading">
										<span>Un poco de nosotros</span>
										<h3>SOBRE TRANSPORTES JOSELITO</h3>
									</div>

									<p>
										Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat elem
										entum tempor. Duis porta lectus ut dui consequat, ut porttitor sapien bibend
										um. Nulla sagittis, turpis sit amet feugiat pretium, tellus tortor aliquam nibh,
										et consectetur nunc odio at dolor.
									</p>
								</div>
							</div>
							<div class="testimonial-section">
								<blockquote class="custom-blockquote">
									<div class="spanish">
										<p>
											Integer quis convallis dui, ac dignissim eros. Class aptent tacit
											sociosqu ad litora torquent per conubia nostra, per inceptos
											himenaeos. Nulla pharetra lorem non lorem pharetra.
										</p>
									</div>
									<footer class="mission">
										<h5>Nuestra Misión</h5>
										<span>Mensaje del Gerente General</span>
									</footer>
								</blockquote>
							</div>

						</div>
					</div>
					
					<div class="testimonial">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 center">
									<div class="heading">
										<span>Las Empresas que confian en nosotros</span>
										<h2>testimonios</h2>
									</div>

									<div class="design-line">
										<span class="design"></span>
									</div>
								</div>
							</div>
							<div class="testimonial-text" id="testimonial-text">
								<div class="feedback">
									<blockquote class="custom-quote">
										<span class="fa fa-quote-left custom-fa"></span>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons
											entum tempor. Duis porta lectus ut dui consequat, ut porttitor sap
											um. Nulla sagittis, turpis sit amet feugiat pretium, tellus tortor
											et consectetur nunc odio at dolor.
										</p>
										<footer>
											<h6>JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
										</footer>
									</blockquote>
								</div>
								<div class="feedback">
									<blockquote class="custom-quote">
										<span class="fa fa-quote-left custom-fa"></span>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons
											entum tempor. Duis porta lectus ut dui consequat, ut porttitor sap
											um. Nulla sagittis, turpis sit amet feugiat pretium, tellus tortor
											et consectetur nunc odio at dolor.
										</p>
										<footer>
											<h6>JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
										</footer>
									</blockquote>
								</div>
								<div class="feedback">
									<blockquote class="custom-quote">
										<span class="fa fa-quote-left"></span>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons
											entum tempor. Duis porta lectus ut dui consequat, ut porttitor sap
											um. Nulla sagittis, turpis sit amet feugiat pretium, tellus tortor
											et consectetur nunc odio at dolor.
										</p>
										<footer>
											<h6>JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
										</footer>
									</blockquote>
								</div>
								<div class="feedback">
									<blockquote class="custom-quote">
										<span class="fa fa-quote-left"></span>
										<p>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc cons
											entum tempor. Duis porta lectus ut dui consequat, ut porttitor sap
											um. Nulla sagittis, turpis sit amet feugiat pretium, tellus tortor
											et consectetur nunc odio at dolor.
										</p>
										<footer>
											<h6>JOHNATHAN DOE <span>DESIGNER, THEME DESIGNER</span></h6>
										</footer>
									</blockquote>
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
		<!--Wrapper Section Ends Here -->

		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/less.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>

		<!--Parrallax -->
		<script type="text/javascript" src="js/parallax.js"></script>

		<!-- jQuery REVOLUTION Slider  -->
		<script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
		<script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="js/revolution.js"></script>

		<script src="js/script.js" type="text/javascript"></script>
		<script type="text/javascript" src="js/site.js"></script>

	</body>
</html>