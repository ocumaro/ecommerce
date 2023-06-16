<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();



    Route::get('/',[App\Http\Controllers\ProduitsController::class,'index2']);
    Route::get('/Produits',[App\Http\Controllers\ProduitsController::class,'index1']);
    // Route::get('/cart/{id}',[App\Http\Controllers\PanierController::class,'show']); 
    Route::get('/carts/{id}',[App\Http\Controllers\PanierController::class,'index']);     
    Route::get('/carts/delete/{id}',[App\Http\Controllers\PanierController::class,'delete']); 
    Route::get('/ajouterPanier/{id}',[App\Http\Controllers\PanierController::class,'addToPanier']);


    Route::prefix('/admin')->middleware('admin')->group(function(){
    Route::get('/Articles',[App\Http\Controllers\AdminCont::class,'index']);
    Route::get('/delete/{id}',[App\Http\Controllers\AdminCont::class,'delete']);
    Route::get('/edit/{id}',[App\Http\Controllers\AdminCont::class,'edit']);
    Route::get('/Update/{id}',[App\Http\Controllers\AdminCont::class,'Update']);
    Route::get('/addarticle',[App\Http\Controllers\AdminCont::class,'store']);
    Route::get('/article-added',[App\Http\Controllers\AdminCont::class,'insert']);
    
    });;

