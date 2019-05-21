<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// ADMIN ROUTES :
Route::group(['middleware' => 'admin'],function(){
  Route::get('/dashboard','dashboard@index');
  Route::get('/dashboard/users','dashboard@users');
  Route::get('/dashboard/modules','dashboard@modules');
  Route::get('/dashboard/branches','dashboard@branches');
  Route::get('/dashboard/subjects','dashboard@subjects');
  Route::get('/dashboard/rooms','dashboard@rooms');
  Route::get('/dashboard/seances','dashboard@seances');
  // Routes to create forms
  Route::get('/dashboard/addroom','dashboard@addroom');
  Route::post('/createroom','dashboard@createroom');
  Route::get('/dashboard/addbranch','dashboard@addbranch');
  Route::post('/createbranch','dashboard@createbranch');
  Route::get('/dashboard/addsubject','dashboard@addsubject');
  Route::post('/createsubject','dashboard@createsubject');
  Route::get('/dashboard/addmodule','dashboard@addmodule');
  Route::post('/createmodule','dashboard@createmodule');
  Route::get('/dashboard/addseance','dashboard@addseance');
  Route::post('/createseance','dashboard@createseance');
  // Routes to delete forms
  Route::delete('/deleteseance','dashboard@deleteseance');
  Route::delete('/deletebranch','dashboard@deletebranch');
  Route::delete('/deleteroom','dashboard@deleteroom');
  Route::delete('/deletemodule','dashboard@deletemodule');
  Route::delete('/deletesubject','dashboard@deletesubject');
  // Routes to update forms
  Route::post('/admin/modifyuser','dashboard@updateuser');
});

/***** User Interface Routes *****/

// Route to user interface
Route::get('/userinterface','HomeController@UserInterface');

// Change profile image

// token to become a student

// token to become a teacher

// Delete Account

// change personal data
Route::post('/modifyuser','userController@modifyuser');
/** Professor Interface Routes **/
Route::get('/professorinterface','ProfessorController@interface');
// Notes d'une matiere d'un prof
Route::get('/pi/notes/{subject_id}','ProfessorController@notes');
// Ajouter une note
Route::post('/createnote','NotesController@create');

// change personal data of professor :
Route::post('/modifyProfessor','ProfessorController@modifyProfessor');
