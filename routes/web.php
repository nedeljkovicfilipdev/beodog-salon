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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin/prijava', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/admin/prijava', 'Auth\LoginController@login');
Route::post('/admin/odjava', 'Auth\LoginController@logout')->name('logout');

Route::get('/admin', 'Admin\HomeController@index')->name('admin.home');

Route::get('/admin/profil', 'Admin\ProfileController@show')->name('profile.show');
Route::post('/admin/profil', 'Admin\ProfileController@update')->name('profile.update');

Route::get('/admin/rezervacije', 'Admin\ReservationsController@index')->name('reservations.index');
Route::get('/admin/rezervacije/nova', 'Admin\ReservationsController@create')->name('reservations.create');
Route::get('/admin/rezervacije/{id}', 'Admin\ReservationsController@get')->name('reservations.single');
Route::get('/admin/rezervacije/{id}/delete', 'Admin\ReservationsController@confirmDelete')->name('reservations.confirmDelete');

Route::post('/admin/rezervacije', 'Admin\ReservationsController@store')->name('reservations.store');
Route::post('/admin/rezervacije/{id}', 'Admin\ReservationsController@update')->name('reservations.update');
Route::post('/admin/rezervacije/{id}/delete', 'Admin\ReservationsController@delete')->name('reservations.delete');
