<?php

use App\Http\Controllers\Apply\ApplicationsController;
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

Route::view('/', 'pages.home')->name('home');

Route::get('/appication/{applicationForm}/create', [ApplicationsController::class, 'create'])->name('apply.application.create');
Route::post('/appication/{applicationForm}', [ApplicationsController::class, 'store'])->name('apply.application.store');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
