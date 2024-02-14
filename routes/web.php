<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TransactionController;
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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/utility/404', function () {
        return view('pages/utility/404');
    })->name('404');

    Route::fallback(function() {
        return view('pages/utility/404');
    });

    // Our routes
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/index-training', function () {
        return view('pages.index-training');
    })->name('training');

    Route::get('/login-default', function () {
        return view('pages.login');
    })->name('login-default');

    Route::get('/login-alt', function () {
        return view('pages.login-alt');
    })->name('login-alt');

    Route::get('/tests', function () {
        return view('pages.tests');
    })->name('tests');

    Route::get('/test', function () {
        return view('pages.test');
    })->name('test');

    Route::get('/library-page', function () {
        return view('pages.library-page');
    })->name('library-page');

    Route::get('/vote', function () {
        return view('pages.vote');
    })->name('vote');

    Route::get('/vote-available-page', function () {
        return view('pages.vote-available-page');
    })->name('vote-available');

    Route::get('/vote-past-page', function () {
        return view('pages.vote-past-page');
    })->name('vote-past');
});