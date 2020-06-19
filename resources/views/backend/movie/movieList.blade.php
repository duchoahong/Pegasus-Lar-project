@extends('backend.layouts.master.master')

@section('title', 'Movie List')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.movieAdd')
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
				<table class="table resize-table">
				  <thead class="text-primary">
				    <tr>
				      <th>ID</th>
				      <th>Movie name</th>
				      <th>Date Premiere</th>
				      <th><b>Detail</b></th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($movieRecord as $record)
				    <tr>
				      	<td class="text-primary">
					      	@if($record->id < 10)
					      		{{ "0".$record->id}}
					      	@else 
					      		{{$record->id}}
					      	@endif
						</td>
						<td><span style="font-style: italic;">{{$record->MovieName}}</span></td>
						<td>{{$record->Date_Premiere}}</td>
						<td><a href="{{route('movieDetail', ['id' => $record->id])}}">
							<span class="text-warning" style="font-style: italic;">View</span>
						</a></td>
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