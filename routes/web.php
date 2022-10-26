<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Employee\PackageController;
use App\Http\Controllers\DashboardController;




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


#Visualizar vista verificar correo
#Route::get('/verify', function () {
    #return view('auth/verify');
#})->name('website');



//Route::get('menu', function () {
//    return view('menu.index');
//});
//Route::get('menu/crear', function () {
//    return view('menu.crear');
//});
//Route::get('menu/ver', function () {
//    return view('menu.ver');
//});



//Route::resource('inventario', InventoryController::class);

//Route::get('inventario/{id}', [InventoryController::class, 'show']);



//Route::get('configuracion', function () {
//    return view('configuracion.index');
//});

// Route::get('create-pdf-file', [PDFController::class, 'index']);

//Authenticated Routes
Route::middleware(['auth'])->group( function () {
    Route::get('/profile/edit', 'App\Http\Controllers\ProfileController@edit')->name('profile.edit');
    Route::get('/profile/change-password', 'App\Http\Controllers\ProfileController@change_password')->name('profile.change-password');
    Route::get('/profile', 'App\Http\Controllers\ProfileController@index')->name('profile.index');
    Route::patch('/profile', 'App\Http\Controllers\ProfileController@update')->name('profile.update');
});

//Admin Routes
Route::prefix('admin')->name('admin.')->middleware(['auth', 'auth.isAdmin'])->group( function () {
    Route::resource('/users', UserController::class);
});

//Employee routes
Route::middleware(['auth', 'verified', 'auth.isEmployee'])->group( function () {
   
});


Route::get('/', [HomeController::class, 'index']);

//CUBOS