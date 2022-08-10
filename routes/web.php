<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
    return view('welcome');
});

Route::get('/about', function(){
    return "หน้าเกี่ยวกับเรา";
});

Auth::routes();

// my profile
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin index
Route::get('admin/index',[HomeController::class, 'admin'])->name('admin');

//Users
Route::get('user/index',[UserController::class, 'index'])->name('user.index');

//category
Route::get('/category/index',[CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create',[CategoryController::class, 'createform'])->name('category.cerate');


//product
Route::get('/product/index',[ProductController::class, 'index'])->name('product.index');
Route::get('/product/create',[ProductController::class, 'createform'])->name('product.cerate');