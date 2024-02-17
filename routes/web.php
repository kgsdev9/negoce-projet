<?php

use App\Http\Controllers\AcutaliteController;
use App\Http\Controllers\Admin\ActualiteController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProjetController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;

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

//routes administrateurs
Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::resources([
    'service' => ServiceController::class,
    'actualite' => ActualiteController::class,
    'users'=>  UserController::class,
    'projet' =>ProjetController::class
]);


//routes visiteurs
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/nos-actualites', [HomeController::class, 'actualites'])->name('home.actualite');
Route::get('/nos-services', [HomeController::class, 'service'])->name('home.service');
Route::get('/nos-projet', [HomeController::class, 'projet'])->name('home.projets');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/post', [HomeController::class, 'contactsave'])->name('contact.poste');

Auth::routes();

