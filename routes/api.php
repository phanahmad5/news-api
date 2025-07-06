<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::apiResource('news', NewsController::class);
