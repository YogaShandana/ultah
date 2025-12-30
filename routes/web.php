<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('birthday');
});

Route::get('/birthday', function () {
    return view('birthday');
});
