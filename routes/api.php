<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

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

Route::get('/test', function(Request $request){

    dd($request->headers->all());

    $response = new \Illuminate\Http\Response(json_encode(['msg' => 'Minha primeira resposta de API em PHP']));
    $response->header('Content-type', 'application/json');

    return $response;
});

Route::namespace('Api')->group(function(){ // não faz sentido ter namespace pois ja está importando em cima, funciona normalmente sem esse namespace

    Route::get('/products', [ProductController::class, 'index']);

});

// jeito moderno: Route::get('/products', [ProductController::class, 'index']);