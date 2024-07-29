<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/pacifrica', function () {
    return view('projects.pacifrica');
})->name('pacifrica');
