<?php

use App\Http\Controllers\ApplicationStatusController;
use App\Http\Controllers\InformationController;
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
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::middleware('auth' )->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('information', InformationController::class);
    Route::resource('status', ApplicationStatusController::class);
    Route::get('/infostatus/edit/{information_id}', [InformationController::class, 'editStatus'])->name('infostatus.edit');
    Route::post('/infostatus/update/{information_id}', [InformationController::class, 'updateStatus'])->name('infostatus.update');

});


#Front routes......
Route::get('/details/confirm-details', function () {
    return view('form-details');
});
Route::post('/details/submit', [App\Http\Controllers\FrontController::class, 'storeBasicData'])->name('basic.data.submit');
Route::post('/payment-data/submit', [App\Http\Controllers\FrontController::class, 'storePaymentInfo'])->name('payment.submit');


Route::get('/payment/amount', [App\Http\Controllers\FrontController::class, 'paymentAmount'])->name('payment.amount');
Route::get('/payment/details', [App\Http\Controllers\FrontController::class, 'paymentDetails'])->name('payment.details');
