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
    return view('index');
})->name('index');

//Route::get('/index', function () {
//    return view('index')->name('index');
//});

Route::get('/index-training', function () {
    return view('pages.index-training');
})->name('');

Route::get('/login', function () {
    return view('pages.login');
})->name('');

Route::get('/login-alt', function () {
    return view('pages.login-alt');
})->name('');

Route::get('/tests', function () {
    return view('pages.tests');
})->name('');

Route::get('/test', function () {
    return view('pages.test');
})->name('');

