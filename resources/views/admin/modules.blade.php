@extends('layouts.admin')



@section('content')


<section class="bg-light">
  <h1> Important Numbers </h1>
</section>

<section class="bg-light">
  <h1> List Of Modules </h1>
  <table class="table table-primary table-striped">
    <th scope="col">ID </th>
    <th scope="col">Branch Id </th>
    <th scope="col">Title </th>
    <th scope="col"> Delete </th>
    @foreach($list_modules as $module)
    <tr>
      <td>{{$module->id}}</td>
      <td>{{$module->branch_id}}</td>
      <td>{{$module->title}}</td>
      <td>
        <form method="post" action="{{url('/deletemodule')}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="hidden" name="id" value="{{$module->id}}">
          <button class="btn btn-danger"> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
