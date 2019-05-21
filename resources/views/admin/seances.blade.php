@extends('layouts.admin')



@section('content')


<section class="bg-light">
<h1> Important Numbers </h1>
</section>

<section class="bg-light">
  <h1> Table of classes </h1>
  <table class="table table-striped table-primary">
    <th scope="col">ID </th>
    <th scope="col">Professor ID</th>
    <th scope="col">Room ID</th>
    <th scope="col">Subject ID</th>
    <th scope="col">From </th>
    <th scope="col">To </th>
    <th scope="col">Delete </th>
    @foreach($list_seances as $class)
    <tr>
      <td>{{$class->id}} </td>
      <td>{{$class->professor_id}} </td>
      <td>{{$class->room_id}} </td>
      <td>{{$class->subject_id}} </td>
      <td>{{$class->start}} </td>
      <td>{{$class->end}} </td>
      <td>
        <form method="post" action="{{url('/deleteseance')}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="hidden" value="{{$branch->id}}" name="id">
          <button class="btn btn-danger"> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
