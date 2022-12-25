<?php

use App\Http\Controllers\MakeUpProduct;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\CartController;
use App\Models\Product;
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

//cart routes 
Route::get('/cart', [CartController::class, 'show']);
Route::get('/add-to-cart/{productID}', [CartController::class, 'AddToCart']);
Route::get('/update-cart', [CartController::class, 'UpdateCart']);



Route::get('/', function () {
    return view('index');
});

Route::get('/homepage', [MakeUpProduct::class, 'homepage']);


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

Route::get('/AboutUs', [InformationController::class, 'aboutus']);
Route::get('/contactUs', [InformationController::class, 'contactus']);
Route::get('/Sale', [MakeUpProduct::class, 'sale']);

Route::get('/eyeshadows', [MakeUpProduct::class, 'eyeshadow']);
Route::get('/eyeliner', [MakeUpProduct::class, 'eyeliner']);
Route::get('/mascara',  [MakeUpProduct::class, 'mascara']);
Route::get('/eyes',  [MakeUpProduct::class, 'eyes']);

Route::get('/foundation', function () {
    return view('Foundation');
});
Route::get('/highlighter', function () {
    return view('Highlighters');
});

Route::get('/productTable', [MakeUpProduct::class, 'productTable']);
Route::get('/lipSets', [MakeUpProduct::class, 'lipSets']);
Route::get('/lips', [MakeUpProduct::class, 'lips']);
Route::get('/lipSticks', [MakeUpProduct::class, 'lipSticks']);
Route::get('/lipPencils', [MakeUpProduct::class, 'lipPencils']);
Route::get('/lipTints', [MakeUpProduct::class, 'lipTints']);
Route::post('/addProduct', [ProductController::class, 'store']);
Route::post('/editProduct/{productId}', [ProductController::class, 'update']);
Route::get('/deleteProduct/{productId}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/editProduct/{productId}', [ProductController::class, 'edit'])->name('product.edit');
Route::get('/update/{productId}', [ProductController::class, 'update'])->name('product.update');
Route::get('/ProductView', [ProductController::class, 'show']);


Route::get('/login', function () {
    return view('Login');
});
Route::get('/lotions', function () {
    return view('Lotions');
});

Route::get('/oils', function () {
    return view('Oils');
});


//to be implemented
// Route::get('/orders', [MakeUpProduct::class, 'orders']);

//for now
Route::get('/orders', function () {
    return view('OrdersTable');
});
Route::get('/privacyPolicy', function () {
    return view('PrivacyPolicy');
});

Route::get('/productInfo/{id}', function ($id) {
    $product = Product::where('productID', $id)->get();
    $product = $product->toArray();
    $data = compact('product');
    return view("ProductView")->with($data);
});


Route::get('/scrubs', function () {
    return view('Scrubs');
});
Route::get('/serums', function () {
    return view('Serums');
});
Route::get('/masks', function () {
    return view('Masks');
});

Route::get('/masks', [MakeUpProduct::class, 'mask']);
Route::get('/serums', [MakeUpProduct::class, 'serum']);
Route::get('/cleansers', [MakeUpProduct::class, 'cleanser']);
Route::get('/skincare',  [MakeUpProduct::class, 'skincare']);

Route::get('/highlighters',  [MakeUpProduct::class, 'highlighter']);
Route::get('/concealers',  [MakeUpProduct::class, 'concealer']);
Route::get('/brushes',  [MakeUpProduct::class, 'brush']);
Route::get('/blushes',  [MakeUpProduct::class, 'blush']);
Route::get('/foundations',  [MakeUpProduct::class, 'foundation']);
Route::get('/face',  [MakeUpProduct::class, 'face']);

Route::get('/lotions',  [MakeUpProduct::class, 'lotion']);
Route::get('/oils',  [MakeUpProduct::class, 'oil']);
Route::get('/scrubs',  [MakeUpProduct::class, 'scrub']);
Route::get('/body',  [MakeUpProduct::class, 'body']);



Route::post('checkout',  [CheckoutController::class, 'getData']);
Route::view('/checkout',"checkout");