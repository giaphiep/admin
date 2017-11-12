<?php

Route::prefix('admin')->group(function () {

	Route::get('login', 'LoginController@show');

	Route::post('login','LoginController@login');

	Route::post('logout','LoginController@logout');

	Route::middleware(['admin.auth'])->group(function() {

		Route::get('dashboard','DashboardController@dashboard');

	});
	
});