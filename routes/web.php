<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/employee/add',[
    'uses'  => 'EmployeeData@addEmployee',
    'as'    => 'addEmployee'
]);

Route::get('/employee/list',[
    'uses'  => 'EmployeeData@employeeList',
    'as'    => 'employeeList'
]);

Route::post('/employee/save',[
    'uses'  => 'EmployeeData@saveEmployee',
    'as'    => 'saveEmployee'
]);

Route::get('/employee/edit/{id}',[
    'uses'  => 'EmployeeData@editEmployee',
    'as'    => 'editEmployee'
]);

Route::post('/employee/update',[
    'uses'  => 'EmployeeData@updateEmployee',
    'as'    => 'updateEmployee'
]);

Route::get('/employee/del/{id}',[
    'uses'  => 'EmployeeData@delEmployee',
    'as'    => 'delEmployee'
]);

Route::get('/employee/view/{id}',[
    'uses'  => 'EmployeeData@viewEmployee',
    'as'    => 'viewEmployee'
]);

