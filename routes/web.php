<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Admin\PrestationController;
use App\Http\Controllers\Admin\TransactionController;

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


Route::resources([
    'prestation' => PrestationController::class,
    'transaction' => TransactionController::class
]);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/post', [HomeController::class, 'contactsave'])->name('contact.poste');
Route::get('/detail/prestation/{slug}', [HomeController::class, 'prestationDetail'])->name('prestation.detail');