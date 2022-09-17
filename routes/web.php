<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| // Valentinus Moreno
*/

Route::prefix('students')->group(function () {
    Route::get('/', [StudentsController::class, 'index'])->name('students_master');
    Route::get('/create', [StudentsController::class, 'create']);
    Route::post('/store', [StudentsController::class, 'store']);
    Route::get('/edit/{id}', [StudentsController::class, 'edit']);
    Route::post('/update', [StudentsController::class, 'update']);
    Route::delete('/delete/{id}', [StudentsController::class, 'delete']);
});
