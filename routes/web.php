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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('Home');
});
Route::get('/employee', function () {
    return view('Employee');
});
Route::get('/addEmployee', function () {
    return view('addEmployee');
});
Route::get('company', function () {
    return view('Company');
});
Route::get('leave', function () {
    return view('Leave');
});
Route::get('teamreports', function () {
    return view('TeamReports');
});