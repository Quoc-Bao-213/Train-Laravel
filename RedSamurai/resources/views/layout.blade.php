<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Red Samurai | Home</title>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('css/tooltipster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
    
	<!-- favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">
</head>
<body>

	<!--HEADER-->
	@include('partials.header')
	<!--/HEADER-->

	@yield('content')

	<!--FOOTER-->
	@include('partials.footer')
	<!--/FOOTER-->

<!--jQuery-->
<script src="{{ asset('js/jquery-1.11.1.min.js') }}"></script>
<!--bxSlider-->
<script src="{{ asset('js/jquery.bxslider.min.js') }}"></script>
<!--imgLiquid-->
<script src="{{ asset('js/imgLiquid-min.js') }}"></script>
<!-- Tooltipster -->
<script src="{{ asset('js/jquery.tooltipster.min.js') }}"></script>
<!--easyPieChart-->
<script src="{{ asset('js/jquery.easypiechart.min.js') }}"></script>
<!--Waypoints-->
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<!--WoW Animations-->
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--Menu-->
<script src="{{ asset('js/menu.js') }}"></script>
<!--Main-->
<!-- Custom js -->
@yield('js')
<script src="{{ asset('js/main.js') }}"></script>
<!--Contact-->
<script src="{{ asset('js/contact.js') }}"></script>
<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js"></script>
<!-- Google Maps Config -->
<script src="{{ asset('js/gmaps.js') }}"></script>
<!--Login/Register/Reset Forms-->
<script src="{{ asset('js/forms.js') }}"></script>
</body>
</html>