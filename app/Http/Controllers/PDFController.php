<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{

    public function generate_pdf()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('pdf', $data);
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('bajaj_point.pdf');
    }
}
