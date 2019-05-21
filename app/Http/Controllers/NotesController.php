<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\note;

class NotesController extends Controller
{
    //
    public function create(Request $request){
      $note = new note;
      $note->note=$request->note;
      $note->student_id=$request->student_id;
      $note->subject_id=$request->subject_id;
      $note->save();
      return redirect()->back();
    }
}
