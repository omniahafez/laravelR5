<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('omnia', function () {
    return ('welcome to my web');
});

Route::get('omnia/{id}', function ($id) {
    return ('welcome to my web'.$id);
});