<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImportController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', function() {
    return view('auth.login');
});
Route::middleware(['auth'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Import Data
    Route::get('/import-data', [ImportController::class, 'index'])->name('import');
    Route::post('/import-data/store', [ImportController::class, 'import'])->name('import.store');
    Route::delete('/import-data/destroy', [ImportController::class, 'destroy'])->name('import.destroy');
});
