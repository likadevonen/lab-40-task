<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return View::make('welcome');
});

Route::get('/support-and-maintenance', function () {
    return View::make('support-and-maintenance', ['name' => 'Iliya Devedzhiev']);
});
