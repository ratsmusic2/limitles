<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('start');
});
Route::get('/logosdesing', function () {
    return view('logosdesing');
});
Route::get('/blueprintsdesing', function () {
    return view('blueprintsdesing');
});
Route::get('/3ddesing', function () {
    return view('3ddesing');
});
Route::get('/interiordesingn', function () {
    return view('interiordesingn');
});