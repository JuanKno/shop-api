<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('clean', function () {
    $configClear = Artisan::call('config:clear');
    $configClear = Artisan::call('route:clear');
    $configClear = Artisan::call('cache:clear');
    $configClear = Artisan::call('config:cache');
    $configClear = Artisan::call('view:clear');

    return  'Sistema limpiado con éxito';
});

Auth::routes();

Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
});
