<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Controller::class, 'index'])->name('index');
Route::get('/publisher', [Controller::class, 'publisher'])->name('publisher');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/book-detail/{id}', [Controller::class, 'bookDetail'])->name('book-detail');
Route::get('/book-category/{category}', [Controller::class, 'bookCategory'])->name('book-category');
Route::get('/publisher-detail/{id}', [Controller::class, 'publisherDetail'])->name('publisher-detail');
