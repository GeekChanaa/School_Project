<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\branch;
use App\module;
use App\subject;
use App\room;
use App\seance;
use Auth;

class dashboard extends Controller
{
    /* Controller for admin actions only */

    // Route to index page
    public function index(){
      return view('admin.index');
    }

    // Route to list of classes
    public function seances(){
      $seances = seance::all();
      $data = [
        'list_seances' => $seances,
      ];
      return view('admin.seances')->with($data);
    }

    // Route to list of users
    public function users(){
      $users=User::all();
      $data=[
        'list_users' => $users,
      ];
      return view('admin.users')->with($data);
    }

    // Route to list of modules
    public function modules(){
      $modules=module::all();
      $data=[
        'list_modules'=>$modules,
      ];
      return view('admin.modules')->with($data);
    }

    // Route to list of subjects
    public function subjects(){
      $subjects=subject::all();
      $data=[
        'list_subjects'=>$subjects,
      ];
      return view('admin.subjects')->with($data);
    }

    // Route to list of rooms
    public function rooms(){
      $rooms=room::all();
      $data=[
        'list_rooms' => $rooms,
      ];
      return view('admin.rooms')->with($data);
    }

    // Route to list of branches
    public function branches(){
      $branches=branch::all();
      $data=[
        'list_branches' => $branches,
      ];
      return view('admin.branches')->with($data);
    }

    // Route to add branch
    public function addbranch(){
      return view('admin.addbranch');
    }

    // Route to add module
    public function addmodule(){
      $branches = branch::all();
      $professors = User::all()->where('rank','=','professor');
      $data=[
        'list_professors' => $professors,
        'list_branches' => $branches
      ];
      return view('admin.addmodule')->with($data);
    }

    // Route to add room
    public function addroom(){
      return view('admin.addroom');
    }

    // Route to add class
    public function addseance(){
      $subjects = subject::all();
      $rooms = room::all();
      $professors = User::all()->where('rank','=','professor');
      $data=[
        'list_subjects' => $subjects,
        'list_rooms' => $rooms,
        'list_professors' => $professors
      ];
      return view('admin.addseance')->with($data);
    }

    // Route to add subject
    public function addsubject(){
      $modules = module::all();
      $professors = User::all()->where('rank','=','professor');
      $data=[
        'list_professors' => $professors,
        'list_modules' => $modules,
      ];
      return view('admin.addsubject')->with($data);
    }

    // Create Branch function
    public function createbranch(Request $request){
      $branch = new branch;
      $branch->title = $request->title;
      $branch->save();
      return redirect()->back();
    }

    // Create module function
    public function createmodule(Request $request){
      $module = new module;
      $module->title = $request->title;
      $module->professor_id = $request->professor_id;
      $module->branch_id = $request->branch_id;
      $module->save();
      return redirect()->back();
    }

    // Create Subject Function
    public function createsubject(Request $request){
      $subject = new subject;
      $subject->professor_id = $request->professor_id;
      $subject->title = $request->title;
      $subject->module_id = $request->module_id;
      $subject->save();
      return redirect()->back();
     }

     // Create Room function
     public function createroom(Request $request){
       $room = new room;
       $room->name = $request->room;
       $room->save();
       return redirect()->back();
     }

     // Create Seance Function :
     public function createseance(Request $request){
       $seance = new seance;
       $seance->professor_id = $request->professor_id;
       $seance->room_id = $request->room_id;
       $seance->subject_id = $request->subject_id;
       $seance->start = $request->start;
       $seance->end = $request->end;
       $seance->save();
       return redirect()->back();
     }

     // Delete Branch function
     public function deletebranch(Request $request){
       $branch = branch::all()->where('id','=',$request->id)->first();
       $branch->delete();
       return redirect()->back();
     }

     // Delete Module function
     public function deletemodule(Request $request){
       $module = module::all()->where('id','=',$request->id)->first();
       $module->delete();
       return redirect()->back();
     }

     // Delete Subject function
     public function deletesubject(Request $request){
       $subject = subject::all()->where('id','=',$request->id)->first();
       $subject->delete();
       return redirect()->back();
     }

     // Delete Room function
     public function deleteroom(Request $request){
       $room = room::all()->where('id','=',$request->id)->first();
       $room->delete();
       return redirect()->back();
     }

     // Delete User function
     public function deleteuser(Request $request){
       $user = User::all()->where('id','=',$request->id)->first();
       $user->delete();
       return redirect()->back();
     }

     // Delete class function
     public function deleteseance(Request $request){
       $class = seance::all()->where('id','=',$request->id)->first();
       $class->delete();
       return redirect()->back();
     }

     // Update user
     public function updateuser(Request $request){
       $user = User::all()->where('id','=',$request->id)->first();
       $user->rank = $request->rank;
       $user->save();
       return redirect()->back();
     }

}
