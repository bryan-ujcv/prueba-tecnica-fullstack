<?php

use App\Http\Controllers\NoticiasController;
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

Route::get('/', [NoticiasController::class, 'index'])->name('noticias');

Route::post('/agregar', [NoticiasController::class, 'store'])->name('agregar');

Route::get('/agregar', function () {
    return view('agregar');
})->name('agregar');

Route::get('/noticias/{id}', [NoticiasController::class, 'show'])->name('noticia-edit');

Route::patch('/noticias/{id}', [NoticiasController::class, 'update'])->name('noticia-update');

Route::delete('/noticias/{id}', [NoticiasController::class, 'destroy'])->name('noticia-destroy');
