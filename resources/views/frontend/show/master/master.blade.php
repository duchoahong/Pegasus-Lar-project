<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<base href="{{ asset('')}}">
	<link rel="stylesheet" type="text/css" href="frontend/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="frontend/fontawesome/css/all.min.css">

	<!-- ------ carousel ------ -->
	<link rel="stylesheet" type="text/css" href="frontend/OwlCarousel/dist/assets/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="frontend/OwlCarousel/dist/assets/owl.theme.default.css">

	<link rel="stylesheet" type="text/css" href="frontend/css/style.css">

	<!-- <script type="text/javascript" src="frontend/js/jquery-migrate-3.1.0.js"></script> -->
</head>
<body>

<!-- SECTION HEADER -->
@include('frontend.layouts.header')
<!-- SECTION HEADER -->

<!-- MAIN CONTENT -->
@yield('content')
<!-- MAIN CONTENT -->

<!-- SECTION FOOTER -->
@include('frontend.layouts.footer')
<!-- SECTION FOOTER -->

<script type="text/javascript" src="frontend/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="frontend/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="frontend/OwlCarousel/dist/owl.carousel.js"></script>
<script src="frontend/js/minhduc-custom.js"></script>
<script src="frontend/js/minhduc-unLoadPage.js"></script>
</body>
</html>