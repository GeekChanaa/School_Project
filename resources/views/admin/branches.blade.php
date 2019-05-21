@extends('layouts.admin')



@section('content')


<section class="bg-light">
<h1> Important Number </h1>
</section>

<section class="bg-light">
  <h1> Table of Branches </h1>
  <table class="table table-striped table-primary">
    <th scope="col">ID </th>
    <th scope="col">Title </th>
    <th scope="col"> Delete </th>
    @foreach($list_branches as $branch)
    <tr>
      <td>{{$branch->id}} </td>
      <td>{{$branch->title}} </td>
      <td>
        <form method="post" action="{{url('/deletebranch')}}">
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
