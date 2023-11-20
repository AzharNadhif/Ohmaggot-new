<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BacaController;
use App\Http\Controllers\FormarticleController;
use App\Http\Controllers\FormprodukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginadminController;
use App\Http\Controllers\LoginauserController;
use App\Http\Controllers\LoginuserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', [HomeController::class, 'show'])->name("home");
Route::get('/Article',[ArticleController::class, 'show'])->name("article");
Route::get('/Product', [ProductController::class, 'show']) ->name('product');
Route::get('/About', [AboutController::class, 'show']) ->name('about'); 
Route::get('/Profile', [ProfileController::class, 'show'])->name('profile');


Route::controller(AdminController::class)->group(function(){
    Route::get('/Admin', 'show')->name("admin");

    Route::delete('/deleteproduct/{id}', 'deleteproduct')->name("deleteproduct");
    Route::delete('/deletearticle/{id}', 'deletearticle')->name("deletearticle");
});

Route::controller(BacaController::class)->group(function(){
   
    Route::get('/baca/{id}', 'show')->name("baca");
});

Route::controller(LoginadminController::class)->group(function () {
    Route::get('/sign-in', 'show')
        ->name('sign-in');
    Route::post('/sign-in', 'authenticate')
        ->name('login');

    Route::post('/signout','signOut')->name('logoutadmin');
});


Route::controller(LoginuserController::class)->group(function () {
    Route::get('/loginuser', 'show')
        ->name('signin');
    Route::post('/userlogin', 'authenticate')
        ->name('loginuser');
    
    Route::post('/signup', 'signup')->name('signup'); 

    Route::post('/sign-out', 'signout')->name('logout');
});

Route::controller(FormprodukController::class)->group(function() {
    Route::get('/formproduk', 'show')->name('formproduk');

    Route::post('/insertproduct', 'insertProduct')->name('insertproduct');

});

Route::controller(FormarticleController::class)->group(function(){
    Route::get('/formartikel', 'show')->name('formartikel');

    Route::post('/insertarticle', 'insertArticle')->name('insertarticle');
    
});

