<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

use App\Models\Course;

Route::get('/courses', function () {
    return Course::all();
});

Route::get('/courses/{id}', [CourseController::class, 'show']);
Route::post('/payment/callback', [PaymentController::class, 'callback']);
Route::post('/courses', [CourseController::class, 'store']);