<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\Tagcontroller;
use App\Http\Controllers\UniquePageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserRegisterController;
use Illuminate\Support\Facades\Route;

// Unique Page
Route::get('/contact',[UniquePageController::class , 'contact']);
Route::resource('/', UniquePageController::class)->only('index');

// Jobs
Route::get('/jobs/specials', [JobController::class, 'specialJobs']);
Route::resource('jobs',JobController::class)->except('update','edit','destroy');
Route::resource('jobs',JobController::class)->only('store','create')->middleware('auth');

// Employers
Route::resource('employers',EmployerController::class)->only('show');

// Search
Route::get('/search', SearchController::class);

// Tags
Route::get('/tags/{tag:name}', Tagcontroller::class);

// Admin
Route::singleton('admin',AdminController::class)->only('show','update')->middleware('auth');

// Register
Route::resource('register' , UserRegisterController::class)->only('index','store')->middleware('guest');

// User
Route::resource('user',UserController::class)->except('destroy','create','edit')->middleware('auth');

// Session
Route::get('/login',[SessionController::class , 'index'])->name('login')->middleware('guest');
Route::post('/login',[SessionController::class , 'store']);
Route::delete('/logout',[SessionController::class , 'destroy']);



