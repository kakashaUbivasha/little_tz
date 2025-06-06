<?php

use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\StockController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth.apikey')->group(function () {
    Route::get('/sales', [SalesController::class, 'index']);
    Route::get('/orders', [OrderController::class, 'index']);
    Route::get('/stocks', [StockController::class, 'index']);
    Route::get('/incomes', [IncomeController::class, 'index']);
});
