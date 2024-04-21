<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users/{name?}', function ($name = NULL) {
    return 'welcome, '. $name;
})->where('name','[a-zA-Z0-9]+');

Route::get('/product/{id?}', function ($id = NULL) {
    return '제품 id:'. $id;
})->where('id','[0-9]+');
