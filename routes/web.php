<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HtmlFormController;

Route::get('/html101', [HtmlFormController::class, 'index']);
Route::post('/html101', [HtmlFormController::class, 'store']);
