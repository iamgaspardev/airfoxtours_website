<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TestmonialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AppController::class,'index']);
Route::get('/service',[ServiceController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);
Route::get('/blog',[BlogController::class,'index']);
Route::get('/packageprice',[PackageController::class,'index']);
Route::get('/testmonials',[TestmonialController::class,'index']);
Route::get('/visa',[PostController::class,'index']);
// Route::get('/signin',[SignInController::class,'index']);
Route::post('/dashboard/home', [HomeController::class, 'home']);
// Route for displaying the login form (GET request)
Route::get('/signin', [LoginController::class, 'showLoginForm'])->name('login');

// Route for handling the login form submission (POST request)
Route::post('/signin', [LoginController::class, 'login']);
// Route for displaying the registration form
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route for handling the registration form submission
Route::post('/register', [RegisterController::class, 'register']);