<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('persons','Api\\PersonController');
Route::apiResource('contacts','Api\\ContactController');
