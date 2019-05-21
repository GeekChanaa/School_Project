@extends('layouts.general')




@section('content')

<section class="bg-light">
  <div class="col-lg-12">
    User Interface
  </div>
  <div class="row col-lg-12">
    <div class="col-lg-4 offset-lg-1" style="height:60vh;background-repeat: no-repeat;background-size:cover;background-image: url('{{ asset('storage/users_pdp/'.Auth::user()->phone.'.jpeg') }}');">
    </div>
    <div class="col-lg-5 offset-lg-1" style="background-color:red;height:60vh">
      <div class="row col-lg-12">
        <div class="col-lg-8 offset-lg-2 text-center">
          Personal Data :
        </div>
        <div class="col-lg-12">
          <form action="{{url('/modifyuser')}}" method="post">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{Auth::user()->id}}"><br>
            <span class="ui-span">Name : </span> <input class="ui-inp" type="text" name="name" placeholder="{{Auth::user()->name}}" value="{{Auth::user()->name}}">
            <span class="ui-span">Phone : </span> <input class="ui-inp" type="text" name="phone" placeholder="{{Auth::user()->phone}}" value="{{Auth::user()->phone}}">
            <span class="ui-span">Email : </span> <input class="ui-inp" type="text" name="email" placeholder="{{Auth::user()->email}}" value="{{Auth::user()->email}}">
            <span class="ui-span">Rank : </span> <input class="ui-inp" type="text" name="rank" placeholder="{{Auth::user()->rank}}" value="{{Auth::user()->rank}}">
            <button class="btn btn-danger" type="submit"> Modify </button>
          </form>
        </div>
      </div>

    </div>
</section>



@endsection
