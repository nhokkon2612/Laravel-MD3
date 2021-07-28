<?php

use App\Http\Controllers\ProductsController;
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
Route::get('',function (){
    return view('admin.core.master');
});
Route::prefix('product')->group(function (){
    Route::get('',[ProductsController::class,'index'])->name('Product.list');
    Route::get('/create',[ProductsController::class,'create'])->name('Product.create');
    Route::post('/store',[ProductsController::class,'store'])->name('Product.store');
    Route::get('/{id}/update',[ProductsController::class,'update'])->name('Product.update');
    Route::post('/{id}/update',[ProductsController::class,'edit'])->name('Product.edit');
    Route::get('/{id}/delete',[ProductsController::class,'destroy'])->name('Product.delete');
    Route::get('/{id}/detail',[ProductsController::class,'show'])->name('Product.detail');
});
