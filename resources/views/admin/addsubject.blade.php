@extends('layouts.admin')


@section('content')

<section class="bg-dark">
  <h1> Create New Subject </h1>
  <div class="col-lg-8 offset-lg-2">
    <form method="post" action="{{url('/createsubject')}}">
      {{csrf_field()}}
      <span> Title : </span> <input type="text" name="title">
      <span> Module : </span> <select name="module_id">
        @foreach($list_modules as $module)
        <option value="{{$module->id}}"> {{$module->title}} </option>
        @endforeach
      </select>
      <button type="submit"> Create ! </button>
    </form>
  </div>
</section>
@endsection
