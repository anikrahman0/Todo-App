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
//index route
Route::get('/', 'todoController@home')->name('todo.home');

//all routes for project
Route::get('/todo', 'todoController@index')->name('todo.show');
Route::get('/addproject', 'todoController@addProjectView')->name('addproject.show');
Route::post('/addproject', 'todoController@store')->name('addproject.store');
Route::get('/todo/{id}', 'todoController@destroy')->name('todo.destroy');
Route::get('/todo/edit/{id}', 'todoController@edit')->name('todo.edit');
Route::post('/todo/update/{id}', 'todoController@update')->name('todo.update');
Route::get('/tododeleteallconfirm', 'todoController@deleteAllProjectConfirm')->name('todo.deleteallconfirm');
Route::get('/tododeleteallproject', 'todoController@deleteAllProject')->name('todo.deleteallproject');

//all routes for  study
Route::get('/todostudy', 'studyController@index')->name('todostudy.show');
Route::get('/addstudy', 'studyController@addStudyView')->name('addstudy.show');
Route::post('/todostudy', 'studyController@store')->name('addstudy.store');
Route::get('/todostudy/{id}', 'studyController@destroy')->name('todostudy.destroy');
Route::get('/todostudy/edit/{id}', 'studyController@edit')->name('todostudy.edit');
Route::post('/todostudy/update/{id}', 'studyController@update')->name('todostudy.update');
Route::get('/studydeleteallconfirm', 'studyController@deleteAllStudyConfirm')->name('studydeleteallconfirm');
Route::get('/tododeleteallstudy', 'studyController@deleteAllStudy')->name('todo.deleteallstudy');

//all routes for others
Route::get('/todoothers', 'othersController@index')->name('todoothers.show');
Route::get('/addother', 'othersController@addOtherView')->name('addother.show');
Route::post('/todoothers', 'othersController@store')->name('addother.store');
Route::get('/todoothers/{id}', 'othersController@destroy')->name('todoothers.destroy');
Route::get('/todoothers/edit/{id}', 'othersController@edit')->name('todoothers.edit');
Route::post('/todoothers/update/{id}', 'othersController@update')->name('todoothers.update');
Route::get('/otherdeleteallconfirm', 'othersController@deleteAllOtherConfirm')->name('otherdeleteallconfirm');
Route::get('/tododeleteallother', 'othersController@deleteAllOther')->name('todo.deleteallother');



