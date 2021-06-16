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

/*Route::get('/',[\App\Http\Controllers\WorkerController::class,'index'])->name('worker.index');*/
Route::prefix('/')->group(function () {
    Route::get('', [\App\Http\Controllers\WorkerController::class, 'index'])->name('worker.index');
    Route::get('/create', [\App\Http\Controllers\WorkerController::class, 'create'])->name('worker.create');
    Route::post('/create', [\App\Http\Controllers\WorkerController::class, 'store'])->name('worker.store');
    Route::get('{id}/edit', [\App\Http\Controllers\WorkerController::class, 'edit'])->name('worker.edit');
    Route::post('{id}/edit', [\App\Http\Controllers\WorkerController::class, 'update'])->name('worker.update');
    Route::get('{id}/destroy', [\App\Http\Controllers\WorkerController::class, 'destroy'])->name('worker.destroy');
    Route::post('search', [\App\Http\Controllers\WorkerController::class, 'search'])->name('worker.search');
});

Route::get('/dashboard', function () {
    return view('dashboard');


})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
