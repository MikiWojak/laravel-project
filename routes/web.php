<?php

use Illuminate\Support\Facades\Route;

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

/*
  GET /projects (index)               //All projects

  GET /projects/create (create)       //Form - add
  GET /projects/1 (show)              //One project
  POST /projects (store)              //Save new project

  GET /projects/1/edit (edit)         //Form - update
  PATCH /projects/1 (update)          //Update one project

  DELETE /projects/1 (destroy)        //Delete one project
*/

Route::resource('projects', 'App\Http\Controllers\ProjectsController');

// Route::get('/projects', 'App\Http\Controllers\ProjectsController@index');
//
// Route::get('/projects/create', 'App\Http\Controllers\ProjectsController@create');
// Route::get('/projects/{project}', 'App\Http\Controllers\ProjectsController@show');
// Route::post('/projects', 'App\Http\Controllers\ProjectsController@store');
//
// Route::get('/projects/{project}/edit', 'App\Http\Controllers\ProjectsController@edit');
// Route::patch('/projects/{project}', 'App\Http\Controllers\ProjectsController@update');
//
// Route::delete('/projects/{project}', 'App\Http\Controllers\ProjectsController@destroy');
