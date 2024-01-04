<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PanierController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DashboardController;


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
Route::get('/home',[HomeController::class,'index'])->middleware('auth')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Admin Routes logout
Route::controller(AdminController::class)->group(function(){
    Route::get("/admin/logout",'destroy')->name('admin.logout');
});
require __DIR__.'/auth.php';


//user logout
Route::get('/logout', [HomeController::class,'logout'])->name('logout');

//Cart Routes
Route::get('/', [ProductsController::class, 'index'])->name('/');

Route::get('cart', [ProductsController::class, 'viewcart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart')->middleware('checkUserRegistration');
Route::put('update-cart/{itemId}', [ProductsController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [ProductsController::class, 'remove'])->name('remove_from_cart');


//route  checkout
Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');

//route contact
Route::get('/contact', function () {
    return view('products.contact');
})->name('contact');


//route product
Route::get('/products', [ProductsController::class, 'product'])->name('product');

//contact Route
Route::get('/contact/create', [ContactController::class,'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class,'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');


//admin dashboard
Route::get('/admin/users', [AdminController::class, 'getUsers'])->name('admin.users');
Route::get('/admin/contacts', [AdminController::class, 'getAllContacts'])->name('admin.contacts');
Route::get('/dashboard', function () {
    return view('admine.dashboard');
})->name('dashboard');

Route::get('/admine/products', [DashboardController::class, 'index'])->name('dashboard_admin');





// Modifier un produite

Route::get('/products/{id}/edit', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductsController::class, 'updat'])->name('products.update');

// Supprimer un produit
Route::delete('/products/{id}', [ProductsController::class, 'destroy'])->name('products.destroy');

Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');



Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');



