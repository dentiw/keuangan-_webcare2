<?php

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;

Route::resource('total-project', ProjectsController::class);
Route::resource('income', IncomeController::class);
Route::resource('expenses', ExpenseController::class);
