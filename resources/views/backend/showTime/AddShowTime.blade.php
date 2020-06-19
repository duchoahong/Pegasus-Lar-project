@extends('backend.layouts.master.master')

@section('title', 'Add ShowTimings')

@section('content')
<!-- BREADCRUMB-->
@include('backend.layouts.display.breadCrumb')
<!-- END BREADCRUMB-->

<section class="statistic">
<div class="section__content section__content--p30">
<div class="container-fluid">
  <div class="row">
    @if (session('message'))
      <div class="col-lg-12 alert alert-danger">
        {{ session('message') }}
      </div>
    @endif
  </div>
  <form action="{{route('showTimeSave')}}" method="post">
    @csrf
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault01">Screen name</label>
        <select name="Room_id" class="form-control" >
          <option value="" disabled selected hidden>Please Choose...</option>
          @foreach($roomRecord as $record)
          <option value="{{$record->RoomID}}">{{$record->RoomName}}</option>
          @endforeach
        </select>
        @if ($errors->has('Room_id'))
          <p class="text-danger">{{ $errors->first('Room_id') }}</p>
        @endif
      </div>
      <div class="col-md-3 col-md-offset-2 mb-3">
        <label for="validationDefault04">Started Date</label>
        <input name="DateBegin" id="startDate" class="form-control" placeholder="Please Choose..." >
        @if ($errors->has('DateBegin'))
          <p class="text-danger">{{ $errors->first('DateBegin') }}</p>
        @endif
      </div>
      <div class="col-md-3 mb-3">
        <label for="validationDefault05">End Date</label>
        <input name="DateEnd" id="endDate" class="form-control" placeholder="Please Choose..." >
        @if ($errors->has('DateEnd'))
          <p class="text-danger">{{ $errors->first('DateEnd') }}</p>
        @endif
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-3">
        <label for="validationDefault02">Movie name</label>
        <select name="MovieID" class="form-control" >
          <option disabled selected hidden>Please Choose...</option>
          @foreach($movieRecord as $record)
          <option value="{{$record->id}}">{{$record->MovieName}}</option>
          @endforeach
        </select>
        @if ($errors->has('MovieID'))
          <p class="text-danger">{{ $errors->first('MovieID') }}</p>
        @endif
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="col-md-2 mb-3">
        <label for="validationDefaultTimeVal">Time val</label>
        <!-- <input name="TimeVal" type="time" data-format="HH:mm:ss"  class="form-control" id="timeVal"> -->
        <input name="TimeVal" type="time" data-format="HH:mm:ss"  class="form-control">
        @if ($errors->has('TimeVal'))
          <p class="text-danger">{{ $errors->first('TimeVal') }}</p>
        @endif
      </div>
      <div class="col-md-1 col-md-offset-1  mb-3">
        <button style="margin-top: 35px" class="btn btn-primary" type="submit">Save</button>
      </div>
    </div>
  </form>
</div>
</div>
</section>





@stop