<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AccountController;

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

Route::get('/transaction', [TransactionController::class, 'viewTransactions']);
Route::get('/add-transaction-form', [TransactionController::class, 'viewAddTransactionForm']);
Route::post('/save-new-transaction', [TransactionController::class, 'saveNewTransaction']);
Route::get('/edit-transaction/{id}', [TransactionController::class, 'viewEditTransactionForm']);
Route::post('/save-edit-transaction', [TransactionController::class, 'saveTransactionChanges']);
Route::get('/delete-transaction/{id}', [TransactionController::class, 'deleteTransaction']);

Route::get('/item', [ItemController::class, 'viewItems']);
Route::get('/add-item-form', [ItemController::class, 'viewAddItemForm']);
Route::post('/save-new-item', [ItemController::class, 'saveNewItem']);
Route::get('/edit-item/{id}', [ItemController::class, 'viewEditItemForm']);
Route::post('/save-edit-item', [ItemController::class, 'saveItemChanges']);
Route::get('/delete-item/{id}', [ItemController::class, 'deleteItem']);

Route::post('/update-profile',[UserController::class, 'profileUpdate']);

