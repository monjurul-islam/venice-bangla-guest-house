<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="webthemez">
<title>Venice Bangla Guest House</title>
<!-- core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="jquery-ui/jquery-ui.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/slider-style.css" />
<link rel="stylesheet" type="text/css" href="css/slider-custom.css" />
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
<link rel="shortcut icon" href="images/logo.png">
<style>
      #map-canvas {
        height: 100%;
        margin: 0;
        padding: 0;
      }

    </style>

</head>

<body id="home" style="overflow:hidden;">
<header id="header">
  <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">
        <div class="h4" style="text-shadow:1px 1px 2px rgba(0, 0, 0, 0.5); color:seashell; padding:0; margin:0;"><img src="images/logo.png" alt="logo" style="height:50px;"></div>
        </a> </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li class="scroll active"><a href="index.php">Back To Website</a></li>
        </ul>
      </div>
    </div>
    <!--/.container--> 
  </nav>
  <!--/nav--> 
</header>
<!--/header-->

<section id="portfolio">
  <div class="container">
    <div class="section-header">
      <h2 class="section-title wow fadeInDown">Map</h2>
      <p class="wow fadeInDown">Venice Bangla Guest House in Google Map<br>
       </p>
    </div>
    <div class="container" id="map-canvas" style="height:350px; width:100%; "></div>
  
<div > &copy; 2015 Venice Bangla Guest House. Developed By- <a target="_blank" href="http://srasel.com/" >S M Monjurul Islam</a> </div>  
  </div>
  <!--/.container--> 
</section>

      
      



<!--/#business-stats-->



<!--/#footer--> 

<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="jquery-ui/jquery-ui.js"></script> 
<script src="js/mousescroll.js"></script> 
<script src="js/smoothscroll.js"></script> 
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/jquery.inview.min.js"></script> 
<script src="js/wow.min.js"></script> 
<script type="text/javascript" src="js/jquery.ba-cond.min.js"></script> 
<script type="text/javascript" src="js/jquery.slitslider.js"></script> 
<script type="text/javascript" src="js/slitslider-custom.js"></script> 
<script src="js/custom-scripts.js"></script> 



<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script>
// This example adds a marker to indicate the position
// of Bondi Beach in Sydney, Australia
function initialize() {
  var mapOptions = {
    zoom: 20,
    center: new google.maps.LatLng(45.4922098,12.2428783)
  }
  var map = new google.maps.Map(document.getElementById('map-canvas'),
                                mapOptions);

  var image = 'images/ico/beachflag.png';
  var myLatLng = new google.maps.LatLng(45.4922098,12.2428783);
  var beachMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      icon: image
  });
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>



</body>
</html>