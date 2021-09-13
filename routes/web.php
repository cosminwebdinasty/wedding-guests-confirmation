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


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/root', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::post('/confirmation', 'HomeController@store')->name('confirm');

Route::get('/gallery', 'HomeController@gallery')->name('gallery');




Route::group(['middleware' => ['auth']], function() {
    Route::get('/admin', 'AdminController@index')->name('admin');

    Route::delete('/admin/delete/{id}', 'AdminController@delete')->name('admin.delete');
});







