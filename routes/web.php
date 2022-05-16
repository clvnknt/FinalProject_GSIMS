<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'viewDashboard']);

Route::get('/supplier', [SupplierController::class, 'viewSuppliers']);
Route::get('/add-supplier-form', [SupplierController::class, 'viewAddSupplierForm']);
Route::post('/save-new-supplier', [SupplierController::class, 'saveNewSupplier']);
Route::get('/edit-supplier/{id}', [SupplierController::class, 'viewEditSupplierForm']);
Route::post('/save-edit-supplier', [SupplierController::class, 'saveSupplierChanges']);
Route::get('/delete-supplier/{id}', [SupplierController::class, 'deleteSupplier']);

Route::get('/transaction', [SupplierController::class, 'viewSuppliers']);