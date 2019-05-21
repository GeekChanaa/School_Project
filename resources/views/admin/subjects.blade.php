@extends('layouts.admin')



@section('content')


<section class="bg-light">
<h1> Important Numbers </h1>
</section>

<section class="bg-light">
  <h1> Table Of Subjects </h1>
  <table class="table table-striped table-dark">
    <th scope="col">Id </th>
    <th scope="col">Module id </th>
    <th scope="col">Title </th>
<th scope="col"> Delete </th>
    @foreach($list_subjects as $subject)
    <tr>
      <td>{{$subject->id}} </td>
      <td>{{$subject->module_id}} </td>
      <td>{{$subject->title}} </td>
      <td>
        <form method="post" action="{{url('/deletesubject')}}">
          {{csrf_field()}}
          {{method_field('DELETE')}}
          <input type="hidden" value="{{$subject->id}}" name="id">
          <button class="btn btn-danger"> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach
  </table>
</section>


@endsection
