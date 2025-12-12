<?php

use App\Http\Controllers\AddsubjectController;
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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');


Route::get('/addsubject/{id}',[AddsubjectController::class, 'showsubjects'])->name('addsubject');
Route::post('/subject-store', [AddsubjectController::class, 'store'])->name('store');
