<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController as ConCon;
use App\Http\Controllers\HotelController as HotCon;
use App\Http\Controllers\OrderController as OrdCon;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//countries
Route::get('/countries', [ConCon::class, 'index'])->name('countries-index')->middleware('role:user'); //index / list
Route::get('/countries/create', [ConCon::class, 'create'])->name('countries-create')->middleware('role:admin'); //creation page
Route::post('/countries', [ConCon::class, 'store'])->name('countries-store')->middleware('role:admin'); //creation request
Route::get('/countries/edit/{id}', [ConCon::class, 'edit'])->name('countries-edit')->middleware('role:admin'); //edit page
Route::put('/countries/{country}', [ConCon::class, 'update'])->name('countries-update')->middleware('role:admin'); //update request
Route::delete('/countries/{country}', [ConCon::class, 'destroy'])->name('countries-delete')->middleware('role:admin'); //delete
// Route::get('/countries/show/{id}', [ConCon::class, 'show'])->name('countries-show')->middleware('role:user'); //display entry page

//hotels
Route::get('/hotels', [HotCon::class, 'index'])->name('hotels-index')->middleware('role:user'); //index / list
Route::get('/hotels/create', [HotCon::class, 'create'])->name('hotels-create')->middleware('role:admin'); //creation page
Route::post('/hotels', [HotCon::class, 'store'])->name('hotels-store')->middleware('role:admin'); //creation request
Route::get('/hotels/edit/{id}', [HotCon::class, 'edit'])->name('hotels-edit')->middleware('role:admin'); //edit page
Route::put('/hotels/{hotel}', [HotCon::class, 'update'])->name('hotels-update')->middleware('role:admin'); //update request
Route::delete('/hotels/{hotel}', [HotCon::class, 'destroy'])->name('hotels-delete')->middleware('role:admin'); //delete
// Route::get('/hotels/show/{id}', [HotCon::class, 'show'])->name('hotels-show')->middleware('role:user'); //display entry page

//orders
Route::get('/orders', [OrdCon::class, 'index'])->name('orders-index')->middleware('role:user'); //index / list
Route::get('/orders/create', [OrdCon::class, 'create'])->name('orders-create')->middleware('role:admin'); //creation page
Route::post('/orders', [OrdCon::class, 'store'])->name('orders-store')->middleware('role:admin'); //creation request
Route::get('/orders/edit/{id}', [OrdCon::class, 'edit'])->name('orders-edit')->middleware('role:admin'); //edit page
Route::put('/orders/{order}', [OrdCon::class, 'update'])->name('orders-update')->middleware('role:admin'); //update request
Route::delete('/orders/{order}', [OrdCon::class, 'destroy'])->name('orders-delete')->middleware('role:admin'); //delete
// Route::get('/orders/show/{id}', [OrdCon::class, 'show'])->name('orders-show')->middleware('role:user'); //display entry page
