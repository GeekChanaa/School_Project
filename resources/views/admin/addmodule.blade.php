@extends('layouts.admin')


@section('content')

<section class="bg-dark">
  <h1> Create New Module </h1>
  <div class="col-lg-8 offset-lg-2">
    <form method="post" action="{{url('/createmodule')}}">
      {{csrf_field()}}
      <span> Title : </span> <input type="text" name="title">
      <span> Branch : </span> <select name="branch_id">
        @foreach($list_branches as $branch)
        <option value="{{$branch->id}}"> {{$branch->title}} </option>
        @endforeach
      </select>
      <button type="submit"> Create ! </button>
    </form>
  </div>
</section>
@endsection
