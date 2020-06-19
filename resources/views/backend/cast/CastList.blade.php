@extends('backend.layouts.master.master')

@section('title', 'Cast List')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.castAdd')
<!-- END BREADCRUMB-->

<section class="statistic ">
<div class="section__content section__content--p30">
    <div class="container-fluid">
    	@if (session('success'))
	    <div class="row">
	      <div class="col-lg-12 alert alert-success">
	        {{ session('success') }}
	      </div>
	    </div>
	    @endif
        <div class="row">
            <div class="col-md-12 card-body">
				<table class="table">
				  <thead class="text-primary">
				    <tr>
				      <th>ID</th>
				      <th>Name</th>
				      <th>Date of Birth</th>
				      <th>Nationality</th>
				      <th>Information</th>
				      <th>Image</th>
				      <th>Manipulation</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($castRecord as $record)
				    <tr>
				      	<td class="text-primary">
					      	@if($record->id < 10)
					      		{{ "0".$record->id}}
					      	@else 
					      		{{$record->id}}
					      	@endif
						</td>
						<td>{{$record->name}}</td>
						<td>{{$record->DOB}}</td>
						<td>{{$record->nationality}}</td>
						<td>{{$record->information}}</td>
						<td><img src="backend/images/cast/{{$record->image}}"></td>
						<td>
					      	<button onclick="window.location.href='{{route('castEdit', ['id' => $record->id])}}'" class="btn btn-warning">
	                            <i class="zmdi zmdi-edit"></i>edit
	                        </button>
	                        <form action="{{route('castDestroy', ['id' =>$record->id])}}" method="post">
	                        	@csrf
	                        	@method('DELETE')
						      	<button class="btn btn-danger">
		                            <i class="zmdi zmdi-close"></i>Delete
		                        </button>	
	                        </form>			      
                		</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
            </div>
        </div>
    </div>
</div>
</section>
@stop