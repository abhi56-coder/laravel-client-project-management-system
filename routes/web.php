<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect()->route('clients.index');
});

Route::resource('clients', ClientController::class);
Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);
