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
<body ng-app="websiteApp">
<!-- Loader Starts here -->
<div class="loader-block">
  <div class="loader"> Loading... </div>
</div>
<!-- Loader Ends here --> 
<!--Wrapper Section Start Here -->
<div id="wrapper" class="homepage common-page contact-us-page"> 
  <!--header Section Start Here -->
  @include('partials.nav')
  <!--header Section ends Here --> 
  <!--banner Section starts Here -->
  <div class="banner service-banner spacetop">
    <div class="banner-image-plane parallax"> </div>
    <div class="banner-text">
      <div class="container">
        <div class="row">
            <h1>contactenos</h1>
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
      <div class="contact-form">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-6">
              <div class="heading "> <span>Nuestro</span>
                <h3>Formulario de Contacto</h3>
              </div>
              <div class="contact-form-box " ng-controller="FormController">
                <form ng-submit="submitForm()" name="contactForm" method="post"  novalidate id="contact">
                  <div ng-class="{'successMessage' : successsubmission}" ng-bind="successsubmissionMessage" id="success"></div>
                  <div class="row">
                    <input id="name" class="contact-name" type="text" placeholder="Name*" ng-model="formData.name" ng-class="{'error' : errorName}"/>
                    <input id="email" class="contact-mail" type="text" placeholder="Email*" ng-model="formData.email" ng-class="{'error' : errorEmail}"/>
                    <input id="sub" class="contact-subject" type="text" placeholder="Subject*" ng-class="{'error' : errorSubject}" ng-model="formData.subject"/>
                    <textarea placeholder="Comment*" id="message" ng-model="formData.message" ng-class="{'error' : errorTextarea}"></textarea>
                    <!--<input id="submit" class="comment-submit qoute-sub" type="button"  value="submit">-->
                    <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">Enviar</button>
                  </div>
                  <div ng-class="{'submissionMessage' : submission}" ng-bind="submissionMessage" style="float:right; color: red;"></div>
                </form>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6">
              <div class="map-box " id="map-box"> </div>
            </div>
          </div>
        </div>
      </div>
      <div class="location parallax">
        <div class="">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <div class="heading"> <span>more</span>
                  <h3>locations</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div id="location-slides" class="location-slider">
                <div class="location-slide-tab">
                  <h6>canada</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>singapore</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>malesia</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>canada</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>singapore</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>malesia</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>canada</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>singapore</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
                <div class="location-slide-tab">
                  <h6>malesia</h6>
                  <address>
                  Second Street Nager <br />
                  Howysala tower, canada 8856
                  </address>
                  <span class="call">call : <a href="tel:885955485596">8859 5548 5596</a></span> <span class="location-email">email : <a href="mailto:info@trucker.com"> info@trucker.com</a></span> </div>
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
<script src="js/angular.js"></script> 
<script type="text/javascript" src="js/app.js"></script> 
<script type="text/javascript" src="js/less.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script type="text/javascript" src="js/parallax.js"></script> 
<script src="http://maps.google.com/maps/api/js?sensor=true"></script> 
<script type="text/javascript" src="js/gmap.js"></script> 
<script type="text/javascript" src="js/vailidation.js"></script> 
<script src="js/script.js" type="text/javascript"></script> 
<script type="text/javascript" src="js/site.js"></script> 

</body>
</html>