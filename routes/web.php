<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;

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

Route::get('/edit', function () {
    return view('guru.edit');
});

Route::get('guru/where',[GuruController::class, 'where']);
Route::post('guru/store',[GuruController::class, 'store'])->name('guru.store');
Route::get('/',[GuruController::class, 'where']);
Route::get('/delete-guru/{id}', [GuruController::class, 'destroy'])->name('delete-guru');
Route::get('/edit-guru/{id}', [GuruController::class, 'edit'])->name('edit-guru');
Route::post('/update-guru/{id}', [GuruController::class, 'update'])->name('update-guru');

