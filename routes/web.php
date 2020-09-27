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

//Admin Route
Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function () {
    Route::get('dashboard',     'Admin\AdminDashboardController@index')->name('admin_dashboard');
    Route::resources([
        'units' =>  'Admin\UnitController',
        'users' =>  'Admin\UserController'
    ]);
    Route::get('users/{user}/access-history',     'Admin\UserController@accessHistory');

    //Contact Type
    Route::get('contacts',     'Admin\ContactTypeController@index');
    Route::resource('contact-type',   'Admin\ContactTypeController');
    //Route::post('contacts/type/create',  'Admin\ContactTypeController@store');

    
});

Route::group(['prefix' => 'user', 'middleware' => []], function () {
    Route::get('dashboard',     'User\UserDashboardController@index')->name('user_dashboard');
});