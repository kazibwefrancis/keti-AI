<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});

Route::get('/platform', function () {
    return view('platform');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/publications', function () {
    return view('publications');
});
