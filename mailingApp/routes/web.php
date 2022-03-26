<?php

use App\Http\Controllers\SendEmailController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Route::post('/', [SendEmailController::class, "send"]);

Route::view("/submission", "submission");
