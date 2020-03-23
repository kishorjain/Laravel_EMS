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

/*Route::get('/', function () {
    
});*/
Route::get('/', 'MainController@index');

Route::get('/main', 'MainController@index');
Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/successlogin', 'EmployeesController@getEmployees');
Route::get('main/logout', 'MainController@logout');
Route::get('/home', 'EmployeesController@getEmployees');
Route::get('/home', function () {
   return view('home');
});
Route::get('main/allocation',  'EmployeesController@getEmployeeDepartmentName');
Route::post('main/assign', 'employeeallocations_controller@assign');

Route::get('main/allocatedEmployee',  'employeeallocations_controller@getAllocationData');
Route::get('main/search','employeeallocations_controller@search');
Route::get('main/MonthlyReport','employeeallocations_controller@monthlyReport');
