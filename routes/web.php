<?php

use App\Http\Controllers\FinancialReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/financial-reports', [FinancialReportController::class, 'generate']);
