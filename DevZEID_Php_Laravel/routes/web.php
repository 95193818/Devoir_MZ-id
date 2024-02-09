<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UpdateController;
use Illuminate\Support\Facades\Route;

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

Route::get('/connexion', [AuthController::class, 'get_connexion'])->name('get-connexion');
Route::post('/connexion', [AuthController::class, 'connexion'])->name('connexion');
Route::get('/inscription', [AuthController::class, 'get_inscription'])->name('get-inscription');
Route::post('/inscription', [AuthController::class, 'inscription'])->name('inscription');
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
Route::get('/Ajouter',[UpdateController::class, 'Ajouter'])->name('Ajouter');
Route::get('/Modifier',[UpdateController::class, 'Modifier'])->name('Modifier');
Route::get('/Supprimer',[UpdateController::class, 'Supprimer'])->name('Supprimer');
