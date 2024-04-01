<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ItemDetailsController;
use App\Http\Controllers\frontend\AboutUsController;
use App\Http\Controllers\frontend\AllProductController;
use App\Http\Controllers\frontend\BlogDetailsController;
use App\Http\Controllers\frontend\BrandController;
use App\Http\Controllers\frontend\CartController;
use App\Http\Controllers\frontend\CheckoutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\DashboardController;
use App\Http\Controllers\frontend\ForgotPasswordController;
use App\Http\Controllers\frontend\ItemController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\frontend\OrderSuccessController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\RegisterController;
use App\Http\Controllers\frontend\ReviewController;
use App\Http\Controllers\frontend\SearchController;
use App\Http\Controllers\frontend\WishlistController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class , 'index'])->name('home');
Route::get('/get-more-brand',[HomeController::class , 'getMoreBrand'])->name('getMoreBrand');
Route::get('/about-us',[AboutUsController::class , 'index']);
Route::get('/all-product',[AllProductController::class , 'index']);
Route::get('/blog',[BlogDetailsController::class , 'index']);
Route::get('/brand',[BrandController::class , 'index']);
Route::get('/cart',[CartController::class , 'index']);
Route::get('/checkout',[CheckoutController::class , 'index']);
Route::get('/contact',[ContactController::class , 'index']);
Route::get('/dashboard',[DashboardController::class , 'index']);
Route::get('/forgot-password',[ForgotPasswordController::class , 'index']);
Route::get('/item',[ItemController::class , 'index']);
Route::get('/item-details/{id}',[ItemDetailsController::class , 'index']);
Route::get('/login',[LoginController::class , 'index']);
Route::get('/order-success',[OrderSuccessController::class , 'index']);
Route::get('/profile',[ProfileController::class , 'index']);
Route::get('/register',[RegisterController::class , 'index']);
Route::get('/review',[ReviewController::class , 'index']);
Route::get('/search',[SearchController::class , 'index']);
Route::get('/wishlist',[WishlistController::class , 'index']);
Route::post('/add-to-cart',[CartController::class , 'addToCart'])->name('addToCart');
