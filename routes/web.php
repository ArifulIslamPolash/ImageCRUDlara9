<?php

use App\Http\Controllers\ImageCrudController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\ImageCrudController;

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
// Route::get('/products', function () {
//     return view('welcome');
// });
Route::get('/products',[ImageCrudController::class , 'AllProducts'])->name('all.product');
Route::get('/add-new-product',[ImageCrudController::class , 'AddNewProduct'])->name('add.new.product');
Route::post('/store-product',[ImageCrudController::class , 'StoreProduct'])->name('store.product');
