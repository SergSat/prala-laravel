<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Jetstream\UserProfileController;
use App\Http\Controllers\TaskController;
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

Route::fallback(function() {
    return view('utility/404');
});

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Admin routes
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/tasks', [TaskController::class, 'index'])->name('admin.tasks');

    });

    // App routes
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

});

// Our routes
Route::get('/home-manager', function () {
    return view('home-manager');
})->name('home-manager');

Route::get('/staff-total', function () {
    return view('staff-total-page');
})->name('staff-total');

Route::get('/staff-profession', function () {
    return view('staff-profession-page');
})->name('staff-profession');

Route::get('/staff-employee', function () {
    return view('staff-employee-page');
})->name('staff-employee');

Route::get('/home-hr', function () {
    return view('home-hr');
})->name('home-hr');

Route::get('/hr-staff-total', function () {
    return view('hr-staff-total-page');
})->name('hr-staff-total');

Route::get('/hr-staff-profession', function () {
    return view('hr-staff-profession-page');
})->name('hr-staff-profession');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/calendar-page', function () {
    return view('calendar-page');
})->name('calendar-page');

Route::get('/index-training', function () {
    return view('index-training');
})->name('training');

Route::get('/register-page', function () {
    return view('register-page');
})->name('register-page');

Route::get('/login-default', function () {
    return view('login');
})->name('login-default');

Route::get('/login-alt', function () {
    return view('login-alt');
})->name('login-alt');

Route::get('/tests', function () {
    return view('tests');
})->name('tests');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::get('/library-page', function () {
    return view('library-page');
})->name('library-page');

Route::get('/vote', function () {
    return view('vote');
})->name('vote');

Route::get('/vote-available-page', function () {
    return view('vote-available-page');
})->name('vote-available');

Route::get('/vote-past-page', function () {
    return view('vote-past-page');
})->name('vote-past');

Route::get('/blog', function () {
    return view('blog-page');
})->name('blog');

Route::get('/responsibilities', function () {
    return view('responsibilities-page');
})->name('responsibilities');

Route::get('/responsibilities-categories', function () {
    return view('responsibilities-categories-page');
})->name('responsibilities-categories');

Route::get('/responsibilities-article', function () {
    return view('responsibilities-article-page');
})->name('responsibilities-article');