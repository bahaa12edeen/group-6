<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthController;
use App\http\Controllers\BlogController;
use App\http\Controllers\RequestsController;
use App\http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/book', [BookController::class, 'index']);

Route::get('/book/seaech', [BookController::class, 'GetBook']);

Route::view('/request', 'request');

// Route::post('request/send', [BookController::class, 'fileUp']);

Route::get('request/send', [RequestsController::class, 'ask']);

Route::get('/ask', [RequestsController::class, 'displayAsk']);

Route::view('/respond', 'respond');

Route::post('/respond/send', [RequestsController::class, 'responder']);

Route::get('/book', [BookController::class, 'index']);

Route::get('/book/seaech', [BookController::class, 'GetBook']);

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('dashboard', [AuthController::class, 'dashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


// //////////       blog
Route::get('/blog', [BlogController::class, 'displayBlog']);
// Route::any('/image', [BlogController::class, 'storeimage']);
Route::post('/blogg', [BlogController::class, 'addBlog']);

Route::view('/index', 'index');
Route::view('/post-1', 'post-1');
Route::view('/post-2', 'post-2');
Route::view('/post-3', 'post-3');
Route::view('/post-4', 'post-4');


// Admin
Route::get('/AdminDashboard',  [AdminController::class, 'viewDashboard']);
Route::get('/AdminUsers',  [AdminController::class, 'viewUsers']);
// Route::get('/AdminServices', [AdminController::class, 'viewServices']);
// Route::get('/AdminReservations', [AdminController::class, 'viewReservations']);
// Route::get('/AdminAddSer', [AdminController::class, 'addServicePage']);
// Route::post('/AdminAddService', [AdminController::class, 'addService']);
// Route::get('/AdminEditSer/{id}', [AdminController::class, 'editServicePage']);
// Route::post('/AdminEditService/{id}', [AdminController::class, 'editService']);
// Route::get('/AdminDeleteSer/{id}', [AdminController::class, 'deleteService']);
// Route::get('/AdminEditUserPage/{id}', [AdminController::class, 'editUserPage']);
// Route::post('/AdminEditUser/{id}', [AdminController::class, 'editUser']);
// Route::get('/AdminDeleteUser/{id}', [AdminController::class, 'deleteUser']);
Route::get('/AdminLogin', [AdminController::class, 'viewLogin']);
Route::post('/AdminLoginCheck', [AdminController::class, 'Login']);

Route::get('/AdminBooks', [AdminController::class, 'viewBooks']);
Route::get('/AdminBlogs', [AdminController::class, 'viewBlogs']);
Route::get('/AdminVolunteers', [AdminController::class, 'viewVolunteers']);

