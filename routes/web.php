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
	Route::get('alumno/{id}/mas','AlumnoController@show');
	Route::get('alumno/{id}/editP','AlumnoController@editP');
	
	Route::get('alumno/{num}/indDoctorado','AlumnoController@indDoctorado');
	Route::get('alumno/{num}/indicador','AdminController@indicador');
	Route::patch('alumno/edit/{id}','AlumnoController@update')->name('upedit');
	Route::patch('alumno/editP/{id}','AlumnoController@updatePos')->name('upeditPos');
});

Route::get('usuarios/alumno/all', 'AlumnoController@all');
Route::get('usuarios/alumno/{id}/{num}/reporte', 'AlumnoController@reporte');
//Route::get('usuarios/alumno/{num}/reporte', 'AdminController@reporte');

Auth::routes();
// Route::get('/home', 'HomeController@index');
// Route::get('usuarios/admelecU', 'AdminController@ui')->name('users.dashboard');

Route::prefix('admin')->group(function() {
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  });

Route::prefix('user')->group(function() {
	Route::get('/', 'LoginUser@index')->name('user.dashboard');
    Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('user.login');
    Route::post('/login', 'Auth\UserLoginController@login')->name('user.login.submit');
    Route::post('logout', 'Auth\UserLoginController@logout')->name('logout');
  });



