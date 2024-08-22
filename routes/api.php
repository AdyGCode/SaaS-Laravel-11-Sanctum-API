<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'v1'], function () {
    // only expose the index and show to all users
    Route::apiResource('/products', ProductController::class)
        ->only(['index', 'show']);
    // only allow authenticated users to access create, update and delete
    // Route::apiResource('/products', ProductController::class)
    //     ->only(['create', 'update','delete'])
    //     ->middleware(['auth:sanctum']);

});


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
