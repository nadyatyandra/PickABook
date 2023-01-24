<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CartHeaderController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\ProfileController;

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

Route::get('/login', [AuthController::class, 'loginPage'])->name('login')->middleware('guestM');
Route::post('/authenticate', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'registerPage'])->name('register')->middleware('guestM');
Route::post('/register', [AuthController::class, 'register']);

//route utk logout
Route::post('/logout', [AuthController::class, 'logout']);

// might want to change the route to '/'
// Reply: maybe '/' is more suitable for welcome page(?)
// RE:RE: for now it's for home, but feel free to change ya
Route::get('/', [BookController::class, 'home'])->name('home')->middleware('userM');

Route::get('/bookDetail/{id}', [BookController::class, 'bookDetail'])->middleware('userM');
Route::post('add-book/{bookId}', [BookController::class, 'addBookToCart']);

Route::get('/category/{name}', [BookController::class, 'category'])->name('category');

Route::get('/cart', [CartHeaderController::class, 'cart'])->name('cart')->middleware('memberM');
Route::delete('/cart/delete/{libraryId}/{bookId}', [CartHeaderController::class, 'removeFromCart']);

Route::get('/checkout', [CourierController::class, 'checkout'])->middleware('memberMW');
Route::get('/pickup', [CourierController::class, 'pickup'])->name('pickup')->middleware('memberM');

Route::get('/history', [BookController::class, 'history'])->name('history')->middleware('memberM');

Route::get('/manageBook', [BookController::class, 'getBookDetail'])->name('manageBook')->middleware('adminM');
Route::delete('admin/delete-book/{bookId}', [AdminController::class, 'deleteBook']);

Route::get('/notFound', [PageController::class, 'notFound'])->name('notFound');

Route::get('/landing', [PageController::class, 'landingPage'])->name('landing')->middleware('guestM');

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile')->middleware('userM');
Route::get('/profile/editProfile', [ProfileController::class, 'editProfile'])->name('editProfile')->middleware('memberM');
Route::get('/profile/editPassword', [ProfileController::class, 'editPassword'])->name('editPassword')->middleware('userM');

Route::fallback(function(){
    return redirect()->route('notFound');
});

Route::get('/storage/app/public/images/{folder}/{name}', function($folder, $name){
    $content = Storage::get('public/images/'.$folder.'/'.$name);
    $mime = Storage::mimeType('public/images/'.$folder.'/'.$name);
    $response = Response::make($content, 200);
    return $response->header('Content-Type', $mime);
});
