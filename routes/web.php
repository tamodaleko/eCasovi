<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// Student
Route::prefix('student')->name('student.')->namespace('Student')->group(function () {
    // Authentication
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    

    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Teacher
Route::prefix('teacher')->name('teacher.')->namespace('Teacher')->group(function () {
    // Authentication
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');

    // Register
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register');
    

    // Dashboard
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    // User
    Route::get('account', 'UserController@editAccount')->name('user.account');
    Route::patch('account', 'UserController@updateAccount')->name('user.account.update');
    Route::get('password', 'UserController@editPassword')->name('user.password');
    Route::patch('password', 'UserController@updatePassword')->name('user.password.update');

    // Packages
    Route::get('packages', 'PackageController@index')->name('packages.index');
    Route::post('packages', 'PackageController@store')->name('packages.store');
    Route::get('packages/create', 'PackageController@create')->name('packages.create');
    Route::patch('packages/{package}', 'PackageController@update')->name('packages.update');
    Route::delete('packages/{package}', 'PackageController@destroy')->name('packages.destroy');
    Route::get('packages/{package}/edit', 'PackageController@edit')->name('packages.edit');
});
