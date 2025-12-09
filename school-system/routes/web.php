<?php

use App\Http\Controllers\GradeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function(){
//     return view('layouts.index');
// });

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('/students', StudentController::class);

Route::resource('/subjects', SubjectController::class);

Route::resource('/grades', GradeController::class);
