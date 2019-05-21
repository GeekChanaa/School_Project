@extends('layouts.admin')

@section('content')

<form action="{{url('/createseance')}}" method="post">
{{csrf_field()}}
<span> Professeur : </span>
<select name="professor_id">
  @foreach($list_professors as $prof)
    <option value="{{$prof->id}}">{{$prof->name}}</option>
  @endforeach
 </select>
<br>
<span> Rooms : </span>
<select name="room_id">
  @foreach($list_rooms as $room)
  <option value="{{$room->id}}"> {{$room->name}} </option>
  @endforeach
</select>
<br>
<span> Subjects : </span>
<select name="subject_id">
  @foreach($list_subjects as $subject)
  <option value="{{$subject->id}}"> {{$subject->name}} </option>
  @endforeach
</select>
<br>
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <input type='text' class="form-control" id='datetimepicker4' name="start">
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <input type='text' class="form-control" id='datetimepicker4' name="end">
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker();
            });
        </script>
    </div>
</div>

<button type="submit" class="btn btn-danger"> Go </button>
</form>


@endsection
