<?php

use App\Http\Controllers\GroupController;
use Illuminate\Support\Facades\Route;

/*
    Route::get('/', function () {
        return view('welcome');
    });
*/

Route::view('/', 'welcome'); //Unicamente Funciona para retornar o regresar vistas sin informacion

Route::get('groups', [GroupController::class, 'index'])->name('groups.index');