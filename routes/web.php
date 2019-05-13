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


Route::prefix('admin')->group(function () {

  Route::resource('organizations','organizationsController');
  Route::get('organizations/{id}/destroy',['uses'=>'organizationsController@destroy', 'as'=>'organizations.destroy']);
  Route::get('organizations/report',['uses'=>'organizationsController@report', 'as'=>'organizations.report']);
  Route::post('organizations/show',['uses'=>'organizationsController@show', 'as'=>'organizations.show']);

  Route::resource('employees','employeesController');
  Route::get('employees/{id}/destroy',['uses'=>'employeesController@destroy', 'as'=>'employees.destroy']);
  Route::post('employees/store',['uses'=>'employeesController@store', 'as'=>'employees.store']);



  });
