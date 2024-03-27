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

Route::get('/student/create', 'StudentController@create')->name('student.create');

Route::post('/student', 'StudentController@store')
->name('student.store');

Route::get('/student', 'StudentController@index')
->name('student.index');

Route::get('/student/{student}', 'StudentController@show')
->name('student.show');

Route::get('/student/{student}/edit', 'StudentController@edit')
->name('student.edit');

Route::patch('/student/{student}', 'StudentController@update')
->name('student.update');

Route::delete('/student/{student}', 'StudentController@destroy')
->name('student.destroy');

Route::get('/login', 'AdminController@index')->name('login.index');
Route::get('/logout', 'AdminController@logout')->name('login.logout');
Route::post('/login', 'AdminController@process')->name('login.process');
