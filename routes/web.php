<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\NormalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\TopicController;
use App\Models\Topic;
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

Route::get('/googleLogin', [StudentController::class, 'googleLogin']);
Route::get('auth/google/call-back', [StudentController::class, 'googleHandle']);


Route::get('clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    return 'done: cache,route,config';
});
Route::get('optimize', function () {
    Artisan::call('optimize');
    return 'done';
});

Route::get('/', function () {
    return view('layouts.index');
})->name('/');

Route::middleware('guest:student')->group(function () {
    Route::get('student/login', [StudentController::class, 'showLoginForm'])->name('student.login');
    Route::post('student/login', [StudentController::class, 'login']);
    Route::get('student/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
    Route::post('student/register', [StudentController::class, 'register']);
    Route::get('student/forgot', [StudentController::class, 'forgot'])->name('student.forgot');
    Route::post('generate-otp', [StudentController::class, 'generateOtp'])->name('generate-otp');
    Route::post('verify-otp', [StudentController::class, 'verifyOtp'])->name('verify-otp');
    Route::post('/update-expire-column', [StudentController::class, 'updateExpireColumn'])->name('update-expire-column');
    Route::post('/check-user-existence', [ForgotPasswordController::class, 'checkUserExistence'])->name('checkUserExistence');
    Route::post('/send-forgot-password-email', [ForgotPasswordController::class, 'sendForgotPasswordEmail'])->name('sendForgotPasswordEmail');
    Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('resetPassword');
});

Route::middleware('auth:student')->group(function () {
    Route::get('student/list', [StudentController::class, 'studentList'])->name('student.list');
    Route::get('student/view/{id}', [StudentController::class, 'studentDetails'])->name('student.view');
    Route::get('student/profile/{id}', [StudentController::class, 'studentProfile'])->name('student.profile');
    Route::get('student/dashboard/{id}', [StudentController::class, 'studentDashboard'])->name('student.dashboard');
    Route::post('/student/form', [StudentController::class, 'studentRegister'])->name('student.form');
    Route::post('/student/logout', [StudentController::class, 'logout'])->name('student.logout');
    Route::get('/tests/question&answer', [NormalController::class, 'question_answer'])->name('tests.question&answer');
    Route::get('/tests/topics', [NormalController::class, 'topics'])->name('tests.topics');
    Route::get('/tests/question&answer', [NormalController::class, 'question_answer'])->name('tests.question&answer');
    Route::get('/student/registration', [NormalController::class, 'registrationPage'])->name('student.registration');
    Route::post('/store-student', [StudentController::class, 'store_student'])->name('store.student');
    Route::post('/razorpay', [StudentController::class, 'payment'])->name('razorpay.payment');


    // Route::get('/payment/callback', [StudentController::class, 'handlePaymentCallback'])->name('payment.callback');
    // Route::post('/process-payment', [StudentController::class, 'processPayment'])->name('process.payment');
    // Route::get('success_razorpay', [NormalController::class, 'razorpay-success'])->name('success_razorpay');
    // Route::get('cancel_razorpay', [NormalController::class, 'razorpay-cancel'])->name('cancel_razorpay');

    // chapter
    Route::get('chapter/{id}',[ChapterController::class, 'show'])->name('chapter.topics');

});

// Admin routes group
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->middleware('verified')->name('dashboard');
    Route::get('add/admin', [RegisteredUserController::class, 'create'])->name('add.admin');
    Route::get('admin/list', [RegisteredUserController::class, 'adminList'])->name('admin.list');
    Route::post('admin/register', [RegisteredUserController::class, 'store'])->name('register.store');
    Route::get('admin/edit/{id}', [RegisteredUserController::class, 'edit'])->name('register.edit');
    Route::post('admin/update/{id}', [RegisteredUserController::class, 'update'])->name('register.update');
    Route::get('admin/delete/{id}', [RegisteredUserController::class, 'delete'])->name('register.delete');

    // student dashboard
    Route::get('student/list', [StudentController::class, 'studentList'])->name('student.list');
    Route::get('student/view/{id}', [StudentController::class, 'studentDetails'])->name('student.view');

    // category
    Route::get('category/index', [CategoryController::class, 'index'])->name('category.index');
    Route::post('category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
    Route::get('/category/destroy/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    // chapter
    Route::get('chapter/index', [ChapterController::class, 'index'])->name('chapter.index');
    Route::post('chapter/store', [ChapterController::class, 'store'])->name('chapter.store');
    Route::get('/chapter/{id}/edit', [ChapterController::class, 'edit'])->name('chapter.edit');
    Route::post('/chapter/{id}', [ChapterController::class, 'update'])->name('chapter.update');
    Route::get('/chapter/destroy/{id}', [ChapterController::class, 'destroy'])->name('chapter.destroy');


    // topic
    Route::get('topic/index', [TopicController::class, 'index'])->name('topic.index');
    Route::get('/get-chapters/{category_id}', [TopicController::class, 'getChapters'])->name('get.chapters');
    Route::post('topic/store', [TopicController::class, 'store'])->name('topic.store');
    Route::get('/topic/{id}/edit', [TopicController::class, 'edit'])->name('topic.edit');
    Route::post('/topic/{id}', [TopicController::class, 'update'])->name('topic.update');
    Route::get('/topic/destroy/{id}', [TopicController::class, 'destroy'])->name('topic.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
