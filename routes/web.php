<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/cookie', function () {
    $cookie = "cookie.blade.php";
    return view('cookie', compact("cookie"));
});

Route::get('/session', function () {
    $session = "session.blade.php";
    return view('session', compact("session"));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
