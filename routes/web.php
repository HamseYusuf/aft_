<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

Route::get('/product/index', [ProductController::class , 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class , 'create'])->name('product.create');
Route::post('/product/create', [ProductController::class , 'store'])->name('product.store');

Route::get('/category/index', [CategoryController::class , 'index'])->name('category.index');
Route::post('/category/create', [CategoryController::class , 'store'])->name('category.store');
Route::get('/category/create', [CategoryController::class , 'create'])->name('create');
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
