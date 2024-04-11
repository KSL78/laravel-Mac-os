<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{name}', function ($name) {
    return 'welcome, '. $name;
});