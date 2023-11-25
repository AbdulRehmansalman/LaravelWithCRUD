<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
//! Aghar get ka rRote hit hota hai tu W oForm open karwa deta,Index Function pe ja kar Controller ke
Route::get('/customer', [CustomerController::class, 'index']);
//! ghar POst Method Hit hota hai tu:Tu Wo Store walai Function par le ata hai
Route::post('/customer', [CustomerController::class, 'store']);
// Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/customer/view', [CustomerController::class, 'view']);
Route::get('customer/delete/{id}', [CustomerController::class, 'delete']);
// Route::get('customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
// Route::post('customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::get('customer/edit/{id}',[CustomerController::class,'edit']);
Route::put('customer/update/{id}',[CustomerController::class,'update']);
