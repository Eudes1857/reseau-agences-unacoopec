<?php

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

//Route pour toutes les agences UNACOOPEC
Route::get('/', [\App\Http\Controllers\AgenceController::class, 'allAgences'])->name('all');

//Route pour les agences de la ville d'Abidjan
Route::get('/agences/abidjan', [\App\Http\Controllers\AgenceController::class, 'allAgencesForAbidjan'])->name('allAbidjan');

//Route pour une seule agence
Route::get('/agences/{post:post_name}', [\App\Http\Controllers\AgenceController::class, 'agence'])->name('agence');
