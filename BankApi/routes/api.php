<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ControladorCategoria;

Route::apiResource('categories', ControladorCategoria::class);
?>