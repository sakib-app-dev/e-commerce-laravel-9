<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');

Route::get('/categories/{category}/product',[UserController::class,'categoryProductList'])->name('category.product.index');
Route::prefix('/users')->name('users.')->group(function(){

    Route::get('/checkout', [UserController::class, 'checkout'])->name('checkout');
    Route::get('/invoice', [UserController::class, 'invoicePDF'])->name('invoice');

    
    Route::prefix('/product')->name('product.')->group(function(){
        Route::get('/list', [UserController::class, 'productList'])->name('list');
        Route::get('/details/{id}', [UserController::class, 'productDetails'])->name('detail');
    });

    Route::get('/thank-you', [UserController::class, 'thankYou'])->name('thank-you');
    Route::post('/add-to-cart/{product}/product', [UserController::class, 'addToCart'])->name('add-to-cart');
    Route::post('/product/{product}/comment', [UserController::class, 'commentStore'])->name('products.comment.store');
    // Route::get('/login', [UserController::class, 'login'])->name('login');
    // Route::get('/register', [UserController::class, 'register'])->name('register');


});

Route::fallback(function(){
    return view('users.404');
});


require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
Route::get('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/admin/users',[AdminController::class,'users'])->name('admin.users_list');
Route::get('/admin/{user}/users',[AdminController::class,'changeRole'])->name('change_role');
Route::patch('/admin/{user}/update',[AdminController::class,'updateRole'])->name('update_role');


Route::get('/categories',[CategoryController::class,'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}/update', [CategoryController::class, 'update'])->name('category.update');
Route::get('/category/{id}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
Route::patch('/category/{id}',[CategoryController::class,'restore'])->name('category.restore');
Route::delete('/category/{id}',[CategoryController::class,'delete'])->name('category.delete');



Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}/update', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/{id}/delete', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product-trash', [ProductController::class, 'trash'])->name('product.trash');
Route::patch('/product/{id}',[ProductController::class,'restore'])->name('product.restore');
Route::delete('/product/{id}',[ProductController::class,'delete'])->name('product.delete');


// Route::fallback(function(){
//     return view('admin.error');
// });

});
