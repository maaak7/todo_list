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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'categories', 'middleware' => 'verified'], function () {
    Route::post('/create', 'CategoryController@create');
    Route::get('/get', 'CategoryController@get');
    Route::get('/{any?}', 'HomeController@index');
});

Route::group(['prefix' => 'tasks', 'middleware' => 'verified'], function () {
    Route::post('/create', 'TaskController@create');
    Route::get('/{any?}', 'HomeController@index');
});

//Route::group(['prefix' => 'categories'], function () {
//    Route::get('/edit/{id}', 'HomeController@index');
//    Route::get('/{any?}', 'HomeController@index');
//});
