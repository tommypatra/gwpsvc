<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/peta-1', function () {
    return view('map1');
});

Route::get('/peta-2', function () {
    return view('map2');
});

Route::get('/peta-3', function () {
    return view('map3');
});

Route::get('/peta-4', function () {
    return view('map4');
});
