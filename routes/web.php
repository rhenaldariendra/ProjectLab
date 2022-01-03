<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/register', function (){
    return view('register');
});
Route::get('/detail', function (){
    return view('detail');
});
Route::get('/TransactionPage', function (){
    return view('TransactionPage');
});
Route::get('/insert', function (){
    return view('insertProduct');
});



Route::get('/', [ProductController::class, 'showAllProducts']);
Route::get('/home', [ProductController::class, 'showAllProducts']);

Route::get('/manageUser', [AdminController::class, 'showUsers']);


Route::get('/myaccount', function(){
    return view('profile');
});
Route::get('/updateAccount', function(){
    return view('updateAccount');
});
Route::get('/changePassword', function(){
    return view('changePassword');
});

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('register-users', [AuthController::class, 'registration'])->name('register-user');
Route::post('login-user', [AuthController::class, 'login'])->name('login-user');

Route::post('updateProfile', [AuthController::class, 'updateProfile'])->name('account-update');
Route::post('changePassword', [AuthController::class, 'updatePassword'])->name('password-update');



Route::get('deleteUser/{id}', [AdminController::class, 'deleteUser']);

Route::post('/insertImage', [AdminController::class, 'addData'])->name('insert-image');



Route::get('detail/{id}', [ProductController::class, 'detailProduct']);
Route::get('update/{id}/edit', [ProductController::class, 'showUpdateDetail']);
Route::put('update/{id}', [AdminController::class, 'updateProduct']);


Route::post('/detail/addToCart', [ProductController::class, 'addToCart'])->name('add_to_cart');

Route::get('/cart/{id}', [ProductController::class, 'getCart']);

