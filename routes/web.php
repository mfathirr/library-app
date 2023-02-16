<?php

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibraryController;

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

Route::get('/', function (){
    return view('home');
});

Route::get('/book', [LibraryController::class, 'index']);

Route::get('/book/create', [LibraryController::class, 'create'])->middleware('admin');

Route::post('/book', [LibraryController::class, 'store'])->middleware('admin');

Route::get('/book/{id}/edit', [LibraryController::class, 'edit'])->middleware('admin');

Route::patch('/book/{id}', [LibraryController::class, 'update'])->middleware('admin');

Route::delete('book/{id}', [LibraryController::class, 'delete'])->middleware('admin');

Route::get('/dekdek', function () {
    return view('auth.verify-email');
});
