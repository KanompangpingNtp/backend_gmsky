<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowMenuApiController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/test', function () {
    return response()->json(['message' => 'Hello, this is an API!']);
});

Route::get('/show-menu', [ShowMenuApiController::class, 'showMenuAPI']);

// Route::get('/user/{id}', function ($id) {
//     return response()->json(['user_id' => $id]);
// });
