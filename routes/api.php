<?php

use App\Http\Controllers\Api\AuthenticationController;
use App\Http\Controllers\Api\LandingPageController;
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

// Route::middleware('auth:sanctum')->get('/profile', function (Request $request) {
//     return $request->user();
// });


Route::post('login',[AuthenticationController::class,'login']);
Route::post('mobile-register',[AuthenticationController::class,'register']);

Route::middleware('auth:sanctum')->get('auth-check',[AuthenticationController::class,'checkAuth']);
Route::middleware('auth:sanctum')->get('profile',[LandingPageController::class,'getUserProfile']);
Route::middleware('auth:sanctum')->post('logout',[LandingPageController::class,'logout']);
