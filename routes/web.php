<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\BukuController;

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
    return view('welcome');
});


Route::get('/posts/index', [PostController::class, 'index']);

Route::get('/buku/index', [BukuController::class, 'index']);
