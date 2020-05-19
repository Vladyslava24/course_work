<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/**
 * Basic routes
 */
Route::get('/', function () {
})->name('landing');

Route::get('/', 'TourController@allData')->name('landing');

Route::get('/tour', function () {
    return view('container_tour');
})->name('tour');

Route::get('/tour', 'TourContainerController@allData')->name('tour');

Route::get('/one-tour', function () {
    return view('tour');
})->name('one-tour');

Route::get('/cruise', function () {
    return view('container_cruise');
})->name('cruise');

Route::get('/cruise', 'CruiseController@allData')->name('cruise');

Route::get('/sale', function () {
    return view('desc_sale');
})->name('sale');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/all_applications', function () {
    return view('all_applications');
})->name('all_application');


/**
 * Authentification routes
 */
Auth::routes([
    'reset' => false,
    'verify'=> false
]);

Auth::routes();

Route::get('/all_applications', 'HomeController@index')->name('home');

// Маршруты аутентификации...
/*Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');*/
//Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('/');
});


// Маршруты регистрации...
/*Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');*/
