@extends('backend.layouts.master.master')

@section('title', 'Show Time carlendar')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.showTimeAdd')
<!-- END BREADCRUMB-->

@if(isset($record) && count($record) > 0)
@foreach($record as $_record)
<section class="statistic ">
<div class="section__content section__content--p30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 card-body">
				<table class="table">
				  <thead class="text-primary">
				    <tr>
				      <th>ID</th>
				      <th>ScreenName</th>
				      <th>MovieName</th>
				      <th>TimeVal</th>
				      <th>DateBegin</th>
				      <th>DateEnd</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach($_record as $seri => $show)
				    <tr>
				      <td class="text-primary">{{ $seri}}</td>
				      <td>{{$show->RoomName}}</td>
				      <td>{{$show->MovieName}}</td>
				      <td>{{$show->TimeVal}}</td>
				      <td>{{$show->DateBegin}}</td>
				      <td>{{$show->DateEnd}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>
            </div>
        </div>
    </div>
</div>
</section>
@endforeach
@endif
@stop
