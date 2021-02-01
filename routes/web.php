<?php
use App\Http\Controllers\scrapingController;
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
    // return view('welcome');
    return view('dashboard');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/calculator', function () {
    return view('calculator');
})->middleware(['auth'])->name('calculator');

Route::get('/dashboard/calculator3', function () {
    return view('calculator3');
})->middleware(['auth'])->name('calculator3');

Route::get('/scrapdata', [scrapingController::class, 'ScrapData'])->name('scrapdata');
require __DIR__.'/auth.php';
