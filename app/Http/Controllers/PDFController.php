<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Core;

use Illuminate\Http\Request;
use DB;

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
    public function file_print(Request $request)
    {
        $print_code = 2000;
        $start_date = '2022-01-01';
        $end_date = '2022-01-05';

        $print_data = Core::rightJoin('vehicles', 'vehicles.model_code', '=', 'cores.model_code')
            ->rightJoin('purchages', 'purchages.id', '=', 'cores.store_id')
            ->select(
                'cores.customer_name',
                'cores.father_name',
                'cores.address_one',
                'cores.address_two',
                'cores.chassis_no',
                'cores.engine_no',
                'cores.original_sale_date',
                'cores.vat_sale_date',
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
                'purchages.challan_no',
                'purchages.purchage_date',
                'vehicles.*'
            )
            ->where('cores.print_code', "=", $print_code)
            ->whereBetween('cores.original_sale_date', [$start_date, $end_date])
            ->get();
        $pdf = PDF::loadView('dms.pdf.pdf', ['print_data' => $print_data]);
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('bajaj_point.pdf');
    }
    public function hform()
    {
        $pdf = PDF::loadView('dms.pdf.brta.hform');
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('dms.pdf.brta.hform');
    }
    public function vat_sale()
    {
        $pdf = PDF::loadView('dms.pdf.vat.vat_sale_bp');
        $pdf->setPaper('A4', 'landscape');

        return $pdf->stream('dms.pdf.vat.vat_sale_bp');
    }
    public function vat_sale_bp()
    {
        $print_code = 2000;
        $start_date = '2022-01-01';
        $end_date = '2022-01-20';

        // $data = DB::table('cores')
        //     ->rightJoin('vehicles', 'vehicles.model_code', '=', 'cores.model_code')
        //     ->select(
        //         'cores.customer_name',
        //         'cores.address_two',
        //         'cores.five_chassis',
        //         'cores.five_engine',
        //         'cores.vat_sale_date',
        //         'cores.sale_mushak_no',
        //         'cores.basic_price_vat',
        //         'cores.sale_vat',
        //         'cores.unit_price_vat',
        //         'vehicles.model',
        //         // DB::raw('COUNT(*) AS total')
        //     )
        //     ->where('cores.vat_code', "=", $print_code)
        //     // ->whereNotNull('cores.sale_mushak_no')
        //     ->whereBetween('cores.vat_sale_date', [$start_date, $end_date])
        //     // ->groupBy('vehicles.model')
        //     ->get()
        //     ->groupBy('model');

        // ->sortBy('sale_mushak_no');
        $data = Core::rightJoin('vehicles', 'vehicles.model_code', '=', 'cores.model_code')
            ->select(
                'cores.customer_name',
                'cores.address_two',
                'cores.five_chassis',
                'cores.five_engine',
                'cores.vat_sale_date',
                'cores.sale_mushak_no',
                'cores.basic_price_vat',
                'cores.sale_vat',
                'cores.unit_price_vat',
                'vehicles.model',
            )
            ->where('cores.vat_code', "=", $print_code)
            ->whereNotNull('cores.sale_mushak_no')
            ->whereBetween('cores.vat_sale_date', [$start_date, $end_date])
            ->orderBy('sale_mushak_no')
            ->get()
            ->groupBy('vat_sale_date');

        // ->sum('sale_vat');
        // ->sortBy('sale_mushak_no');
        return response()->json($data);
    }
}
