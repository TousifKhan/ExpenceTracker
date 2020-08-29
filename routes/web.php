<?php

use Illuminate\Support\Facades\View;
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

Route::get('/users', function () {
    return view('users', ['fatherName' => 'Zahir Khan']);
});

Route::get('/', 'AppController@index');

Route::get('/cars/create', 'CarController@create');
Route::get('/cars', 'CarController@index');
Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
