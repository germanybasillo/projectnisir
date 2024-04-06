<?php

use App\Http\Controllers\Auth\LoginRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\InboxController;






Route::get('/', function () {
    return view('zeha');
});

// Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
// Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
// Route::get('/login', [LoginRegisterController::class, 'login'])->name('login');
// Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
// Route::get('/home', [LoginRegisterController::class, 'home'])->name('home');
// Route::get('/about', [LoginRegisterController::class, 'about'])->name('about');
// Route::get('/admin', [LoginRegisterController::class, 'admin'])->name('admin');
// Route::get('/blog', [LoginRegisterController::class, 'blog'])->name('blog');
// Route::get('/contact', [LoginRegisterController::class, 'contact'])->name('contact');
// Route::get('/portfolio', [LoginRegisterController::class, 'portfolio'])->name('portfolio');
// Route::get('/services', [LoginRegisterController::class, 'services'])->name('services');
// Route::get('/user', [LoginRegisterController::class, 'user'])->name('user');
// Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');


Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::get('/home', 'home')->name('home');
    Route::get('/about', 'about')->name('about');




     // User Route with Required Parameter
     Route::get('/teacher/{id}', 'teacher')->name('teacher');

     // Admin Route with Required Parameter
     Route::get('/admin/{id}', 'admin')->name('admin');

     // Admin Route with Required Parameter
     Route::get('/students/{id}', 'students')->name('students');


    Route::get('/blog', 'blog')->name('blog');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/portfolio', 'portfolio')->name('portfolio');
    Route::get('/services', 'services')->name('services');
    Route::post('/logout', 'logout')->name('logout');
});


// In routes/web.php
use App\Http\Controllers\ContactFormController;
Route::post('/contact', [ContactFormController::class, 'store'])->name('contact.store');
 // Contact Route with Optional Parameter
Route::get('/contact/{method?}', function ($method = 'email') {
    return "Contact method: $method";
})->name('contact.method');



Route::resource("/student", StudentController::class);


Route::get('inbox', [InboxController::class, 'index'])->name('inbox');
