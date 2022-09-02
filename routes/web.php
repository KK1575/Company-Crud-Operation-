<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyCRUDController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CompanyCRUDController::class, 'index']);
Route::get('create', [CompanyCRUDController::class, 'create'])->name('createcompany');
Route::post('create', [CompanyCRUDController::class, 'store']);
Route::get('edit/{id}', [CompanyCRUDController::class, 'edit'])->name('editcompany');
Route::put('edit/{id}', [CompanyCRUDController::class, 'update']);
Route::get('delete/{id}', [CompanyCRUDController::class, 'index'])->name('deletecompany');
Route::delete('delete/{id}', [CompanyCRUDController::class, 'destroy']);
