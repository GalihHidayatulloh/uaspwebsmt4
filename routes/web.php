<?php

use App\Http\Controllers\DisdukcapilController;
use App\Http\Controllers\PasienController;
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

Route::get('/', function () {
    return view('pages.welcome');
})->name('welcome');

Route::resource('/disdukcapil', DisdukcapilController::class);


Route::post('/disdukcapil/create', [DisdukcapilController::class, 'store'])->name('disdukcapil.store');

