<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoItemController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [TodoItemController::class, 'index'])->name('index');
Route::get('/create', [TodoItemController::class, 'create'])->name('create');
Route::put('/store', [TodoItemController::class, 'store'])->name('store');
Route::get('/edit/{id}', [TodoItemController::class, 'edit'])->name('edit');
Route::get('/delete/{id}', [TodoItemController::class, 'delete'])->name('delete');
Route::post('/done/{id}', [TodoItemController::class, 'done'])->name('done');
Route::patch('/update/{id}', [TodoItemController::class, 'update'])->name('update');

