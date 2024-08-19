<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/stories', function () {
    return view('stories');
});
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/online-courses', function () {
    return view('onlinecourses');
});

Route::post('/contact', [RegisterController::class, 'storeQuery'])->name('submit.query');
Route::get('/contact', [RegisterController::class, 'showContact'])->name('contact');
Route::get('/faculty.{id}', [DashboardController::class, 'showFaculty'])->name('faculty.info');
Route::get('/team', [DashboardController::class, 'indexInstructors'])->name('team');



//Courses info routes
Route::get('/chinese-course-info', function () {
    return view('courses.chinese-courseinfo');
});
Route::get('/spokenenglish-course-info', function () {
    return view('courses.english-courseinfo');
});
Route::get('/IELTS-course-info', function () {
    return view('courses.ielts-courseinfo');
});
Route::get('/pashto-course-info', function () {
    return view('courses.pashto-course-info');
});
Route::get('/korean-course-info', function () {
    return view('courses.korean-courseinfo');
});
Route::get('/arabic-course-info', function () {
    return view('courses.arabic-courseinfo');
});
Route::get('/german-course-info', function () {
    return view('courses.german-courseinfo');
});
Route::get('/french-course-info', function () {
    return view('courses.french-courseinfo');
});
Route::get('/portuguese-course-info', function () {
    return view('courses.portuguese-courseinfo');
});
Route::get('/russian-course-info', function () {
    return view('courses.russian-courseinfo');
});



//Subcourses info routes
Route::get('/chinese-course-a1', function () {
    return view('subcourses.chinese-a1');
});
Route::get('/chinese-course-a2', function () {
    return view('subcourses.chinese-a2');
});
Route::get('/spokenenglish-course', function () {
    return view('subcourses.english');
});
Route::get('/IELTS-course', function () {
    return view('subcourses.ielts');
});
Route::get('/pashto-course', function () {
    return view('subcourses.pashto');
});
Route::get('/korean-course', function () {
    return view('subcourses.korea');
});
Route::get('/arabic-course', function () {
    return view('subcourses.arabic-1');
});
Route::get('/Quran-course', function () {
    return view('subcourses.arabic-2');
});
Route::get('/german-course-a1', function () {
    return view('subcourses.german-a1');
});
Route::get('/german-course-a2', function () {
    return view('subcourses.german-a2');
});
Route::get('/german-course-b1', function () {
    return view('subcourses.german-b1');
});
Route::get('/german-course-fit-1&2', function () {
    return view('subcourses.german-fit');
});
Route::get('/french-course-a1', function () {
    return view('subcourses.french-a1');
});
Route::get('/french-course-a2', function () {
    return view('subcourses.french-a2');
});
Route::get('/portuguese-course-a1', function () {
    return view('subcourses.portuguese-a1');
});
Route::get('/portuguese-course-a2', function () {
    return view('subcourses.portuguese-a2');
});
Route::get('/russian-course-a1', function () {
    return view('subcourses.russian-a1');
});
Route::get('/russian-course-a2', function () {
    return view('subcourses.russian-a2');
});
Route::get('/russian-course-b1', function () {
    return view('subcourses.russian-b1');
});


//Dashboard routes

Route::middleware(['auth:is_admin'])->group(function () {
    // Route::get('/dashboard', [RegisterController::class, 'showDashboard'])->name('dashboard.show');
    Route::post('register', [RegisterController::class, 'register'])->name('register.submit');
    Route::get('/admin/delete/{id}', [RegisterController::class, 'deleteAdmin'])->name('admin.delete');
    Route::get('/dashboard', [RegisterController::class, 'showDashboard'])->name('dashboard');

    Route::get('/queries', [DashboardController::class, 'showQueries'])->name('show.query');
    Route::delete('/query/{id}', [DashboardController::class, 'deleteQuery'])->name('query.delete');
    Route::get('/enrollments', [DashboardController::class, 'showEnrollments'])->name('show.enrollments');
    Route::post('/enrollments', [DashboardController::class, 'storeEnrollments'])->name('enrollments.store');
    Route::delete('/enrollments/{id}', [DashboardController::class, 'destroyEnrollments'])->name('enrollments.destroy');
    Route::get('/enrollments/export', [DashboardController::class, 'export'])->name('enrollments.export');

    Route::get('/instructors', [DashboardController::class, 'showInstructors'])->name('show.instructors');
    Route::post('/instructors', [DashboardController::class, 'storeInstructors'])->name('instructors.store');
    Route::delete('/instructors/{id}', [DashboardController::class, 'destroyInstructor'])->name('instructors.destroy');
    Route::post('/queries', [App\Http\Controllers\EmailController::class, 'sendEmail'])->name('send.email');
    Route::post('/logout', [RegisterController::class, 'logout'])->name('logout');


});



Route::get('/login', [RegisterController::class, 'showLogin'])->name('login');
Route::post('/login', [RegisterController::class, 'login'])->name('login.check');






