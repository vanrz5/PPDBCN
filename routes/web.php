<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('/form', function () {
    return view('students.form');
});

// Route untuk Create

// Route untuk halaman form register
Route::get('/students/register', [StudentController::class, 'create'])->name('student.register');
// Route untuk menyimpan data
Route::post('/students/register', [StudentController::class, 'store'])->name('student.store');

// Route untuk Read