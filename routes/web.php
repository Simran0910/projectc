<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('awareness');
});
Route::get('/vandalism', function () {
    return view('vandalism');
});
Route::get('/women', function () {
    return view('women');
});
Route::get('/assault', function () {
    return view('assault');
});
Route::get('/drug', function () {
    return view('drug');
});
Route::get('/financialfraud', function () {
    return view('financialfraud');
});
Route::get('/terrorist', function () {
    return view('terrorist');
});
Route::get('/kidnapping', function () {
    return view('kidnapping');
});
Route::get('/cyber', function () {
    return view('cyber');
});
Route::get('/money', function () {
    return view('money');
});
Route::get('/whitecollar', function () {
    return view('whitecollar');
});
Route::get('/bribery', function () {
    return view('bribery');
});
Route::get('/helpline', function () {
    return view('helpline');
});
Route::get('/res', function () {
    return view('res');
});
Route::get('/resources', function () {
    return view('resources');
});
