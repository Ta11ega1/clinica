<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes
Route::middleware(['auth'])->group(function(){
	//Roles
	Route::resource('roles', 'RoleController');

	
		//Medic
	Route::post('medics/store', 'MedicController@store')->name('medics.store')->middleware('permission:medics.create');

	Route::get('medics', 'MedicController@index')->name('medics.index')->middleware('permission:medics.index');

	Route::get('medics/create', 'MedicController@create')->name('medics.create')->middleware('permission:medics.create');

	Route::put('medics/{medic}', 'MedicController@update')->name('medics.update')->middleware('permission:medics.edit');

	Route::get('medics/{medic}', 'MedicController@show')->name('medics.show')->middleware('permission:medics.show');

	Route::delete('medics/{medic}', 'MedicController@destroy')->name('medics.destroy')->middleware('permission:medics.destroy');

	Route::get('medics/{medic}/edit', 'MedicController@edit')->name('medics.edit')->middleware('permission:medics.edit');

	//Users
	Route::get('users', 'UserController@index')->name('users.index')->middleware('permission:users.index');

	Route::put('users/{user}', 'UserController@update')->name('users.update')->middleware('permission:users.edit');

	Route::get('users/{user}', 'UserController@show')->name('users.show')->middleware('permission:users.show');

	Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')->middleware('permission:users.destroy');

	Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')->middleware('permission:users.edit');

	//Citas
	Route::post('citas/store', 'CitaController@store')->name('citas.store')->middleware('permission:citas.citas');

	Route::get('citas', 'CitaController@index')->name('citas.index')->middleware('permission:citas.index');

	Route::get('citas/citas', 'CitaController@citas')->name('citas.citas')->middleware('permission:citas.citas');

	Route::put('citas/{cita}', 'CitaController@update')->name('citas.update')->middleware('permission:citas.edit');

	Route::delete('citas/{cita}', 'CitaController@destroy')->name('citas.destroy')->middleware('permission:citas.destroy');

	Route::get('citas/{cita}/edit', 'CitaController@edit')->name('citas.edit')->middleware('permission:citas.edit');
});