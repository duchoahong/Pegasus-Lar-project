@extends('frontend.show.master.master')

@section('title', 'Payment')

@section('content')

<div class="sub-header">
<div class="container pt-2 pb-2">
	<div class="row">
		<div class="col-lg-4 seat-booking ">
			<div class="row">
				<div class="col-md-11">
					<div class="seat-nav-cell text-center">
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
					<div class="seat-nav-cell active text-center">
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
<div class="payment pt-3">
<div class="container pt-2">
	<div class="payment-col-first">
		<div class="payment-announcement mb-4">
			<p class="mb-0">bạn không cần tạo tài khoản để mua vé xem phim. Tuy nhiên, <a href="#">đăng nhập </a>vào tài khoản sẽ giúp bạn lưu lại lịch sử mua vé, cũng như hưởng các ưu đãi chỉ có tại <span class="movie-infor-bold">Pegasus.com</span></p>
		</div>
		<div class="payment-table mb-4">
			<table class="payment-tab">
				<thead>
					<tr class="payment-table-name">
						<th colspan="3">Tóm tắt đơn hàng</th>
					</tr>
					<tr class="payment-table-col">
						<th>Mô tả</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Vip</td>
						<td class="payment-indent">1</td>
						<td>90.000 <i class="fas fa-dollar-sign"></i></td>
					</tr>
					<tr>
						<td>Vip</td>
						<td class="payment-indent">1</td>
						<td>90.000 <i class="fas fa-dollar-sign"></i></td>
					</tr>
					<tr>
						<td>Vip</td>
						<td class="payment-indent">1</td>
						<td>90.000 <i class="fas fa-dollar-sign"></i></td>
					</tr>
					<tr>
						<td>Tổng</td>
						<td class="payment-indent">3</td>
						<td>270.000 <i class="fas fa-dollar-sign"></i></td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="payment-type-block mb-4">
			<div class="payment-title">
				<span>Hình thức thanh toán</span>
			</div>
			<div class="payment-type-input pt-3">
				<ul class="payment-type-list pl-0">
					<li class="payment-type-item"><a href="#"><img src="frontend/images/Screenshot_64.png">Thẻ Visa, Master, JCB</a><span class="icon-check"></span></li>
					<li class="payment-type-item"><a href="#"><img src="frontend/images/Screenshot_64.png">Thẻ ATM / Internet Banking</a><span class="icon-check"></span></li>
					<li class="payment-type-item"><a href="#"><img src="frontend/images/Screenshot_64.png">Tại cửa hàng tiện lợi</a><span class="icon-check"></span></li>
					<li class="payment-type-item"><a href="#"><img src="frontend/images/logo-momo.png">Ví MoMo</a><span class="icon-check"></span></li>
					<li class="payment-type-item"><a href="#"><img src="frontend/images/logo-momo.png">Ví MoMo</a><span class="icon-check"></span></li>
				</ul>
			</div>
		</div>
		<div class="payment-infor-block">
			<div class="payment-title">
				<span>Thông tin cá nhân</span>
			</div>
			<div class="payment-type-input pt-3">
				<form action="#" method="POST" id="shopping-done">
				  	<div class="form-group">
					    <label>Họ và tên</label>
					    <input type="text" class="form-control" placeholder="nhập Họ và Tên">
				  	</div>
				 	<div class="form-group">
					    <label>Email address</label>
					    <input type="email" class="form-control" placeholder="nhập Email">
				  	</div>
				  	<div class="form-group">
					    <label>Số điện thoại</label>
					    <input type="text" class="form-control" placeholder="nhập Số điện thoại">
				  	</div>
				 	<div class="form-group form-check">
					    <input type="checkbox" class="form-check-input">
					    <label class="form-check-label" for="exampleCheck1">Tạo tài khoản với Tên và Số điện thoại này.</label>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="payment-col-last">
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
		<div class="movie-payment-announcement pt-3 pb-3 mb-4" style="padding: 0 12px 0 12px;">
			<div class="final-announcement">
				<p>Vé đã mua không thể đổi hoặc hoàn tiền.<br>Mã vé được gửi <span class="fix-times-bold">01</span>lần qua số điện thoại và Email đã nhập. Vui lòng kiểm tra lại thông tin trước khi tiếp tục.</p>
			</div>
		</div>
		<div class="movie-booking-payment ">
			<button class="btn btn-block" data-toggle="modal" data-target="#show-ticket">Thanh toán</button>
			<div class="modal fade" id="show-ticket" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
			  <div class="modal-dialog" role="document">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLongTitle">Thông tin vé</h5>
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
			        </button>
			      </div>
			      <div class="modal-body">
			        <table class="show-ticket-detail">
			        	<thead class="ticket-dash-one">
			        		<tr>
			        			<th>Khách hàng: <span class="movie-infor-bold">Vũ Minh Đức</span></th>
			        			<th colspan="2" class="text-right">20:20 2019-10-20</th>
			        		</tr>
			        		<tr>
			        			<th>Mau so : 01/VE2/003</th>
			        			<th colspan="2" class="text-right">Ky hieu : TT/18T</th>
			        		</tr>
			        		<tr>
			        			<th>So : 0086517</th>
			        			<th colspan="2" class="text-right">MST : 0303675393-001</th>
			        		</tr>
			        	</thead>
			        	<tbody>
			        		<tr>
			        			<td colspan="3">VNFILM PEGASUS COMPLEX</td>
			        		</tr>
			        		<tr class="ticket-dash-one">
			        			<td colspan="3"><span>26/APR/2019 </span><span>03:56 </span><span>BOX02 APP</span></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3"><h4>Avengers: Endgame [C13]</h4></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3">
			        				<span>26/APR/2019 </span>
			        				<span>16:15 PM </span>
			        				<span>26/APR/2019 </span>
			        				<span>19:42 PM</span>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td colspan="3"><h4>Avengers: Endgame [C13]</h4></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3">
			        				<span>26/APR/2019 </span>
			        				<span>16:15 PM </span>
			        				<span>26/APR/2019 </span>
			        				<span>19:42 PM</span>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td colspan="3"><h4>Avengers: Endgame [C13]</h4></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3">
			        				<span>26/APR/2019 </span>
			        				<span>16:15 PM </span>
			        				<span>26/APR/2019 </span>
			        				<span>19:42 PM</span>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td colspan="3"><h4>Avengers: Endgame [C13]</h4></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3">
			        				<span>26/APR/2019 </span>
			        				<span>16:15 PM </span>
			        				<span>26/APR/2019 </span>
			        				<span>19:42 PM</span>
			        			</td>
			        		</tr>
			        		<tr>
			        			<td colspan="3"><h4>Avengers: Endgame [C13]</h4></td>
			        		</tr>
			        		<tr>
			        			<td colspan="3">
			        				<span>26/APR/2019 </span>
			        				<span>16:15 PM </span>
			        				<span>26/APR/2019 </span>
			        				<span>19:42 PM</span>
			        			</td>
			        		</tr>
			        		<tr class="ticket-dash-two">
			        			<td colspan="3">Rap : Cinema 4 <span class="movie-infor-bold">D-4</span></td>
			        		</tr>
			        		<tr>
			        			<td colspan="2">VIP(Prime)</td>
		        				<td class="text-right"><i class="fas fa-dollar-sign"></i><span>125.000 <br><small class="text-muted">(bao gom 5% VAT)</small></span></td>
			        		</tr>
			        	</tbody>
			        </table>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-primary submit-payment">Done</button>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
</content>

@stop