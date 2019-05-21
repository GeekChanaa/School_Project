<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;
use Auth;

class userController extends Controller
{
  // Modify User function
  public function modifyuser(Request $request){

    $user = User::all()->where('id','=',$request->id)->first();
    Storage::move('public/users_pdp/'.$user->phone.'.jpeg','public/users_pdp/'.$request->phone.'.jpeg');
    $user->name = $request->name;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->save();
    return redirect()->back();
  }
}
