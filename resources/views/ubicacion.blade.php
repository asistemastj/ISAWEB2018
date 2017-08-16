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
		<link rel="stylesheet" href="css/jquery-ui.css">

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
		<div id="wrapper" class="homepage common-page location-page">
			<!--header Section Start Here -->
			@include('partials.nav')
			<!--header Section Ends Here -->
			<!--banner Section starts Here -->
			<div class="banner spacetop">
				<div class="banner-image-plane parallax">

				</div>
				<div class="banner-text">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h1>Ubicación</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--banner Section ends Here -->
			<!--Section area starts Here -->
			<section id="section">
				<!--Section box starts Here -->
				<div class="section shop-section">
					<div class="our-location ">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="heading">
										<span>Nuestra</span>
										<h3>ubicación</h3>
									</div>
									<div class="our-office">
										<div>
											<div id="dvMap" class="mapping"></div>
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
			<!--Footer area starts Here -->
			@include('partials.footer')
			<!--Footer area ends Here -->
		</div>
		<!--Wrapper Section Ends Here -->

		<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="js/less.js"></script>
		<script type="text/javascript" src="js/owl.carousel.js"></script>
		<script type="text/javascript" src="js/jquery.selectbox-0.2.min.js"></script>
		<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="js/gmap.js"></script>

		<!-- REVOLUTION BANNER CSS SETTINGS -->
		<script type="text/javascript" src="js/site.js"></script>
		<script src="js/script.js" type="text/javascript"></script>

		<script type="text/javascript" src="js/infobox.js"></script>
		<script src="js/custom-mapscript.js"></script>

	</body>
</html>