<?php
use App\Http\Controllers\scrapingController;
use App\Http\Controllers\DashboardController;
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
Route::middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/dashboard/calculator', [DashboardController::class, 'calculator'])->name('calculator');

    Route::get('/dashboard/calculator3', function () {
        return view('calculator3');
})->name('calculator3');
});
Route::get('/scrapdata', [scrapingController::class, 'ScrapData'])->name('scrapdata');
require __DIR__.'/auth.php';
