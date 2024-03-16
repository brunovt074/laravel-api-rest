<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\InvoiceController;


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

Route::group(['prefix'=>'v1', 'namespace' => 'App\Http\Controllers'], function(){
    Route::apiResource('customers', CustomerController::class);//intellisense marks error but App\Http\Controllers is defined for both controllers in the group's namespace parameter above
    Route::apiResource('invoices', InvoiceController::class);
    Route::post('invoices/bulk',['uses' => 'InvoiceController@bulkStore']);
});