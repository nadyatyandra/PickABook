<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartHeaderController;
use App\Http\Controllers\CourierController;

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

// currently unused since images are stored directly in /public/{folder}/{name}
// Route::get('/storage/app/public/images/{folder}/{name}', function($folder, $name){
//     $content = Storage::get('public/images/'.$folder.'/'.$name);
//     $mime = Storage::mimeType('public/images/'.$folder.'/'.$name);
//     $response = Response::make($content, 200);
//     return $response->header('Content-Type', $mime);
// });

Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
Route::post('/authenticate', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerPage'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

//route utk logout
Route::post('/logout', [AuthController::class, 'logout']);

// might want to change the route to '/'
// Reply: maybe '/' is more suitable for welcome page(?)
Route::get('/home', [BookController::class, 'home'])->name('home');

Route::get('/bookDetail/{id}', [BookController::class, 'bookDetail']);

Route::get('/category/{name}', [BookController::class, 'category']);

Route::get('/cart', [CartHeaderController::class, 'cart'])->name('cart');

Route::get('/pickup', [CourierController::class, 'pickup']);

Route::get('/manageBook', [BookController::class, 'getBookDetail']);

Route::get('/notFound', [PageController::class, 'notFound'])->name('notFound');

Route::get('/landing', [PageController::class, 'landingPage'])->name('landing');

Route::fallback(function(){
    return redirect()->route('notFound');
});

// get image. feel free to change the directory.
Route::get('/storage/app/public/{folder}/{name}', function($folder, $name){
    $content = Storage::get('public/'.$folder.'/'.$name);
    $mime = Storage::mimeType('public/'.$folder.'/'.$name);
    $response = Response::make($content, 200);
    $response->header('Content-Type', $mime);
    return $response;
});
