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

// ↓追加
use App\Employee;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// ↓追加
Route::get('/emp', 'EmployeeController@index')->name('emp');
Route::get('/api/employees', function () {
    $employees = Employee::all()->count();
    return App\Employee::paginate($employees);
});
