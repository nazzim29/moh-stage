<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeneficiaireController;
use App\Http\Controllers\DossierController;
use App\Http\Controllers\PieceJointeController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// borderau
Route::get('/beneficiaire/{id}', [BeneficiaireController::class, 'index_json'])->name('beneficiaire.getjson');



Route::get('/bordeurau/{id}', [DossierController::class, 'bordeurau'])->name('bordeurau');
//fin borderau
