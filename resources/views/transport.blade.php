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
  <div class="loader"> Loading... </div>
</div>
<!-- Loader Ends here --> 
<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page about-us-page about"> 
  <!--header Section Start Here -->
  @include('partials.nav')
  <!--header Section Ends Here --> 
  <!--banner Section starts Here -->
  <div class="banner spacetop">
    <div class="banner-image-plane parallax"> </div>
    <div class="banner-text">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <h1>transporte</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--banner Section ends Here --> 
  <!--Section area starts Here -->
  <section id="section"> 
    <!--Section box starts Here -->
    <div class="section  team-wrap air-fright storage transport-page">
      <div class="team">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-sm-8 col-xs-12">
              <div class="heading"> <span>nuestro</span>
                <h2 class="h3"> servicio de transporte </h2>
              </div>
              <div class="air-fright-img-part"> <img src="images/trucks.jpg" alt="" />
                <p> TRANSPORTES Y SERVICIOS GENERALES JOSELITO S.A.C. es una empresa de transporte terrestre especializados en el mercado peruano, iniciamos nuestras operaciones hace 38 años bajo el nombre de Transportes Paredes, con el objetivo de transportar mercancía en general, basándose para ello en los permisos de seguridad, calidad y tecnología. </p>
              </div>
              <div class="service-list-wrap">
                <h3 class="h5"> Beneficios </h3>
                <ul class="service-list">
                  <li> Seguridad garantizada de sus envios desde su orignen hasta su destino. </li>
                  <li> Conductores experimentados, puntuales y lo más importante RESPONSABLES. </li>
                  <li> Una flota de vehiculos modernos, que cumplen con todas las normas de seguridad y certificaciones. </li>
                </ul>
                <p> Actualmente nos dedicamos al transporte de carga en general para la industria nacional por toda la red de carreteras especialmente de la costa peruana. Contamos con una moderna flota, conformada por 63 tractos remolcadores, 66 cisternas, 29 plataformas, 6 furgón refrigerado y personal altamente calificado, nuestras actividades se desarrollan en la sede principal Trujillo y la sede Lima. </p>
                <strong>Contactanos hoy al: <a href="#">(044) 612240 </a></strong> </div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-12">
              <div class="service-quote-wrap">
                <div class="quote">
                  <h3 class="h5"> quieres una cotización ? </h3>
                  <p> Puedes mandarnos un email con total confianza, estaremos felices de responder a todas sus dudas, dele click al boton de abajo.</p>
                  <a class="button contact-us" href="{{route('contacto')}}">Contactanos</a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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

<!-- REVOLUTION BANNER CSS SETTINGS --> 

<script src="js/script.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/site.js"></script>
</body>
</html>