<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Models\Category;
use Faker\Provider\Lorem;

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

Route::get('/', [MainController::class , 'index'])->name('index');

Route::get('/shop', [MainController::class , 'shop'])->name('shop');

Route::get('/product-details', [MainController::class , 'product_details'])->name('product-details');

Route::get('/checkout', [MainController::class , 'checkout'])->name('checkout');

Route::get('/cart', [MainController::class , 'cart'])->name('cart');

Route::get('/login', [MainController::class , 'login'])->name('login');

Route::get('/blog', [MainController::class , 'blog'])->name('blog');

Route::get('/blog-single', [MainController::class , 'blog_single'])->name('blog-single');

Route::get('/404', [MainController::class , 'error'])->name('404'); 

Route::get('/contact-us', [MainController::class , 'contact_us'])->name('contact-us'); 


                // ADMIN 
                
Route::prefix('admin' )->group( function(){

Route::name('admin_')->group(function(){

    Route::get('/' ,[AdminController::class , 'admin'])->name('welcome');

    Route::get('/delete/{id}' , [AdminController::class , 'delete']);

    Route::get('/update/{id}' , [AdminController::class , 'update']);

    Route::post('/update/check' , [AdminController::class , 'add_update'])->name('add_update');
    // admin panel 

    Route::get('/category' ,[AdminController::class , 'category'])->name('category');

    Route::get('/product' ,[AdminController::class , 'product'])->name('product');

    Route::get('/brend' ,[AdminController::class , 'brend'])->name('brend');

});

            // admin-activites 

    Route::post('/add_category' ,[AdminController::class , 'add_category'] )->name('add_category');

    Route::post('/add_product' ,[AdminController::class , 'add_product'] )->name('add_product'); 

    Route::post('/add_brend' ,[AdminController::class , 'add_brend'] )->name('add_brend'); 
});



