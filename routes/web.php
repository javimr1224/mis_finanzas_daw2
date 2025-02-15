<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\OutcomeController;

Route::get('/', function () {
    return view('welcome');
});

//Route::resource('incomes', IncomeController::class);
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index ');
//Route::resource('outcomes', OutcomeController::class);
Route::get('/outcomes', [OutcomeController::class, 'index'])->name('outcomes.index');