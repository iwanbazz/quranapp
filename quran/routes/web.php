<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
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

Route::get('/screen2', [MainController::class, 'screen2'])->name('screen2');
Route::get('/screen2.1', [MainController::class, 'screen_21'])->name('searchScreen');
Route::get('/search2.1', [MainController::class, 'search'])->name('searchTopic');
Route::get('/screen2.2/{id}', [MainController::class, 'screen_22'])->name('ReadScreen');
