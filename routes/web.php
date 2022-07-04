<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CartDetailController;
use App\Http\Controllers\AlamatPengirimanController;
use App\Http\Controllers\SuggestController;

/*
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

Route::get('/logoutcust', [CustomerController::class, 'logoutcust'])->name('logoutcust');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/suggest',[SuggestController::class, 'store'])->name('suggest.store');
Route::middleware(['login'])->group(function(){
    //Auth
    Route::get('/login', [LoginController::class, 'loginpage'])->name('login');
    Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
    Route::get('/logoutcust', [LoginController::class, 'logout'])->name('logoutcust');
    Route::get('/logincust', [CustomerController::class, 'logincust'])->name('logincust');
    Route::post('/postlogincust', [CustomerController::class, 'postlogincust'])->name('postlogincust');
    Route::get('/signup', function () {
        return view('signup');
    });
    Route::post('/register', [LoginController::class, 'register'])->name('register');
    
    //No Login
    Route::get('/', function () {
        return view('dashboard');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::get('/home', function () {
        return view('home');
    })->name('home');
    Route::get('/suggest', [SuggestController::class, 'create'])->name('suggest'); 
    Route::get('/blouses', function () {
        return view('blousenologin');
    });
    Route::get('/skirts', function () {
        return view('skirtnologin');
    });
    Route::get('/dresses', function () {
        return view('dressnologin');
    });
    Route::get('/pants', function () {
        return view('pantnologin');
    });
    Route::get('/inners', function () {
        return view('innernologin');
    });
    Route::get('/bestselleritems', function () {
        return view('bestnologin');
    });
    Route::get('/sales', function () {
        return view('salenologin');
    });
    Route::get('/tentangkami', function () {
        return view('tentangkami');
    });
    Route::get('/lokasikami', function () {
        return view('lokasikami');
    });
  

});

Route::middleware(['auth'])->group(function(){
    Route::middleware(['admin'])->group(function(){ 
        //Admin POV
        Route::get('/product', [ProductController::class, 'index'])->name('product');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/insertdata', [ProductController::class, 'insertdata'])->name('insertdata');
        Route::get('/updatedata/{id}', [ProductController::class, 'updatedata'])->name('updatedata');
        Route::post('/resubmitdata/{id}', [ProductController::class, 'resubmitdata'])->name('resubmitdata');
        Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('delete');
        Route::get('/dashboardadmin', function () {
            return view('/dashboardadmin');
        });
        Route::get('/penjualan', [CartController::class, 'get_order'])->name('admin.penjualan');
        Route::get('/myprofileadmin', [UserController::class, 'editAdmin'])->name('admin.profile'); 
        Route::get('/updateprofileadmin', [UserController::class, 'updateadmin'])->name('updateadmin'); 
        Route::post('/resubmitdataadmin/{id}', [UserController::class, 'resubmitdataadmin'])->name('resubmitdataadmin');
     
    });
    Route::middleware(['user'])->group(function(){
        //User POV
        Route::get('/userproduct/{id}', [ProductController::class, 'get_product']);
        Route::get('/detailproduct/{id}', [ProductController::class, 'view_user']);
        Route::get('/homepage2', function () {
            return view('homepage2');
        })->name('homepage2');
        Route::get('/account', function () {
            return view('account');
        });
        Route::get('/bestsellers', function () {
            return view('bestsellers');
        });
        Route::get('/sale', function () {
            return view('sale');
        });
        Route::get('/suggests', [SuggestController::class, 'create'])->name('suggest'); 
        
        Route::post('/suggests',[SuggestController::class, 'store'])->name('suggest.store');
        Route::get('/myprofile', [UserController::class, 'editUser'])->name('userprofile'); 
        Route::get('/updateprofileuser', [UserController::class, 'updateuser'])->name('updateuser'); 
        Route::post('/resubmitdatauser/{id}', [UserController::class, 'resubmitdatauser'])->name('resubmitdatauser');
        
        Route::get('/tentangkamii', function () {
            return view('tentangkamilo');
        });
        Route::get('/lokasikamii', function () {
            return view('lokasikamilo');
        });
        Route::get('/myorder',[CartController::class, 'view_order'])->name('view.order');
        //shopping cart
        Route::resource('cart', CartController::class);
        Route::patch('kosongkan/{id}', [CartController::class, 'kosongkan']);
        // cart detail
        Route::resource('cartdetail', CartDetailController::class);
        // alamat pengiriman
        Route::resource('alamatpengiriman', AlamatPengirimanController::class);
        // checkout
        Route::get('checkout', [CartController::class, 'checkout']);
        //cek cart
        Route::get('mycart', [CartController::class, 'index'])->name('view.cart');
    });
});