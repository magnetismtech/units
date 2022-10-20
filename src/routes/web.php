<?php


use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Magnetism\Units\Http'], function(){

    Route::resource('/units', UnitController::class);

});