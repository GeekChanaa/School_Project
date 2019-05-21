@extends('layouts.admin')



@section('content')


<section class="bg-light">
<h1> Routes To other functionnalities </h1>
<div class="col-lg-12">
  <a class="btn btn-danger col-lg-2" href="{{url('dashboard/users')}}">Users</a>
  <a class="btn btn-danger col-lg-2" href="{{url('dashboard/modules')}}">Modules</a>
  <a class="btn btn-danger col-lg-2" href="{{url('dashboard/branches')}}">Branches</a>
  <a class="btn btn-danger col-lg-2" href="{{url('dashboard/subjects')}}">Subjects</a>
  <a class="btn btn-danger col-lg-2" href="{{url('dashboard/rooms')}}">Rooms</a>
  <a class="btn btn-danger col-lg-2" href="{{url('dashboard/seances')}}">Seances</a>
</div>
<div class="col-lg-12 offset-lg-1">
  <a class="btn btn-primary col-lg-2" href="{{url('/dashboard/addbranch')}}">Add branch </a>
  <a class="btn btn-primary col-lg-2" href="{{url('/dashboard/addmodule')}}">Add Module </a>
  <a class="btn btn-primary col-lg-2" href="{{url('/dashboard/addsubject')}}">Add Subject </a>
  <a class="btn btn-primary col-lg-2" href="{{url('/dashboard/addroom')}}">Add Room </a>
  <a class="btn btn-primary col-lg-2" href="{{url('/dashboard/addseance')}}">Add Room </a>
</div>
</section>


@endsection
