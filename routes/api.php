<?php

use App\Http\Controllers\Api\EmployeeControler;
use App\Http\Controllers\Api\RecordOfEmployeeControler;
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

Route::post('createNewEmployee', [EmployeeControler::class, 'createNewEmployee']);

Route::post('addNewOrder', [RecordOfEmployeeControler::class, 'addNewOrder']);

Route::get('getSumNotPaid/{id}', [RecordOfEmployeeControler::class, 'getSumNotPaid']);

Route::get('fullPayment', [RecordOfEmployeeControler::class, 'fullPayment']);