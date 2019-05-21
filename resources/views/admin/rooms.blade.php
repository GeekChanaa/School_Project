@extends('layouts.admin')



@section('content')


<section class="bg-light">
  <h1> Important Numbers </h1>
</section>

<section class="bg-light">
  <h1> Table Of Rooms </h1>
  <table class="table table-striped table-dark">
    <th scope="col">Id </th>
    <th scope="col">Name </th>
<th scope="col"> Delete </th>
    @foreach($list_rooms as $room)
    <tr>
      <td>{{$room->id}} </td>
      <td>{{$room->name}} </td>
      <td>
        <form method="post" action="{{url('/deleteroom')}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="hidden" name="id" value="{{$room->id}}">
          <button class="btn btn-danger"> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
