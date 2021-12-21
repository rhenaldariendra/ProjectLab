<?php

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

// Route::get('/', function () {
//     return view('home');
// });
// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function (){
    return view('register');
});
Route::get('/detail', function (){
    return view('detail');
});


Route::get('/', [ProductController::class, 'showAllProducts']);
Route::get('/home', [ProductController::class, 'showAllProducts']);



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


Route::get('detail/{id}', [AuthController::class, 'loginValidateToShowDetailProduct']);

