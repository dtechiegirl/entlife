<?php

// use App\Http\Livewire\Blog\Show as BlogShow;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\entController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\BlogController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [entController::class, 'home'])->name('home');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'] )->name('auth');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/create-post', [BlogController::class, 'create'])->name('create-post');
Route::post('/store-post', [BlogController::class, 'store'])->name('store-post');
Route::get('/about-us', [entController::class, 'about'])->name('about-us');

Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('edit-blog');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('update-blog');
Route::get('/blog/{slug}/delete', [BlogController::class, 'delete']);
Route::delete('/blog/{id}', [BlogController::class, 'destroy']);
Route::get('/contact', [ContactController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'contactus'])->name('contact');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/messages', [ContactController::class, 'messages'])->name('messages');
Route::get('/courses', [entController::class, 'courses'])->name('courses');

Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('show-blog');