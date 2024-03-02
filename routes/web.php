<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\NormalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('cache-clear', function () {
    Artisan::call('cache:clear');
    return 'done';
});

Route::get('route-clear', function () {
    Artisan::call('route:clear');
    return 'done';
});

Route::get('config-clear', function () {
    Artisan::call('config:clear');
    return 'done';
});
Route::get('optimize', function () {
    Artisan::call('optimize');
    return 'done';
});
Route::get('/', [NormalController::class, 'index'])->name('/');


Route::middleware('guest:student')->group(function () {
    Route::get('student/login', [StudentController::class, 'showLoginForm'])->name('student.login');
    Route::post('student/login', [StudentController::class, 'login']);
    Route::get('student/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
    Route::post('student/register', [StudentController::class, 'register']);
    Route::get('student/forgot',[StudentController::class,'forgot'])->name('student.forgot');
});

Route::middleware('auth:student')->group(function () {
    Route::get('student/list', [StudentController::class, 'studentList'])->name('student.list');
    Route::get('student/view/{id}', [StudentController::class, 'studentDetails'])->name('student.view');
    Route::get('student/profile/{id}', [StudentController::class, 'studentProfile'])->name('student.profile');
    Route::get('student/dashboard/{id}', [StudentController::class, 'studentDashboard'])->name('student.dashboard');
    Route::post('/student/logout', [StudentController::class, 'logout'])->name('student.logout');
    Route::get('/tests/topics',[NormalController::class,'topics'])->name('tests.topics');
    Route::get('/tests/question&answer',[NormalController::class,'question_answer'])->name('tests.question&answer');
    Route::get('/student/registration', [NormalController::class, 'registrationPage'])->name('student.registration');

});

// Admin routes group
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->middleware('verified')->name('dashboard');

    Route::get('add/admin', [
        RegisteredUserController::class,
        'create'
    ])->name('add.admin');
    Route::get('admin/list', [RegisteredUserController::class, 'adminList'])->name('admin.list');
    Route::post('admin/register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('admin/edit/{id}', [RegisteredUserController::class, 'edit'])->name('register.edit');
    Route::post('admin/update/{id}', [RegisteredUserController::class, 'update'])->name('register.update');
    Route::get('admin/delete/{id}', [RegisteredUserController::class, 'delete'])->name('register.delete');

    // student dashboard
    Route::get('student/list', [StudentController::class, 'studentList'])->name('student.list');
    Route::get('student/view/{id}', [StudentController::class, 'studentDetails'])->name('student.view');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
