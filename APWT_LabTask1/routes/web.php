<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('home');
});
Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/product', [PageController::class, 'product'])->name('product');
Route::get('/team', [PageController::class, 'ourTeam'])->name('team');
Route::get('/aboutUs', [PageController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [PageController::class, 'contactUs'])->name('contactUs');