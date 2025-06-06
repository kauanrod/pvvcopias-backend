<?php

namespace App\Services;

use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;

class FinancialReportService {
    public function generate($request) {
//        $data = [$request];
//        $pdf = Pdf::loadView('pdf.financial_report', compact('data'));
//        return $pdf->download('financial-report.pdf');

        $domPDF = new DomPDF();
        $domPDF->loadHtml('generating a simple PDF file');
        $domPDF->setPaper('A4');
        $domPDF->render();
        $domPDF->stream();
    }
}
