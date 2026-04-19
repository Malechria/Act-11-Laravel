<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;

Route::apiResource('universes', UniverseController::class);
Route::apiResource('superheroes', SuperheroController::class);

