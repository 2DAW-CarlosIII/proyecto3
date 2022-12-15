<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/',  [HomeController::class, 'getHome']);

Route::get('productos', [CatalogController::class, 'getIndex']);

Route::get('productos/show/{id}',  [CatalogController::class, 'getShow']);

Route::get('productos/create', [CatalogController::class, 'getCreate']);

Route::get('productos/edit/{id}', [CatalogController::class, 'getEdit']);

Route::post('productos/create', [CatalogController::class, 'store']);
require __DIR__.'/auth.php';
