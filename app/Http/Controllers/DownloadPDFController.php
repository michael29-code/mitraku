<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use Illuminate\Http\Request;
use Dompdf\Dompdf;


use function Spatie\LaravelPdf\Support\pdf;

class DownloadPDFController extends Controller
{
    public function __invoke(Pengajuan $pengajuan)
    {
        // Load the view and convert it to HTML
        $html = view('pdfTemplate', compact('pengajuan'))->render();

        // Instantiate Dompdf
        $dompdf = new Dompdf();

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // Set paper size and orientation
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return response()->streamDownload(
            fn() => print($dompdf->output()),
            'invoice-' . now()->format('Y-m-d') . '.pdf'
        );
    }
}
