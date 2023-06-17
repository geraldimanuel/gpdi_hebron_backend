<?php

// use App\Http\Controllers\ArticleController;

use App\Http\Controllers\API\V1\ArticleController;
use App\Http\Resources\V1\ArticleCollection;
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

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });

// http: // gpdihebron/api/v1/articles

Route::group(['prefix' => 'v1'], function(){

    // Articles
    Route::apiResource('/articles', ArticleController::class);

});