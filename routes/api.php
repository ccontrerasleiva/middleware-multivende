<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Multivende;

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
Route::get('auth/local', [Multivende::class, 'login']);
Route::get('users/me', [Multivende::class, 'me']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
