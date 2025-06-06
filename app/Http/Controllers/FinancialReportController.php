<?php

namespace App\Http\Controllers;

use App\Services\FinancialReportService;
use Illuminate\Http\Request;

class FinancialReportController extends Controller {
    public function generate(Request $request) {
        return app(FinancialReportService::class)->generate($request);
    }
}
