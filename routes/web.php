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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/employee', 'EmployeeController@index')->name('employee');
Route::get('/empedit/{id}', 'EmployeeController@edit');
Route::post('/empupdate/{id}', 'EmployeeController@update');
Route::get('/empdelete/{id}', 'EmployeeController@delete');
Route::post('/empdelete/{id}', 'EmployeeController@dodelete');
Route::get('/empcreate', 'EmployeeController@create')->name('empcreate');
Route::post('/empcreate', 'EmployeeController@docreate')->name('empcreate');

Route::get('/project', 'ProjectController@index')->name('project');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();