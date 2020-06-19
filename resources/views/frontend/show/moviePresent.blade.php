@extends('frontend.show.master.master')

@section('title', 'Movie Present')

@section('content')

<content>
<div class="main-content pt-4">
<div class="container movie-present-con">
	<div class="movie-category-title">
		<h2 class="text-left">phim đang chiếu</h2>
	</div>
	<div class="movie-list-present">
		@foreach($movieRecord as $record)
		<div class="movie-present-item">
			<div class="product-images mb-2">
		  		<a href="#">
		  			<img class="img-fluid product-image" src="{{'backend/images/movie/'.$record->ImageURL}}" alt="phim dang chieu">
		  		</a>
			</div>
			<div class="product-infor mb-2">
		    	<h5 class="product-title"><a href="#">{{$record->MovieName}}</a></h5>
		    	<div class="pegasus-movie-infor">
		    		<span class="pegasus-movie-bold">Thể loại: </span>
		    		<span class="pegasus-movie-normal">{{$record->Title}}</span>
		    	</div>
		    	<div class="pegasus-movie-infor">
		    		<span class="pegasus-movie-bold">Thời lượng: </span>
		    		<span class="pegasus-movie-normal">{{$record->Duration_Min." phút"}}</span>
		    	</div>
		    	<div class="pegasus-movie-infor">
		    		<span class="pegasus-movie-bold">Khởi chiếu </span>
		    		<span class="pegasus-movie-normal">{{$record->Date_Premiere}}</span>
		    	</div>
	    	</div>
	      	<ul class="list-inline add-to-links">
    			<li class="list-inline-item float-left">
    				<button class="btn btn-like"><span class="btn-like-bold">Like:</span><span class="btn-like-total">50</span></button>
    			</li>
    			<li class="list-inline-item float-right">
    				<button type="button" class="btn btn-danger btn-booking" data-toggle="modal" data-target=".date-movie-booking-{{$record->MovieID}}"><span>Buy ticket</span></button>
					<div class="modal fade date-movie-booking-{{$record->MovieID}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
					  	<div class="modal-dialog modal-xl">
					    	<div class="modal-content">
					      		<div class="modal-header-custom">
					        		<ul class="list-inline">
				        				@foreach($record->dateCluster as $date)
					        			<li class="list-inline-item" onclick="getSelectDay(<?= $record->MovieID?>, <?= strtotime($date)?>)">
					        				<div class="date-cell">
						        				<span>{{date('m', strtotime($date))}}</span>
						        				<em>{{date('D', strtotime($date))}}</em>
						        				<strong>{{date('d', strtotime($date))}}</strong>
					        				</div>
					        			</li>
					        			@endforeach
					        		</ul>
					        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="fas fa-times-circle"></i></span>
					        		</button>
					      		</div>
					      		<div class="modal-body selectDayField">
					            </div>
		    				</div>
		    			</div>
		    		</div>
    			</li>
    		</ul>
		</div>
		@endforeach
		<div class="clearfix"></div>
	</div>
</div>
</div>
</div>
</content>
@stop
