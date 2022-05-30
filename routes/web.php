<?php

use App\Http\Controllers\ContactFormController;
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
    return view('home');
});
Route::get('/contact-form', [ContactFormController::class, 'index']);
Route::post('/checkCode', [ContactFormController::class, 'checkCode'])->name('check-code');
Route::get('/updateCode', [ContactFormController::class, 'updateCode'])->name('update-code');
Route::get('/contact-form/{step}', [ContactFormController::class, 'getSessionVars']);
Route::post('/contact-form/{step}', [ContactFormController::class, 'store']);
