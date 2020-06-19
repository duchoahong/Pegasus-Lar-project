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

<footer>
<div class="container-fluid con-footer-top">
<div class="container">
<div class="row footer-top">
	<div class="col-lg-12 mt-1 mb-1">
		<ul class="list-inline logo-movie-format">
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/4dx.png"></a></li>
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/imax.png"></a></li>
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/premium.png"></a></li>
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/sky-cinema-film-b68ed6de785dbb8c.png"></a></li>
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/394-3946225_dolby-atmos-logo-png.png"></a></li>
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/cgv.png"></a></li>
			<li class="list-inline-item lg-fm"><a href="#"><img class="img-fluid" src="frontend/images/Special_hd_logo_screenx.png"></a></li>
		</ul>
	</div>
</div>
</div>
</div>
<div class="container-fluid con-footer-body">
<div class="container">
<div class="footer-body pb-3 pt-3">
	<div class="ft-body-infor">
		<h5>Pegasus Movie theater</h5>
		<ul class="list-group">
			<li class="list-inline-item">Giới Thiệu</li>
			<li class="list-inline-item">Tiện Ích Online</li>
			<li class="list-inline-item">Thẻ Quà Tặng</li>
			<li class="list-inline-item">Tuyển Dụng</li>
			<li class="list-inline-item">Liên Hệ Quảng Cáo Pegasus</li>
		</ul>
	</div>
	<div class="ft-body-infor">
		<h5>dieu khoan su dung</h5>
		<ul class="list-group">
			<li class="list-inline-item">Điều Khoản Chung</li>
			<li class="list-inline-item">Điều Khoản Giao Dịch</li>
			<li class="list-inline-item">Chính Sách Thanh Toán</li>
			<li class="list-inline-item">Chính Sách Bảo Mật</li>
			<li class="list-inline-item">Câu Hỏi Thường Gặp</li>
		</ul>
	</div>
	<div class="ft-body-contact footer-contact">
		<h5>ket noi voi chung toi</h5>
		<ul class="list-inline">
			<li class="list-inline-item f-contact">
				<img src="frontend/images/facebook-icon-logo-vector-400x400.png" alt="" class="img-fluid">
			</li>
			<li class="list-inline-item f-contact">
				<img src="frontend/images/youtube-icon-400x400-png-17.png" alt="" class="img-fluid">
			</li>
			<li class="list-inline-item f-contact">
				<img src="frontend/images/line.png" alt="" class="img-fluid">
			</li>
			<li class="list-inline-item f-contact">
				<img src="frontend/images/Instagram-logo-400x400.png" alt="" class="img-fluid">
			</li>
			<li class="list-inline-item f-contact">
				<img src="frontend/images/zalo.png" alt="" class="img-fluid">
			</li>
		</ul>
	</div>
	<div class="ft-body-care">
		<h5>cham soc khach hang</h5>
		<ul class="list-group">
			<li class="list-inline-item">Hotline: 1900 2901</li>
			<li class="list-inline-item">Giờ làm việc: 8:00 - 22:00 (Tất cả các ngày bao gồm cả Lễ tết</li>
			<li class="list-inline-item">Email hỗ trợ: hoidap@pgs.vn</li>
		</ul>
	</div>
	<div class="clearfix"></div>
</div>
</div>
</div>
<div class="container">
	<div class="row mt-3">
		<div class="col-lg-2">
			<img src="frontend/images/pegasus-logo.png" alt="pega-logo" class="img-fluid logo-image-footer">
		</div>
		<div class="col">
			<h5 class="cty-name">cong ty tnhh cj pgs vietnam</h5>
			<ul class="list-group">
				<li class="list-inline-item">
					<span>Giấy CNĐKDN: 0303675393, đăng ký lần đầu ngày 31/7/2008, đăng ký thay đổi lần thứ 5 ngày 14/10/2015, cấp bởi Sở KHĐT thành phố Hồ Chí Minh.</span>
				</li>
				<li class="list-inline-item">
					<span>Địa Chỉ: Tầng 2, Rivera Park Saigon - Số 7/28 Thành Thái, P.14, Q.10, TPHCM.</span>
				</li>
				<li class="list-inline-item">
					<span>Hotline: 1900 6017</span>
				</li>
				<li class="list-inline-item">
					<span class="ft-copyr">COPYRIGHT 2017 CJ CGV. All RIGHTS RESERVED .</span>
				</li>
			</ul>
		</div>
	</div>
</div>
</footer>
<div class="bg-footer"></div>
<script type="text/javascript" src="frontend/js/jquery-3.4.1.js"></script>
<script type="text/javascript" src="frontend/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="frontend/OwlCarousel/dist/owl.carousel.js"></script>
<script src="frontend/js/minhduc-custom.js"></script>
<script src="frontend/js/hold_time_countDown.js"></script>
</body>
</html>