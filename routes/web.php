<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdmissionController;

Route::get('/', function () {
    return view('welcome');
});

// Faculty and Staff Directory
Route::get('/directory', [StaffController::class, 'index']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/admissions', [AdmissionController::class, 'index']);
Route::get('/social-media', function () {
    return view('social-media');
});