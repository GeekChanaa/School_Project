@extends('layouts.admin')


@section('content')

<section class="bg-dark">
  <h1> Create New Room </h1>
  <div class="col-lg-8 offset-lg-2">
    <form method="post" action="{{url('/createroom')}}">
      {{csrf_field()}}
      <span> Name : </span> <input type="text" name="name">
      <button type="submit"> Create ! </button>
    </form>
  </div>
</section>

@endsection
