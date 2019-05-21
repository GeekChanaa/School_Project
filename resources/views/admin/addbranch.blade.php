@extends('layouts.admin')


@section('content')

<section class="bg-dark">
  <h1> Create New Branch </h1>
  <div class="col-lg-8 offset-lg-2">
    <form method="post" action="{{url('/createbranch')}}">
      {{csrf_field()}}
      <span> Title : </span> <input type="text" name="title">
      <button type="submit"> Create ! </button>
    </form>
  </div>
</section>
@endsection
