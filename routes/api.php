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

Route::post("/event", [EventsController::class, "get"]);
Route::post("/event", [EventsController::class, "post"]);
Route::put("/event", [EventsController::class, "put"]);
Route::delete("/event", [EventsController::class, "delete"]);
Route::get("/follow", [FollowsController::class, "index"]);
Route::post("/tweet", [TweetsController::class, "post"]);
