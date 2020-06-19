@extends('frontend.show.master.master')

@section('title', 'Booking')

@section('content')

<div class="sub-header">
<div class="container pt-2 pb-2">
	<div class="row">
		<div class="col-lg-4 seat-booking ">
			<div class="row">
				<div class="col-md-11">
					<div class="seat-nav-cell active text-center">
						<i class="fas fa-th-large"></i><br>
						<span>Chọn ghế</span>
					</div>
				</div>
				<div class="col-md-1">
					<span class="next-seperate text-right"><i class="fas fa-chevron-right"></i></span>
				</div>
			</div>
		</div>
		<div class="col-lg-4 seat-booking ">
			<div class="row">
				<div class="col-md-11">
					<div class="seat-nav-cell text-center">
						<i class="fas fa-money-bill-wave"></i><br>
						<span>Thanh toán</span>
					</div>
				</div>
				<div class="col-md-1">
					<span class="next-seperate text-right"><i class="fas fa-chevron-right"></i></span>
				</div>
			</div>
		</div>
		<div class="col-lg-4 seat-booking ">
			<div class="row">
				<div class="col-md-11">
					<div class="seat-nav-cell text-center">
						<i class="fas fa-ticket-alt"></i><br>
						<span>Thông tin vé</span>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>	
</div>
</div>
<content>
<div class="booking pt-3">
<div class="container pt-2">
	<!-- <div class="row"> -->
		<div class="book-col-first pt-3 pb-3">
			<div class="guide-box text-center">
				<ul class="list-inline">
					<li class="list-inline-item"><span class="unselected"></span><p>Standard</p></li>
					<li class="list-inline-item"><span class="vip"></span><p>VIP</p></li>
				</ul>
				<ul class="list-inline">
					<li class="list-inline-item"><span class="selected-box"></span><p>Ghế bạn chọn</p></li>
					<li class="list-inline-item"><span class="unavail"></span><p>Không thể chọn</p></li>
					<li class="list-inline-item"><span class="taken"></span><p>Đã bán</p></li>
				</ul>
			</div>
			<div class="modal-screnning">
				<div class="screen-box text-center mb-3">
					<h6>màn hình</h6>
				</div>
				<div class="seat-box">
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>A</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>B</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>C</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>D</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>E</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>F</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>G</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>H</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>I</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>K</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>N</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="14"></span></li>
					</ul>
					<ul class="list-inline">
						<li class="list-inline-item row-name"><span>M</span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="1"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="2"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="3"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="4"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="5"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="6"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="7"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="8"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="9"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="10"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="11"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="12"></span></li>
						<li class="list-inline-item seat-cell avail unselected"><span seat-number="13"></span></li>
						<li class="list-inline-item seat-cell taken"><span seat-number="14"></span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="book-col-last">
			<div class="movie-booking-information pt-3 pb-3 mb-4" style="padding: 0 12px 0 12px;">
				<h5 class="movie-booking-name">X-men: ngày cũ của tương lai</h5>
				<p>Suất: <span class="movie-infor-bold">08:30</span> - ngày mai, <span class="movie-infor-bold">20/10</span></p>
				<p>Phòng chiếu: <span class="movie-infor-bold">P3</span></p>
				<p>-Ghế đã chọn: <span class="movie-booking-seat"></span></p>
				<p><span class="movie-infor-bold user-selected-seat"></span></p>
			</div>
			<div class="movie-booking-cart pt-3 pb-3 mb-4" style="padding: 0 12px 0 12px;">
				<div class="row">
					<div class="col-sm-6 text-left total-cart-block">
						<h6 class="total-cart">tổng đơn hàng</h6>
						<span>345.000 <i class="fas fa-dollar-sign"></i></span>
					</div>
					<div class="col-sm-6 text-right">
						<h6 class="hold-time">thời gian giữ ghế</h6>
						<span class="hold-time-countDown"></span>
					</div>
				</div>
			</div>
			<div class="movie-booking-next ">
				<a href="#" class="btn btn-block">Tiếp tục</a>
			</div>
		</div>
		<div class="clearfix"></div>
	<!-- </div> -->
</div>
</div>
</content>

@stop