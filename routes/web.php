<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\SearchFlightController;
use App\Http\Controllers\PaymentController;
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
    return view('welcome');
});

Route::get('', SearchFlightController::class)->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/payment', [PaymentController::class, 'create'])->name('payment.create');

});


require __DIR__.'/auth.php';
