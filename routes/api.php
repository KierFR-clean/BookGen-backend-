<?php

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/**
 * used apiResource to create restful endpoints
 * endpoints are handled by the BookController using default resource controller conventions
*/
Route::apiResource('books', BookController::class);
