<?php

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
	Route::get('{id}/mas','AlumnoController@show');//--------
	Route::get('alumno/{id}/editP','AlumnoController@editP');
	
	Route::get('alumno/{num}/indDoctorado','AlumnoController@indDoctorado');
	Route::get('alumno/{num}/indicador','AdminController@indicador');
	Route::patch('alumno/edit/{id}','AlumnoController@update')->name('upedit');
	Route::patch('alumno/editP/{id}','AlumnoController@updatePos')->name('upeditPos');
	Route::get('/inicio', 'AdminController@index')->name('user.dashboard');
	Route::get('alumno/docente/inicio', 'AdminController@Docente')->name('Docente.dashboard');
	Route::get('alumno/docente','AlumnoController@Doinicio');
});

Route::get('usuarios/alumno/all', 'AlumnoController@all');
Route::get('usuarios/alumno/{id}/{num}/reporte', 'AlumnoController@reporte');

//Route::get('usuarios/alumno/{num}/reporte', 'AdminController@reporte');

Auth::routes();
// Route::get('/home', 'HomeController@index');
// Route::get('usuarios/admelecU', 'AdminController@ui')->name('users.dashboard');

// Route::prefix('admin')->group(function() {
// 	Route::get('/', 'AdminController@index')->name('admin.dashboard');
//     Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
//     Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

//   });

Route::prefix('user')->group(function() {
    Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('user.login');
    Route::post('/login', 'Auth\UserLoginController@login')->name('user.login.submit');
    Route::post('logout', 'Auth\UserLoginController@logout')->name('logout');
  });



