<?php

use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return "
    <a href=".route('create').">Add category</a><br>
    <a href=".route('show').">Show category</a><br>
    <a href=".route('edit').">Edit category</a><br>
    
    ";
});

Route::get('/create',[CategoryController::class, 'create'])->name('create');

Route::get('/show',[CategoryController::class, 'show'])->name('show');

Route::get('/edit',[CategoryController::class, 'edit'])->name('edit');
