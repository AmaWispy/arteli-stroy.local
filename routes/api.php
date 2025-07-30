<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;

Route::post("/media/open", [MediaController::class, 'open']);
Route::post("/media/load", [MediaController::class, 'load']);
Route::post("/media/delete", [MediaController::class, 'delete']);
Route::post("/media/create-folder", [MediaController::class, 'createFolder']);