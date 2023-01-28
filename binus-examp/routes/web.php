<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => 'auth'], function (){
    Route::get('/', [WebController::class, 'index']);
    Route::get('/category/{category}', [WebController::class, 'category']);
    Route::get('/detail/{book}', [WebController::class, 'detail']);
    Route::get('/publisher', [WebController::class, 'publisher'])->name('publisher');
    Route::get('/publisher/detail/{publisher}', [WebController::class, 'detailPublisher']);
    Route::get('/contact', [WebController::class, 'contact'])->name('contact');
    Route::post('/transaksi', [TransactionController::class, 'save'])->name('transaction');
    Route::get('/add_book', [BookController::class, 'showFormBook'])->name('add_book');
    Route::post('/add_book', [BookController::class, 'saveBook'])->name('add_book');
});