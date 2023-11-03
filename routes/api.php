<?php

use App\Http\Controllers\Api\V1\CompleteTaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\TaskController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
  return $request->user();
});

Route::prefix('v1')->group(function(){
  Route::apiResource('/tasks', TaskController::class);
  Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});