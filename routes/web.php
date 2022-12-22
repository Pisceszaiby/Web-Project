<?php

use App\Http\Controllers\MakeUpProduct;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});
Route::get('/home', function () {
    return view('Homepage');
});
Route::get('/aboutUs', function () {
    return view('AboutUs');
});
Route::get('/addProduct', function () {
    return view('AddProduct');
});
Route::get('/adminHomePage', function () {
    return view('AdminHomePage');
});
Route::get('/blush', function () {
    return view('Blush');
});
Route::get('/body', function () {
    return view('Body');
});
Route::get('/brushes', function () {
    return view('Brushes');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contactUs', function () {
    return view('ContactUs');
});
Route::get('/confirmation', function () {
    return view('confirmation');
});
Route::get('/cleansers', function () {
    return view('Cleansers');
});
Route::get('/concealer', function () {
    return view('Concealer');
});
Route::get('/editProduct', function () {
    return view('EditProduct');
});
Route::get('/eyeliner', function () {
    return view('EyeLiners');
});
Route::get('/eyes', function () {
    return view('Eyes');
});
Route::get('/eyeshadows', function () {
    return view('Eyeshadows');
});
Route::get('/face', function () {
    return view('Face');
});
Route::get('/foundation', function () {
    return view('Foundation');
});
Route::get('/highlighter', function () {
    return view('Highlighters');
});


Route::get('/lipSets', [MakeUpProduct::class, 'lipset']);
Route::get('/lips', [MakeUpProduct::class, 'lips']);
Route::get('/lipSticks', [MakeUpProduct::class, 'lipSticks']);
Route::get('/lipPencils', [MakeUpProduct::class, 'lipPencils']);
Route::get('/lipTints', [MakeUpProduct::class, 'lipTints']);


Route::get('/login', function () {
    return view('Login');
});
Route::get('/lotions', function () {
    return view('Lotions');
});
Route::get('/mascara', function () {
    return view('Mascara');
});
Route::get('/masks', function () {
    return view('Masks');
});
Route::get('/oils', function () {
    return view('Oils');
});



Route::get('/orders', function () {
    return view('OrdersTable');
});
Route::get('/privacyPolicy', function () {
    return view('PrivacyPolicy');
});
Route::get('/productTable', function () {
    return view('ProductTable');
});
Route::get('/productView', function () {
    return view('ProductView');
});
Route::get('/sale', function () {
    return view('Sale');
});
Route::get('/scrubs', function () {
    return view('Scrubs');
});
Route::get('/serums', function () {
    return view('Serums');
});
Route::get('/skincare', function () {
    return view('Skincare');
});


//

Route::post('/AddProduct', [ProductController::class, 'store']);