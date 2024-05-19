<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\DashboardController;
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

Route::fallback(function() {
    return view('utility/404');
});

Route::post('/logout', function () {
    auth()->logout();

    session()->invalidate();
    session()->regenerateToken();
    return redirect('/');
})->name('logout');


Route::middleware(['auth', 'auth.session', 'verified'])->group(function () {

    // Admin routes
    Route::group(['prefix' => 'admin', 'middleware' => 'role:super-admin|admin'], function () {

        Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

        // Livewire
        Route::get('/users', \App\Livewire\Admin\User\UsersManager::class)->name('admin.users.index');
        Route::get('/roles', \App\Livewire\Admin\Role\RolesManager::class)->name('admin.roles.index');
        Route::get('/permissions', \App\Livewire\Admin\Permission\PermissionsManager::class)->name('admin.permissions.index');

        Route::get('/tasks', \App\Livewire\Admin\Task\TasksManager::class)->name('admin.tasks.index');
        Route::get('/polls', \App\Livewire\Admin\Poll\PollsManager::class)->name('admin.polls.index');
        Route::get('/news', \App\Livewire\Admin\News\NewsManager::class)->name('admin.news.index');
        Route::get('/qualifications', \App\Livewire\Admin\Qualification\QualificationsManager::class)->name('admin.qualifications.index');
        Route::get('/category-qualifications', \App\Livewire\Admin\QualificationCategory\QualificationCategoriesManager::class)->name('admin.category_qualifications.index');
        Route::get('/professions', \App\Livewire\Admin\Profession\ProfessionsManager::class)->name('admin.professions.index');
        Route::get('/materials', \App\Livewire\Admin\Material\MaterialsManager::class)->name('admin.materials.index');
        Route::get('/category-materials', \App\Livewire\Admin\MaterialCategory\MaterialCategoriesManager::class)->name('admin.category_materials.index');
    });

    // Public pages routes
    Route::get('/', \App\Livewire\Pages\Home\HomePageIndex::class)->name('home');
    Route::get('/polls', \App\Livewire\Pages\Poll\PollPageIndex::class)->name('polls.index');
    Route::get('/unfinished-polls/{id}', \App\Livewire\Pages\Poll\UnfinishedPollPageShow::class)->name('unfinished-polls.show');
    Route::get('/finished-polls/{id}', \App\Livewire\Pages\Poll\FinishedPollPageShow::class)->name('finished-polls.show');
    Route::get('/blog', \App\Livewire\Pages\News\NewsPageIndex::class)->name('news.index');
    Route::get('/blog/{id}', \App\Livewire\Pages\News\NewsPageShow::class)->name('news.show');
    Route::get('/responsibilities-and-competencies/{categoryId?}', \App\Livewire\Pages\Qualification\QualificationPageIndex::class)->name('responsibilities.index');
    Route::get('/responsibilities-and-competencies/detail/{id}', \App\Livewire\Pages\Qualification\QualificationPageShow::class)->name('responsibilities.show');
    Route::get('/library/{categoryId?}', \App\Livewire\Pages\Material\MaterialPageIndex::class)->name('library.index');
    Route::get('/library/detail/{id}', \App\Livewire\Pages\Material\MaterialPageShow::class)->name('library.show');
    Route::get('/professions', \App\Livewire\Pages\Profession\ProfessionPageIndex::class)
        ->name('professions.index')
        ->middleware('can:viewAny,App\Models\User');
    Route::get('/professions/{id}', \App\Livewire\Pages\Profession\ProfessionPageShow::class)
        ->name('professions.show')
        ->middleware('can:viewAny,App\Models\User');
    Route::get('/employee/{id}', \App\Livewire\Pages\Employee\EmployeePageShow::class)
        ->name('employee.show')
        ->middleware(['can:view,user']);

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

    Route::get('/home-2', function () {
        return view('home');
    })->name('home-2');

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

    Route::get('/vote-page', function () {
        return view('vote');
    })->name('vote-page');

    Route::get('/vote-available-page', function () {
        return view('vote-available-page');
    })->name('vote-available');

    Route::get('/vote-past-page', function () {
        return view('vote-past-page');
    })->name('vote-past');

//    Route::get('/blog', function () {
//        return view('blog-page');
//    })->name('blog');

    Route::get('/responsibilities', function () {
        return view('responsibilities-page');
    })->name('responsibilities');

    Route::get('/responsibilities-categories', function () {
        return view('responsibilities-categories-page');
    })->name('responsibilities-categories');

    Route::get('/responsibilities-article', function () {
        return view('responsibilities-article-page');
    })->name('responsibilities-article');

});

