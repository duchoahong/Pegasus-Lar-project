@extends('backend.layouts.master.master')

@section('title', 'edit Movie')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.breadCrumb')
<!-- END BREADCRUMB-->
<section class="statistic ">
<div class="section__content section__content--p30">
<div class="container-fluid">
	@if (session('message'))
    <div class="row">
      <div class="col-lg-12 alert alert-danger">
        {{ session('message') }}
      </div>
    </div>
    @endif
    <form action="{{route('movieAdd')}}" method="post" autocomplete="off" enctype="multipart/form-data">
	<div class="row">
		<div class="col-sm-9">
			<div class="form-row">
				<div class="form-group col-sm-8">
				      <label>Movie Name</label>
				      <input name="MovieName" type="text" class="form-control" autocomplete="off" placeholder="enter the Name of the new Movie" value="{{$movie->MovieName}}">
				  	 	@if ($errors->has('MovieName'))
				          <p class="text-danger">{{ $errors->first('MovieName') }}</p>
				        @endif
				</div>
				<div class="form-group col-sm-4">
				      <label>Date Premiere</label>
				      <input name="Date_Premiere" type="date" data-format="YYYY-mm-dd" class="form-control" value="{{$movie->Date_Premiere}}">
				  	 	@if ($errors->has('Date_Premiere'))
				          <p class="text-danger">{{ $errors->first('Date_Premiere') }}</p>
				        @endif
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-sm-8">
				    <label for="inputAddress">Title</label>
				    <input name="Title" type="text" class="form-control" autocomplete="off" placeholder="enter Movie Title" value="{{$movie->Title}}">
				</div>
				<div class="form-group col-sm-4">
				      <label>Duration Min</label>
				      <input name="Duration_Min" type="text" autocomplete="off" class="form-control" value="{{$movie->Duration_Min}}">
				  	 	@if ($errors->has('Duration_Min'))
				          <p class="text-danger">{{ $errors->first('Duration_Min') }}</p>
				        @endif
				</div>
				<div class="form-group col-sm-2">
				      <label>Status</label>
				      <input name="Status" type="text" autocomplete="off" class="form-control">
				  	 	@if ($errors->has('Status'))
				          <p class="text-danger">{{ $errors->first('Status') }}</p>
				        @endif
				</div>
			</div>
			  <div class="form-group">
			    <label for="inputAddress">Description</label>
			   	<textarea name="Description" type="text" class="form-control" autocomplete="off" rows="3" placeholder="write some Note">{{$movie->Description}}</textarea>
			  </div>
			
			  <div class="form-group">
		      	<label>Note</label>
			   	<textarea name="Note" type="text" class="form-control" autocomplete="off" rows="2" placeholder="write some description">{{$movie->Note}}</textarea>
			  </div>
			<div class="row">
		      <label class="col-sm-6">Producer</label>
		      <div class="col-sm-4">
					<input type="text" id="producer_name" name="searchProducer" class="form-control tagSearch" autocomplete="off" placeholder="find producer name">
					<div id="producerList" style="position: absolute;"></div>
		      </div>
	      		<div class="col-sm-2">
	      			<button id="addProducer" class="btn btn-success">Add Producer</button>
	      		</div>	
		    </div>
			<div class="form-row producerField">
			 	@if ($errors->has('producerTag'))
			  		<p class="text-danger">{{ $errors->first('producerTag') }}</p>
				@endif		
				@foreach($producerRecord as $producer)
				<div class="form-group col-sm-3 producerBlock">
			        <div class="text-center" style="width: 100%; height: 40px; border: dashed">{{$producer->name}}</div>
			        <input type='hidden' name='producerTag[]' class='castTag tag{{$producer->id}}' value="{{$producer->id}}">
			        <span class="closeProducer">
			        	<i class="fa fa-times-circle"></i>
			        </span>
		        </div>'
				@endforeach
			</div>


			<div class="row">
		      	<label class="col-sm-6">director</label>
		      	<div class="col-sm-4">
		      		<input type="text" id="director_name" name="searchDirector" class="form-control tagSearch" autocomplete="off" placeholder="Find Directer Name">
		      		<div id="directorList" style="position: absolute;"></div>
		      	</div>
		      	<div class="col-sm-2">
		      		<button id="addDirector" class="btn btn-success">More Directer</button>
		      	</div>
		    </div>
			<div class="form-row directorField">
	  	 	@if ($errors->has('directorTag'))
	          <p class="text-danger">{{ $errors->first('directorTag') }}</p>
	        @endif
			</div>
			<div class="row">
		      	<label class="col-sm-6">cast</label>
		      	<div class="col-sm-4">
		      		<input type="text" id="cast_name" name="searchCast" class="form-control tagSearch" autocomplete="off" placeholder="Find Cast Name">
		      		<div id="castList" style="position: absolute;"></div>
		      	</div>
		      	<div class="col-sm-2">
		      		<button id="addCast" class="btn btn-success">More Cast</button>
		      	</div>
			</div>
			<div class="form-row castField">
	  	 	@if ($errors->has('castTag'))
	          <p class="text-danger">{{ $errors->first('castTag') }}</p>
	        @endif
			</div>
		</div>
		<div class="col-sm-3">
			<div class="form-group">
				<label>UPLOAD image</label>
				<input type="file" name="movieImage[]" class="movieImage" multiple="multiple">
			</div>

	  	 	@if ($errors->has('movieImage.*'))
	          <p class="text-danger">{{ $errors->first('movieImage.*') }}</p>
	        @endif
		</div>
	</div>
	<div class="row justify-content-center">
		<div>
			<button class="btn btn-primary">Save</button>
		</div>
	</div>
	@csrf
	</form>
</div>
</div>
</section>
@stop