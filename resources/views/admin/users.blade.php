@extends('layouts.admin')



@section('content')


<section class="bg-light">
<h1> Important Numbers </h1>
</section>

<section class="bg-light">
  <h1> Table Of Users </h1>
  <table class="table table-striped table-dark">
    <th scope="col">Id </th>
    <th scope="col">Name </th>
    <th scope="col">Email </th>
    <th scope="col">Phone </th>
    <th scope="col">Rank </th>
    <th scope="col">Registration Date </th>
    <th scope="col"> Delete </th>
    @foreach($list_users as $user)
    <tr>
      <td>{{$user->id}} </td>
      <td>{{$user->name}} </td>
      <td>{{$user->email}} </td>
      <td>{{$user->phone}} </td>
      <td>{{$user->rank}} </td>
      <td>{{$user->created_at}} </td>
      <td>
        <form method="post" action="{{url('/deleteuser')}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="hidden" value="{{$user->id}}" name="id">
          <button class="btn btn-danger"> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
