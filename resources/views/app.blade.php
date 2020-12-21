<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewinter.com/demo/html/eventech/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 08:00:34 GMT -->
<head>

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">

	<!-- Mobile Specific Metas
	================================================== -->

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Site Title -->
	<title>Eventech - @yield('title')</title>

	<!--Favicon-->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	
	<!-- CSS
	================================================== -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<!-- Template styles-->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive styles-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- FontAwesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Colorbox -->
	<link rel="stylesheet" href="css/colorbox.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
	
<body>

	<div class="preload"></div>

	<div class="body-inner">

    <!-- Header start -->
    @include('include.header')
	<!--/ Header end -->
    
    @yield('content')

    <!-- Footer start -->
    @include('include.footer')
	<!-- Footer end -->


	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
	<!-- Countdown -->
	<script type="text/javascript" src="js/jquery.jCounter.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<!-- Color box for Popup-->
	<script type="text/javascript" src="js/jquery.colorbox.js"></script>
	<!-- Smoothscroll -->
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<!-- Google Map -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCsa2Mi2HqyEcEnM1urFSIGEpvualYjwwM"></script>
	<!-- Doc https://developers.google.com/maps/documentation/javascript/get-api-key -->
	<!-- For latitude and longitude use http://www.latlong.net/ -->

	<script type="text/javascript" src="js/gmap3.min.js"></script>

	<script type="text/javascript">

		/* Event counter */

		$(".countdown").jCounter({
		  	date: '21 October 2018 12:00:00',
		  	fallback: function() { console.log("count finished!") }
		});


		/* Event map */

		var eventmap = {lat: 40.742964, lng: -73.992277};

    	$('.map')
      .gmap3({
      	zoom: 13,
        	center: eventmap,
        	mapTypeId : google.maps.MapTypeId.ROADMAP,
	      scrollwheel: false
      })

      .marker({
        position: eventmap
      })

      .infowindow({
        	position: eventmap,
        	content: "NYC Seminar and Conference Center, New York"
      })

      .then(function (infowindow) {
        	var map = this.get(0);
        	var marker = this.get(1);
        	marker.addListener('click', function() {
         	infowindow.open(map, marker);
        	});
      });


	</script>

	<!-- Template custom -->
	<script type="text/javascript" src="js/custom.js"></script>
	
	</div><!-- Body inner end -->
</body>

<!-- Mirrored from themewinter.com/demo/html/eventech/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Feb 2019 08:01:40 GMT -->
</html>