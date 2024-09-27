<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ClientMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Clients\HomeController;
use App\Http\Controllers\Clients\ShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Clients\AboutController;
use App\Http\Controllers\Clients\AccountController;
use App\Http\Controllers\Clients\BlogController;
use App\Http\Controllers\Clients\CartController;

/*<---------------------------Admin--------------------------->*/
Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'postLogin']);
Route::get('admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

Route::prefix('admin')->middleware(AdminMiddleware::class)->group(function(){
    Route::get('/home', [AdminController::class, 'index'])->name('admin.home');
    Route::put('/home/{user}', [AdminController::class, 'updateProfile'])->name('admin.updateProfile');
    Route::resource('/user', UserController::class);
    Route::resource('/category', CategoryController::class);
    Route::get('/product/trash', [ProductController::class, 'trash'])->name('product.trash');
    Route::get('/product/restore/{id}', [ProductController::class, 'restore'])->name('product.restore');
    Route::get('/product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/product/forceDelete/{id}', [ProductController::class, 'forceDelete'])->name('product.forceDelete');
    Route::resource('/product', ProductController::class);
});

/*<---------------------------Clients--------------------------->*/
Route::get('/login', [AccountController::class,'login'])->name('clients.login');
Route::post('/postLogin', [AccountController::class,'postLogin'])->name('clients.postLogin');
Route::get('/register', [AccountController::class,'register'])->name('clients.register');
Route::post('register',[AccountController::class,'postRegister'])->name('clients.postRegister');
Route::get('/logout' ,[AccountController::class,'logout'])->name('clients.logout');

Route::name('clients.')->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('home');
    Route::get('/shop', [ShopController::class,'index'])->name('shop');
    Route::get('/cart', [CartController::class,'index'])->name('cart');
    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/about', [AboutController::class, 'index'])->name('about');
    Route::get('/profile', [ProfileController::class, 'index'])->middleware(ClientMiddleware::class)->name('profile');
});
