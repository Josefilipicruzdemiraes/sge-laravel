<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipamentoController;

Route::get('/', function () {
    return redirect('/equipamentos');
});

Route::resource('equipamentos', EquipamentoController::class);
