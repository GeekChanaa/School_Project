<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\subject;
use App\note;
use App\branch;
use App\module;
use Auth;

class ProfessorController extends Controller
{
    //route to professor interface
    public function interface(){
      $prof_subjects = subject::all()->where('professor_id','=',Auth::user()->id);
      $data = [
        'list_subjects' => $prof_subjects,
      ];
      return view('professors.interface')->with($data);
    }

    public function notes($subject_id){
      $module_id = subject::all()->where('id','=',$subject_id)->first()->module_id;
      $branch_id = module::all()->where('id','=',$module_id)->first()->branch_id;
      $students = User::all()->where('rank','=','student')->where('branch_id','=',$branch_id);
      $data=[
        'subject_id' => $subject_id,
        'list_students' => $students,
      ];
      return view('professors.subject')->with($data);
    }
    public function modifyProfessor(Request $request){

    }
}
