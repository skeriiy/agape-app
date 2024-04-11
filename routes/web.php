<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\TransactionController;

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
Route::get('/', function() {
    return view('index');
});

Route::get('/account' , [UserController::class, 'create'])->name('login');
Route::post('/account/store', [UserController::class,'store']);
Route::post('/account/processLogin', [UserController::class, 'processLogin']);

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>'auth'], function(){
    Route::get('/costumer', function(){
        return view('costumer');
    });

    Route::post('/add/message' , [MessageController::class, 'addMassage']);

    Route::get('/process/logout', [UserController::class, 'processLogout']);
    
    // admin, transact and View
    Route::get('/viewmsg', [MessageController::class, 'index']);
    
    Route::get('/transact/{id}', [TransactionController::class, 'show']);
    
    Route::post('/transact/store/{id}', [TransactionController::class, 'store']);
    Route::get('/adminlog', function(){
        return view('adminlog');
    });
});


// main pages
Route::get('/products', function(){
    return view('products');
});
Route::get('/cart' , function(){
    return view('cart');
});
Route::get('/contact' , function(){
    return view('contact');
});
Route::get('/about', function(){
    return view('about');
});



Route::get('/ban' , function(){
    return view('banana');
});
Route::get('/bro' , function(){
    return view('brownies');
});
Route::get('/chif' , function(){
    return view('chiffonc');
});
Route::get('/cin' , function(){
    return view('cinnamon');
});
Route::get('/cre' , function(){
    return view('creampuff');
});
Route::get('/mam' , function(){
    return view('mamon');
});
Route::get('/red' , function(){
    return view('redvelvet');
});
Route::get('/spa' , function(){
    return view('spanishb');
});
Route::get('/suf' , function(){
    return view('sufle');
});
Route::get('/tart' , function(){
    return view('tart');
});
