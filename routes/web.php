<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;


Route::controller(MainController::class)->group(function(){

    Route::get('/', 'index')->name('index');
    Route::post('/applications', 'store')->name('store_applicant');

});

