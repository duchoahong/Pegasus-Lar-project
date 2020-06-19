@extends('backend.layouts.master.master')

@section('title', 'Add Cast')

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
	<form action="{{route('castAdd')}}" method="post" enctype="multipart/form-data">
	@csrf
    <div class="row">
		<div class="form-group col-lg-4">
		  	<label>Name</label>
		  	<input type="text" name="name" class="form-control" placeholder="director name">
	  	 	@if ($errors->has('name'))
	          <p class="text-danger">{{ $errors->first('name') }}</p>
	        @endif
		</div>
		<div class="form-group col-lg-4">
		  	<label>Date of birth</label>
		  	<input type="date" name="DOB" data-format="YYYY-mm-dd" class="form-control" placeholder="Date of birth">
		  	 @if ($errors->has('DOB'))
	          <p class="text-danger">{{ $errors->first('DOB') }}</p>
	        @endif
		</div>
    </div>
    <div class="row">
		<div class="form-group col-lg-4">
		  	<label>Nationality</label>
		  	<input type="text" name="nationality" class="form-control" placeholder="Nationality">
		  	 @if ($errors->has('nationality'))
	          <p class="text-danger">{{ $errors->first('nationality') }}</p>
	        @endif
		</div>
		<div class="form-group col-lg-4">
		  	<label>information</label>
		  	<input type="text" name="information" class="form-control" placeholder="enter some information">
		  	 @if ($errors->has('information'))
	          <p class="text-danger">{{ $errors->first('information') }}</p>
	        @endif
		</div>
    </div>
    <div class="row">
		<div class="form-group col-lg-4">
			 @if ($errors->has('image'))
	          <p class="text-danger">{{ $errors->first('image') }}</p>
	        @endif
		  	<label>Image</label>
		  	<input type="file" name="image">
		</div>
    </div>
    <div class="row">
    	<div class="col-lg-6">
    		<button type="submit" class="btn btn-success">Save</button>
    	</div>
      	<button id="cancel" onclick="window.location.href='{{route('castIndex')}}'" class="btn btn-danger">
            <i class="zmdi zmdi-close"></i>Cancel
        </button>
    </div>
	</form>
</div>
</div>
</section>
@stop