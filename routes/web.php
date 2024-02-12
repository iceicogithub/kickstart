<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/add-admin', function () {
    return view('admin.create');
})->name('add-admin');

Route::get('/list-admin', function () {
    return view('admin.list');
})->name('list-admin');


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::any('/notes', [NotesController::class, 'index'])->name('notes');
// Route::any('/notes/store', [NotesController::class, 'store'])->name('notes.store');
// Route::any('/notes-edit/{id}', [NotesController::class, 'edit'])->name('notes.edit');
// Route::any('/notes-edit/{id}', [NotesController::class, 'edit'])->name('notes.edit');
// Route::any('/notes/{id}/update', [NotesController::class, 'update'])->name('notes.update');

require __DIR__ . '/auth.php';
