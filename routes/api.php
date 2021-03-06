<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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

Route::get('test', function (Request $request) {
    return "Not authorized route";
});

Route::middleware('auth:api')->prefix('v1')->group(function() {
    Route::get('user', function (Request $request) {
        return $request->user();
    });

    Route::resource('authors', AuthorController::class);

    Route::resource('books', BookController::class);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
