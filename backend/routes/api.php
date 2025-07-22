<?php

use App\Http\Controllers\TaskController;
use Illuminate\Routing\Route;

Route::apiResource('tasks', TaskController::class);
