<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Authenticate;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//daftarkan middleware auhenticate dalam api
Route::middlewareGroup('auth.token-jwt', [
    Authenticate::class,
]);

//masukan endpoint yang akan melewati middleware authenticase
Route::middleware('auth.token-jwt')->group(function () {
    // endpoint yang diakses dengan token
});
