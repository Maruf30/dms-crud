<?php

namespace App\Http\Controllers;

use App\Models\Core;
use Illuminate\Http\Request;

use PDF;

class PDFController extends Controller
{

    public function pdf_file_print()
    {
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('dms.pdf.pdf', compact('data'));
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('bajaj_point.pdf');
    }
    public function file_print()
    {
        $print_code = 2000;
        $start_date = '2022-01-01';
        $end_date = '2022-01-10';

        $print_data = Core::rightJoin('vehicles', 'vehicles.model_code', '=', 'cores.model_code')
            ->select(
                'cores.customer_name',
                'cores.father_name',
                'cores.address_one',
                'cores.address_two',
                'cores.chassis_no',
                'cores.engine_no',
                'cores.original_sale_date',
                'cores.mobile',
                'cores.uml_mushak_no',
                'cores.approval_no',
                'cores.invoice_no',
                'cores.sale_mushak_no',
                'cores.dealer',
                'cores.vat_process',
                'cores.tr_number',
                'cores.tr_month_code',
                'cores.basic_price_vat',
                'cores.sale_vat',
                'cores.unit_price_vat',
                'cores.print_ref',
                'cores.color',
                'vehicles.*'
            )
            ->where('cores.print_code', "=", $print_code)
            ->whereBetween('cores.original_sale_date', [$start_date, $end_date])
            ->get();
        $data = [
            'title' => 'Welcome to Tutsmake.com',
            'date' => date('m/d/Y')
        ];

        $pdf = PDF::loadView('dms.pdf.pdf', ['print_data' => $print_data]);
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('bajaj_point.pdf');
    }
}
