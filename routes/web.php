<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lab-40', function () {
    return view('lab-40', ['name' => 'Iliya Devedzhiev']);
});
