<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsurePostMethod;

// admin
Route::get('/beranda', function () {
    return view('index', [
        'title' => 'home'
    ]);
})->name('home')->middleware('auth');


// admin
Route::resource('/kost', 'KostController')->middleware('auth');
Route::resource('/penghuni', 'PenghuniController')->middleware('auth');


// user 
Route::get('/', function () {
    return view('home', [
        'title' => 'home'
    ]);
});
Route::get('/data-kost', 'DataKostController@index');
Route::get('/data-penghuni', 'DataPenghuniController@index');
Route::post('/logout', 'LogoutController@logout')->middleware('auth')->name('logout')->middleware(EnsurePostMethod::class);

Route::get('/logout', 'LogoutController@index');


// login
Route::get('/login', 'LoginController@index')->middleware('guest')->name('login');
Route::post('/login', 'LoginController@authenticate');



