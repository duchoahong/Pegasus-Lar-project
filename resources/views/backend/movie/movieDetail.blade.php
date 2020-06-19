@extends('backend.layouts.master.master')

@section('title', 'add Movie')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.movieTask')
<!-- END BREADCRUMB-->
<section class="statistic ">
<div class="section__content section__content--p30">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-9">
			<div class="row ">
				<div class="col-sm-8">
				  <div class="card">
					  <div class="card-body">
					    <p>Movie Name:&nbsp;<i>{{$movie->MovieName}}</i></p>
					  </div>
					</div>
				</div>
				<div class="col-sm-4">
				  <div class="card">
					  <div class="card-body">
					    <p>Date Premiere:&nbsp;<i>{{$movie->Date_Premiere}}</i></p>
					  </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-7">
				  <div class="card">
					  <div class="card-body">
					  	<p>Title:&nbsp;<i>{{$movie->Title}}</i></p>
					  </div>
					</div>
				</div>
				<div class="col-sm-3">
				  <div class="card">
					  <div class="card-body">
					  	<p>Duration min:&nbsp;<i>{{$movie->Duration_Min}}</i></p>
					  </div>
					</div>
				</div>
				<div class="col-sm-2">
				  <div class="card">
					  <div class="card-body">
					  	<p>Status:&nbsp;<i>{{$movie->Status}}</i></p>
					  </div>
					</div>
				</div>
			</div>
		  <div class="row">
		  	<div class="col-sm-12">
				  <div class="card">
					  <div class="card-body">
					  	<p>Description</p>
					    <p class="card-text"><i>{{$movie->Description}}</i></p>
					  </div>
					</div>
				</div>
		  </div>
			
		  <div class="row">
		  	<div class="col-sm-12">
				  <div class="card">
					  <div class="card-body">
					  	<p>Note</p>
					    <p class="card-text"><i>{{$movie->Note}}</i></p>
					  </div>
					</div>
				</div>
		  </div>
      <p>Producer</p>
			<div class="row">
					@foreach($producerRecord as $producer)
						<div class="col-sm-3">
							<div class="card">
							  <img class="card-img-top"  src="backend/images/default/default-movie.png"  alt="...">
							  <div class="card-body">
							    <h5 class="card-title">{{$producer->name}}</h5>
							    <p class="card-text">producer</p>
							  </div>
							</div>
						</div>	
					@endforeach
			</div>
		  <p>director</p>
			<div class="row">
					@foreach($directorRecord as $director)
						<div class="col-sm-3">
							<div class="card">
							  <img class="card-img-top"  src="backend/images/default/default-movie.png"  alt="...">
							  <div class="card-body">
							    <h5 class="card-title">{{$director->name}}</h5>
							    <p class="card-text">{{$director->nationality}}</p>
							  </div>
							</div>
						</div>	
					@endforeach
	    </div>
		  <p>cast</p>
			<div class="row">
					@foreach($castRecord as $cast)
						<div class="col-sm-3">
							<div class="card">
							  <img class="card-img-top"  src="backend/images/default/default-user.png"  alt="...">
							  <div class="card-body">
							    <h5 class="card-title">{{$cast->name}}</h5>
							    <p class="card-text">{{$cast->nationality}}</p>
							  </div>
							</div>
						</div>	
					@endforeach
			</div>
		</div>
		<div class="col-sm-3">
			<div class="row">
				@foreach($imageRecord as $image)
				<div class="col-sm-6">
					<a href="#" class="d-block mb-4 h-100">
						<img class="img-fluid" src="backend/images/movie/{{$image->ImageURL}}">
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
</div>
</section>
@stop