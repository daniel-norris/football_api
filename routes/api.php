<?php

// using the teams controller
use App\Http\Controllers\API\Teams;
use App\Http\Controllers\API\Drafts;
use App\Http\Controllers\API\Players;

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

Route::get("/teams", [Teams::class, "index"]);

Route::post("/teams", [Teams::class, "store"]);

Route::post("/games", [Games::class, "store"]);

Route::get("/players", [Players::class, "index"]);

Route::post("/players", [Players::class, "store"]);
