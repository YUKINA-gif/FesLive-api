<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FollowsController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TweetsController;

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

Route::get("/event", [EventsController::class, "get"]);
Route::post("/event", [EventsController::class, "post"]);
Route::put("/event", [EventsController::class, "put"]);
Route::get("/event/search", [EventsController::class, "search"]);
Route::get("/event/{id}", [EventsController::class, "detail"]);
Route::post("/follow", [FollowsController::class, "post"]);
Route::get("/tweet", [TweetsController::class, "get"]);
