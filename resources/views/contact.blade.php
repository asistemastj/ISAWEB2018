<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Transport</title>
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
          <div class="col-xs-12"> <a href="#" class="shipping">ground shipping</a>
            <h1>contact us</h1>
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
              <div class="heading "> <span>our</span>
                <h3>contact form</h3>
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
                    <button type="submit" class="comment-submit qoute-sub" ng-disabled="submitButtonDisabled">Submit</button>
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
      <div class="query ">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-10">
              <h5>DO YOU STILL HAVE A QUESTION REGARING OUR SERVICES?</h5>
              <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc consequat elementum tempor. Duis porta lectus ut dui consequat. </p>
            </div>
            <div class="col-xs-12 col-sm-2"> <a href="{{route('contacto')}}" class="contact-us button">contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
    <!--Section box ends Here --> 
  </section>
  <!--Section area ends Here --> 
  <!--Footer area starts Here -->
  <footer id="footer"> 
    <!--Footer box starts Here -->
    <div class="footer  clearfix">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="quick-links">
              <h5>QUICK LINKS</h5>
            </div>
            <div class="quick-list">
              <ul>
                <li> <a href="#">ground shipping</a> </li>
                <li> <a href="#">air freight</a> </li>
                <li> <a href="#">sea freight</a> </li>
                <li> <a href="#">storage &amp; packaging</a> </li>
              </ul>
            </div>
            <div class="quick-list">
              <ul>
                <li> <a href="#">rail shipping</a> </li>
                <li> <a href="#">logistic solutions</a> </li>
                <li> <a href="#">cargo shipping</a> </li>
              </ul>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="our-address">
              <h5>contact us</h5>
              <div class="address">
                <h6>transport king</h6>
                <address>
                Contact Address will appear here, some text gonna
                appear here, Ney York City, - 10001, USA
                </address>
                <div class="phone"> <span>phone : <a href="tel:5917890123">591 7890 123</a></span> <span>email : <a href="mail">info@transporttheme.com</a></span> </div>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
            <div class="sign-up">
              <h5>newsletter signup</h5>
              <p> If you want receive our all weekly updates about new
                offers and discount, signup below. </p>
              <form>
                <input id="mail" type="text" placeholder="Email Address" name="email" />
                <!-- <input id="submit" type="submit" value="" class="fa fa-paper-plane-o" /> -->
                <button class="fa fa-paper-plane"></button>
              </form>
            </div>
          </div>
        </div>
        <div class="row custom-row">
          <div class="col-xs-12 col-sm-5">
            <div class="copyright"> <span>Copyright 2015. All Rights Reserved by <a href="#">Transport.</a></span> </div>
          </div>
          <div class="col-xs-12 col-sm-7 no-wrap-mobile">
            <div class="footer-nav">
              <ul>
                <li> <a href="#">terms of use</a> </li>
                <li> <a href="#">legal desclaimer</a> </li>
                <li> <a href="#">privacy policy</a> </li>
                <li> <a href="#">support</a> </li>
                <li> <a href="#">sitemap</a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Footer box ends Here --> 
  </footer>
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