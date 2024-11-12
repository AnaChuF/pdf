<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function pdf($name){
        // Renderiza la vista Blade
        $pdf = Pdf::loadView($name);

        // Opcional: configurar el papel y orientación
        $pdf->setPaper('A4', 'portrait');

        // Retorna el PDF para que se descargue o se muestre en el navegador
        return $pdf->stream('reporte.pdf');

    }
}
