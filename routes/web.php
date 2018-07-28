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

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('usuarios/alumno','AlumnoController');

Route::prefix('usuarios')->group(function() {
	Route::get('alumno','AlumnoController@index');
	Route::get('create','AlumnoController@create');
	Route::post('create','AlumnoController@store')->name('create');
	Route::get('alumno/{id}/edit','AlumnoController@edit');
	Route::get('alumno/{id}/editP','AlumnoController@editP');
	Route::get('alumno/{id}/mas','AlumnoController@show');
	Route::patch('alumno/edit/{id}','AlumnoController@update')->name('upedit');
});

Route::get('usuarios/alumno/all', 'AlumnoController@all');
Auth::routes();
Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  });

