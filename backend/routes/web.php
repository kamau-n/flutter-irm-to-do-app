<?php

use App\Http\Controllers\Api\TaskController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('api')->group(function () {
//     Route::apiResource('tasks', TaskController::class);
// });

use Illuminate\Http\JsonResponse;


Route::apiResource('tasks', TaskController::class);
