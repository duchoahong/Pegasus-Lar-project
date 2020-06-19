@extends('frontend.show.master.master')

@section('title', 'Film')

@section('content')
<content>
<div class="film-content">
<div class="featured-movie" style="background-image: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(0,0,0,0.7) 100%), url('frontend/images/1200px-Petra_By_Night.jpg');">
	<div class="container pt-3 pb-3">
		<div class="row">
			<div class="col-lg-2">
				<img class="img-fluid border rounded banner-movie-images" src="frontend/images/3a-1024x762.jpg" alt="X-men: ngày cũ của tương lai">
			</div>
			<div class="col-lg-10">
				<div class="film-title mb-2">
					<h1>
						<a href="#" title="X-men: ngày cũ của tương lai">X-men: ngày cũ của tương lai</a>
					</h1>
					<h5 class="text-truncate mb-0">X-men: the day of future past - Comedy, Animation, Family</h5>
				</div>
				<div class="row">
					<div class="col-12 col-md-7">
						<div class="btn-block mb-2">
							<a href="#" class="btn do-movie-like">
								<i class="fas fa-heart"></i>Thích
							</a>
							<a href="#" class="btn do-movie-rate">
								<i class="fas fa-star"></i>Đánh giá
							</a>
							<a href="#" class="btn go-trailer">Trailer</a>
							<a href="#" class="btn do-booking">Mua vé</a>
						</div>
						<p class="banner-movie-intro mb-3 text-justify">Trong chuyến phiêu lưu đến một vùng đảo ít người biết đến, 4 cô gái Mia, Sasha, Nicole và Alexa quyết định lặn xuống biển để khám phá một thành cổ của người Maya dưới đáy đại dương. Khi vào đến bên trong, cổng thành bỗng sụp đổ khiến họ phải nhanh chóng tìm cách thoát thân trong những đường hầm mê cung và các hang động kỳ quái trước khi cạn sạch dưỡng khí.</p>
						<div class="row mb-2">
							<div class="col banner-infor-cell text-sm-left">
								<strong>
									<i class="far fa-thumbs-up"></i>
									<span>Hài lòng</span>
								</strong>
								<br>
								<a href="#" class="do-movie-rate-change">33%</a>
							</div>
							<div class="col banner-infor-cell text-sm-left">
								<strong>
									<i class="far fa-calendar-alt"></i>
									<span>Khởi chiếu</span>
								</strong>
								<br>
								<span>20/10/2019</span>
							</div>
							<div class="col banner-infor-cell text-sm-left">
								<strong>
									<i class="far fa-clock"></i>
									<span>Thời lượng</span>
								</strong>
								<br>
								<span>120 Phút</span>
							</div>
							<div class="col banner-infor-cell text-sm-left">
								<strong>
									<i class="fas fa-user-check"></i>
									<span>Giới hạn tuổi</span>
								</strong>
								<br>
								<span>NC16</span>
							</div>
						</div>
					</div>
					<div class="col-12 col-md-5 movie-charactor">
						<p class="mb-2">
							<strong>diễn viên</strong>
							<br>
							<span>
								<a href="#" class="banner-movie-cast text-danger">rickdick</a>,
								<a href="#" class="banner-movie-cast text-danger">justin bieber</a>,
								<a href="#" class="banner-movie-cast text-danger">tom cruise</a>,
								<a href="#" class="banner-movie-cast text-danger">jenifer lopez</a>,
								<a href="#" class="banner-movie-cast text-danger">annoy shwwww</a>,
								<a href="#" class="banner-movie-cast text-danger">home alone</a>,
								<a href="#" class="banner-movie-cast text-danger">minh duc</a>
							</span>
						</p>
						<p class="mb-2">
							<strong>đạo diễn</strong>
							<br>
							<span>
								<a href="#" class="banner-movie-director text-danger">rickdick</a>,
								<a href="#" class="banner-movie-director text-danger">justin bieber</a>
							</span>
						</p>
						<p class="mb-2">
							<strong>Nhà sản xuất</strong>
							<br>
							<span>
								<a href="#" class="banner-movie-producer text-danger">james harris</a>,
								<a href="#" class="banner-movie-producer text-danger">robert jones</a>,
								<a href="#" class="banner-movie-producer text-danger">Mark lane</a>
							</span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="sticky-movie-bar">
	<div class="container">
		<!-- <ul class="list-inline">
		</ul> -->
		<ul class="nav">
			<li class="nav-item text-center list-inline-item"><a class="nav-link active" href="#">Thông tin phim</a></li>
			<li class="nav-item text-center list-inline-item"><a class="nav-link" href="#">Lịch chiếu</a></li>
			<li class="nav-item text-center list-inline-item"><a class="nav-link" href="#">Đánh giá</a></li>
			<li class="nav-item text-center list-inline-item"><a class="nav-link" href="#">Tin tức</a></li>
			<li class="nav-item text-center list-inline-item"><a class="nav-link" href="#">Mua vé</a></li>
		</ul>
	</div>
</div>
<div class="film-trailer">
	<div class="container mt-3" style="height: auto !important;">
		<div class="film-col-first">
			<div class="film-trailer-youtube">
				<iframe width="100%" height="100%" src="https://www.youtube.com/embed/m8ceONMvOms" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
			<div class="film-trailer-review mt-3 mb-4">
				<div class="film-section-top">
					<h4>Cộng đồng</h4>
				</div>
				<div class="card film-card-review mb-3">
			 	 	<div class="card-body">
				    	<div class="row">
				    		<div class="col-auto">
				    			<a class="avatar" href="#">
					    			<img class="avatar-img rounded-circle" src="frontend/images/4dx.jpg">
					    		</a>
				    		</div>
				    		<div class="col ml-pd">
				    			<h4 class="card-title mb-1">Card title
									<span><i class="fas fa-star text-warning"></i>4</span>
				    			</h4>
				    			<p class="mb-1 card-text small text-muted">4 ngày trước</p>
				    		</div>		
				    	</div>
				    	<div class="row">
				    		<div class="col">
				    			<p class="card-text">Nhìn chung, bộ phim không đến nỗi tệ. Nội dung khá, kịch tính, và hồi hợp. Tuy nhiên, phim quá phụ thuộc vào các cảnh slow-motion và các phân jumpscare. Phim có nhiều chỗ phi logic nhưng do đây là phim ảnh nên có lẽ tính logic có thể xem xét lại. Đây là bộ phim giải trí được </p>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="card-footer bg-white">
				  		<div class="btn-action float-left">
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-up"></i></a>
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-down"></i></a>
				  		</div>
				    	<a href="#" class="btn btn-sm float-right"><i class="fas fa-link"></i></a>
				  	</div>
				</div>
				<div class="card film-card-review mb-3">
			 	 	<div class="card-body">
				    	<div class="row">
				    		<div class="col-auto">
				    			<a class="avatar" href="#">
					    			<img class="avatar-img rounded-circle" src="frontend/images/4dx.jpg">
					    		</a>
				    		</div>
				    		<div class="col ml-pd">
				    			<h4 class="card-title mb-1">Card title
									<span><i class="fas fa-star text-warning"></i>4</span>
				    			</h4>
				    			<p class="mb-1 card-text small text-muted">4 ngày trước</p>
				    		</div>		
				    	</div>
				    	<div class="row">
				    		<div class="col">
				    			<p class="card-text">Nhìn chung, bộ phim không đến nỗi tệ. Nội dung khá, kịch tính, và hồi hợp. Tuy nhiên, phim quá phụ thuộc vào các cảnh slow-motion và các phân jumpscare. Phim có nhiều chỗ phi logic nhưng do đây là phim ảnh nên có lẽ tính logic có thể xem xét lại. Đây là bộ phim giải trí được </p>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="card-footer bg-white">
				  		<div class="btn-action float-left">
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-up"></i></a>
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-down"></i></a>
				  		</div>
				    	<a href="#" class="btn btn-sm float-right"><i class="fas fa-link"></i></a>
				  	</div>
				</div>
				<div class="card film-card-review mb-3">
			 	 	<div class="card-body">
				    	<div class="row">
				    		<div class="col-auto">
				    			<a class="avatar" href="#">
					    			<img class="avatar-img rounded-circle" src="frontend/images/4dx.jpg">
					    		</a>
				    		</div>
				    		<div class="col ml-pd">
				    			<h4 class="card-title mb-1">Card title
									<span><i class="fas fa-star text-warning"></i>4</span>
				    			</h4>
				    			<p class="mb-1 card-text small text-muted">4 ngày trước</p>
				    		</div>		
				    	</div>
				    	<div class="row">
				    		<div class="col">
				    			<p class="card-text">Nhìn chung, bộ phim không đến nỗi tệ. Nội dung khá, kịch tính, và hồi hợp. Tuy nhiên, phim quá phụ thuộc vào các cảnh slow-motion và các phân jumpscare. Phim có nhiều chỗ phi logic nhưng do đây là phim ảnh nên có lẽ tính logic có thể xem xét lại. Đây là bộ phim giải trí được </p>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="card-footer bg-white">
				  		<div class="btn-action float-left">
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-up"></i></a>
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-down"></i></a>
				  		</div>
				    	<a href="#" class="btn btn-sm float-right"><i class="fas fa-link"></i></a>
				  	</div>
				</div>
				<div class="card film-card-review mb-3">
			 	 	<div class="card-body">
				    	<div class="row">
				    		<div class="col-auto">
				    			<a class="avatar" href="#">
					    			<img class="avatar-img rounded-circle" src="frontend/images/4dx.jpg">
					    		</a>
				    		</div>
				    		<div class="col ml-pd">
				    			<h4 class="card-title mb-1">Card title
									<span><i class="fas fa-star text-warning"></i>4</span>
				    			</h4>
				    			<p class="mb-1 card-text small text-muted">4 ngày trước</p>
				    		</div>		
				    	</div>
				    	<div class="row">
				    		<div class="col">
				    			<p class="card-text">Nhìn chung, bộ phim không đến nỗi tệ. Nội dung khá, kịch tính, và hồi hợp. Tuy nhiên, phim quá phụ thuộc vào các cảnh slow-motion và các phân jumpscare. Phim có nhiều chỗ phi logic nhưng do đây là phim ảnh nên có lẽ tính logic có thể xem xét lại. Đây là bộ phim giải trí được </p>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="card-footer bg-white">
				  		<div class="btn-action float-left">
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-up"></i></a>
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-down"></i></a>
				  		</div>
				    	<a href="#" class="btn btn-sm float-right"><i class="fas fa-link"></i></a>
				  	</div>
				</div>
				<div class="card film-card-review mb-3">
			 	 	<div class="card-body">
				    	<div class="row">
				    		<div class="col-auto">
				    			<a class="avatar" href="#">
					    			<img class="avatar-img rounded-circle" src="frontend/images/4dx.jpg">
					    		</a>
				    		</div>
				    		<div class="col ml-pd">
				    			<h4 class="card-title mb-1">Card title
									<span><i class="fas fa-star text-warning"></i>4</span>
				    			</h4>
				    			<p class="mb-1 card-text small text-muted">4 ngày trước</p>
				    		</div>		
				    	</div>
				    	<div class="row">
				    		<div class="col">
				    			<p class="card-text">Nhìn chung, bộ phim không đến nỗi tệ. Nội dung khá, kịch tính, và hồi hợp. Tuy nhiên, phim quá phụ thuộc vào các cảnh slow-motion và các phân jumpscare. Phim có nhiều chỗ phi logic nhưng do đây là phim ảnh nên có lẽ tính logic có thể xem xét lại. Đây là bộ phim giải trí được </p>
				    		</div>
				    	</div>
				  	</div>
				  	<div class="card-footer bg-white">
				  		<div class="btn-action float-left">
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-up"></i></a>
				  			<a href="#" class="btn btn-sm"><i class="far fa-thumbs-down"></i></a>
				  		</div>
				    	<a href="#" class="btn btn-sm float-right"><i class="fas fa-link"></i></a>
				  	</div>
				</div>
				<div class="film-section5-limit">
					<a class="btn btn-block" href="#">Xem thêm đánh giá</a>
				</div>
			</div>
		</div>
		<div class="film-col-last">
			form Facebook review
		</div>
		<div class="clearfix"></div>
	</div>
</div>
</div>
</content>
@stop