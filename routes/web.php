<?php

use App\Http\Controllers\TodoController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('todos', [TodoController::class, 'index']);
Route::get('todos/create', [TodoController::class, 'create']);
Route::post('todos', [TodoController::class, 'store']);
Route::get('todos/{id}', [TodoController::class, 'show']);
Route::get('todos/{id}/edit', [TodoController::class, 'edit']);
Route::put('todos/{id}', [TodoController::class, 'update']);
Route::delete('todos/{id}', [TodoController::class, 'destroy']);
