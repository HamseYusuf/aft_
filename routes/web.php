<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

Route::get('/register', [AuthController::class , 'showRegister'])->name('showRegister');
Route::get('/logout', [AuthController::class , 'logout'])->name('logout');
Route::post('/register', [AuthController::class , 'register'])->name('register');
Route::get('/login', [AuthController::class , 'showLogin'])->name('showLogin');
Route::post('/login', [AuthController::class , 'login'])->name('login');
Route::get('/', [StudentController::class , 'index'])->name('students.index')->middleware('auth');
Route::get('/create', [StudentController::class , 'create'])->name('students.create')->middleware('auth');;
Route::post('/create', [StudentController::class , 'store'])->name('students.store')->middleware('auth');;
Route::get('/student/{student}', [StudentController::class , 'show'])->name('students.show')->middleware('auth');;
Route::get('/edit/{student}', [StudentController::class , 'edit'])->name('students.edit')->middleware('auth');;
Route::post('/update/{student}', [StudentController::class , 'update'])->name('students.update')->middleware('auth');;
Route::get('/delete/{student}', [StudentController::class , 'destroy'])->name('students.destroy')->middleware('auth');;
