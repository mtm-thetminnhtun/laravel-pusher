<?php

use App\Http\Controllers\VoteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [VoteController::class, 'index']);
Route::post('/', [VoteController::class, 'update']);
