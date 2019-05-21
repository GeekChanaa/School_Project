@extends('layouts.general')


@section('content')

<section class="bg-light offset">
  <div class="row col-lg-8 col-offset-2">
  <table class="table table-primary">
    <th scope="col">Student </th>
    <th scope="col">Note </th>
    <th scope="col">add </th>
    @foreach($list_students as $student)
    <tr>
      <td>{{$student->name}} </td>
      <form method="post" action="{{url('/createnote')}}">
      <td><input type="number" name="note"> </td>
      <input type="hidden" name="student_id" value="{{$student->id}}">
      <input type="hidden" name="subject_id" value="{{$subject_id}}">
      <td><button type="submit" class="btn btn-dark"> submit </button> </td>
      </form>
    </tr>
    @endforeach
  </table>
</div>
</section>

@endsection
