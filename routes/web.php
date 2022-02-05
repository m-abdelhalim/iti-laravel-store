<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailsController;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

Route::get('/home', [HomeController::class, 'home']);
Route::get('/product-details/{id}', [ProductDetailsController::class, 'productDetails']);
/* Route::get('/product-details/{id}', function($id){
    return view('productDetails', ['product' => $id]);
}); */
Route::redirect('/', '/home');
