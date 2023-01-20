<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;

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

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/home', [BookController::class, 'home']);

Route::get('/notFound', [PageController::class, 'notFound'])->name('notFound');

Route::fallback(function(){
    return redirect()->route('notFound');
});
