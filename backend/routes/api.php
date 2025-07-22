<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;

// Add API resource route for tasks
Route::apiResource('tasks', TaskController::class);
