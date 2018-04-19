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
Route::get('/employee/edit', 'EmployeeController@edit')->name('employee/edit');
Route::get('/employee/create', 'EmployeeController@create')->name('employee/create');
Route::get('/employee/delete', 'EmployeeController@delete')->name('employee/delete');
Route::get('/project', 'ProjectController@index')->name('project');

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();