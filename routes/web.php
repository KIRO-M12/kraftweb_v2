<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\AuthController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/features', [PageController::class, 'features'])->name('features');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/how-it-works', [PageController::class, 'howItWorks'])->name('how-it-works');

Route::get('/testimonials', [TestimonialController::class, 'index'])->name('testimonials');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/password/forgot', [AuthController::class, 'forgotPassword'])->name('password.request');
Route::get('/password/reset', [AuthController::class, 'resetPassword'])->name('password.reset');
Route::get('/email/verify', [AuthController::class, 'verifyEmail'])->name('verification.notice');
