<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;

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

// APIController Vanilla
Route::get('/vanilla', [APIController::class, 'get']);
Route::post('/vanilla', [APIController::class, 'post']);
Route::put('/vanilla', [APIController::class, 'put']);
Route::patch('/vanilla', [APIController::class, 'patch']);
Route::delete('/vanilla', [APIController::class, 'delete']);

// Old way before laravel 8
Route::get('/json', function (Request $request) {
    dump('get json');
});
