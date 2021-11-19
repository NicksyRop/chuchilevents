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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/event/create','EventsController@create')->name('create');
Route::post('/event/store','EventsController@store')->name('event.store');
Route::get('/events','EventsController@index')->name('events');
Route::get('/event/{id}/edit','EventsController@edit')->name('edit');
Route::post('/event/{id}/update','EventsController@update')->name('update');

Route::get('event/{id}/delete','EventsController@destroy')->name('delete');

Route::get('admin/dashboard','AdminController@index')->name('admin.dash');

Route::post('book','BookingsController@store')->name('book');
Route::get('users','AdminController@users')->name('users');
