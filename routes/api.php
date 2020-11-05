<?php

use App\Http\Controllers\SumaController;
use App\Http\Controllers\MultiplicacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/{n1}/{n2}', [SumaController::class,'suma']);


Route::post('/suma', function () {
    return "Metodo post";
});

Route::post('/multiplicacion', function () {
    return "Metodo post";
});




