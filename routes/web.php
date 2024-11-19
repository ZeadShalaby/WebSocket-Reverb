<?php

use App\Events\TestEvent;
use App\Events\PrivateEvent;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/see', function () {
    return view('see');
});

Route::get('test', function () {
    event(new PrivateEvent('fuck you', 2));
    return "done";
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
