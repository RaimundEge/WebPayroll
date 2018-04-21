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
Route::get('/empcreate', 'EmployeeController@create');
Route::post('/empcreate', 'EmployeeController@docreate');
Route::post('/empprojadd/{id}', 'EmployeeController@addproject');
Route::get('/empprojremove/{id}/{pid}', 'EmployeeController@removeproject');

Route::get('/project', 'ProjectController@index')->name('project');
Route::get('/projcreate', 'ProjectController@create');
Route::post('/projcreate', 'ProjectController@docreate');
Route::get('/projedit/{id}', 'ProjectController@edit');
Route::post('/projupdate/{id}', 'ProjectController@update');
Route::get('/projdelete/{id}', 'ProjectController@delete');
Route::post('/projdelete/{id}', 'ProjectController@dodelete');
Route::post('/projempadd/{id}', 'ProjectController@addemployee');
Route::get('/projempremove/{id}/{eid}', 'ProjectController@removeemployee');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();