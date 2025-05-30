<?php

    use App\Http\Controllers\FinancialRecordController;
    use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//every method can be accessed through this route
Route::apiResource('/financial-records', [FinancialRecordController::class]);

//Route::post('/financial-records', [FinancialRecordController::class, 'store']);
