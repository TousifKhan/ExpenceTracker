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

Route::get('/', 'AppController@index')->name('landed');
Route::get('/app', 'AppController@index')->name('app');
Route::get('/authenticated', 'AppController@authenticated')->name('authenticated');

Auth::routes();

Route::prefix('admin')->group(function () {
    Route::get('dashboard',     'Admin\AdminDashboardController@index')->name('admin_dashboard');
    //Admin/Users
    Route::get('units',         'Admin\UnitController@index');
    Route::get('units/create',  'Admin\UnitController@create');
    Route::get('units/{unit}',  'Admin\UnitController@edit');
    Route::post('units',        'Admin\UnitController@store');
    Route::put('units/{unit}',  'Admin\UnitController@update');
    //Admin/Users
    Route::get('users',         'Admin\UserController@index');
    Route::get('users/create',  'Admin\UserController@create');
    Route::get('users/{user}',  'Admin\UserController@edit');
    Route::post('users',        'Admin\UserController@store');
    Route::put('users/{user}',  'Admin\UserController@update');

});

Route::prefix('user')->group(function () {
    Route::get('dashboard',     'User\UserDashboardController@index')->name('user_dashboard');
    
});