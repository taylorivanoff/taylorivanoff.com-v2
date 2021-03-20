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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/spotify', function() {
    $url = "spotify://artist/4RUlh6L1Nge1exTzWJ4K2z";

    return redirect()->away($url);
});

// require __DIR__.'/auth.php';
