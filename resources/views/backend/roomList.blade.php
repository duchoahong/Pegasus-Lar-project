@extends('backend.layouts.master.master')

@section('title', 'Room Reservation')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.breadCrumb')
<!-- END BREADCRUMB-->

@if(isset($dateCluster) && count($dateCluster) > 0)	
<div class="section__content section__content--p30 mt-4">
	<form action="{{route('room.ShowAllDate', ['id' => $roomId])}}" method="post">
		@csrf
		@foreach($dateCluster as $dates)
			<div class="cluster-movie-name float-left pt-4" style="width: 30%;">
				<h3>{{$dates['MovieCluster']}}</h3>
			</div>
			<div class="cluster-movie-dates float-left pt-4">
				@foreach($dates['DateCluster'] as $date)
					@if(isset($reqDate) && $reqDate === $date) 
						<button type="submit" class="btn btn-danger" name="date" value="{{ $date}}">{{ $date}}</button>
					@else 
						<button type="submit" class="btn btn-success" name="date" value="{{ $date}}">{{ $date}}</button>
					@endif
				@endforeach
			</div>
			<div class="clear-fix" style="clear: both;"></div>
		@endforeach
	</form>
</div>
@else
<h1 class="text-center">empty</h1>
@endif

@if(isset($record))
@foreach($record as $_record)

<section class="statistic ">
<div class="section__content section__content--p30">
<div class="container-fluid">
<div class="row">
<div class="col-md-12 card-dex">
<div class="card-header">
  	<ul class="list-inline list-inline-plus">
	  <li class="list-inline-item">Screen Name: {{$_record->label->RoomName}}</li>
	  <li class="list-inline-item">Movie Name: {{$_record->label->MovieName}}</li>
	  <li class="list-inline-item"></li>
	  <li class="list-inline-item"></li>
	</ul>
  	<ul class="list-inline list-inline-plus">
	  <li class="list-inline-item">Screen Date: {{$reqDate}}</li>
	  <li class="list-inline-item">Screen Time: {{$_record->label->TimeVal}}</li>
	  <li class="list-inline-item">Booked Seats: {{$_record->seatStatus->sumBooked}}</li>
	  <li class="list-inline-item">Available Seats: {{$_record->seatStatus->sumAvail}}</li>
	</ul>
</div>
<div class="card-body">
<table class="table">
  	<thead class="text-primary">
		<tr>
		@foreach($_record->seatRecord[0] as $key => $value)
			<th>{{$key}}</th>
		@endforeach
		</tr>
  	</thead>
  	<tbody>
	@foreach($_record->seatRecord as $val)
		<tr>
		@foreach($val as $val)
			<td>
			@if(is_null($val))
				{{'_'}}
			@else 
				{{$val}}
			@endif
			</td>
		@endforeach
		</tr>
	@endforeach
  </tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</section>
@endforeach
@endif
@stop