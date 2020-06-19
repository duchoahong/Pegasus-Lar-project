@foreach($roomRecords as $val)
<li>
    <a href="{{route('room.ShowAllDate', ['id' => $val->RoomID])}}">
        <i class="far fa-calendar-check"></i>{{$val->RoomName}}</a>
</li>
@endforeach