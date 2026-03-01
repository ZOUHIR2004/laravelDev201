<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/',[ShopController::class,"accueil"])->name('home');

Route::get('/contact',[ShopController::class,"contact"])->name('contact');

Route::get('/cgv',[ShopController::class,"cgv"])->name('cgv');

Route::get('/produit/{slug}/{id}',[ProductController::class,"produit"])->name('produit_details');

Route::get('/category/{slug}' , [ProductController::class,"category"])->name('category');

Route::fallback(function(){
    return view('page404') ;
})
?>
