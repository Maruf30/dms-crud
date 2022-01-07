<?php

namespace App\Http\Controllers;

use App\Models\Core;
use App\Models\Mrp;
use App\Models\Purchage;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PurchageController extends Controller
{
    public function index()
    {
        $suppliers = Supplier::select('supplier_name')->where('status', '1')->get();
        $mrps = Mrp::select('model', 'model_code')->where('status', '1')->get();
        // dd($mrps);
        return view('dms.purchage.index')->with(['suppliers' => $suppliers, 'mrps' => $mrps]);
    }
    public function create(Request $request)
    {

        DB::transaction(function () use ($request) {
            $supplier_code = Supplier::select('supplier_code')->where('supplier_name', $request->vendor)->value('supplier_code');

            $mc_purchage = new Purchage();
            $mc_purchage->challan_no = $request['challan_no'];
            $mc_purchage->purchage_date = $request['purchage_date'];
            $mc_purchage->vendor = $request['vendor'];
            $mc_purchage->purchage_value = $request['purchage_value'];
            // $mc_purchage->uml_mushak_no = $request['uml_mushak_no'];
            // $mc_purchage->uml_mushak_date = $request['uml_mushak_date'];
            $mc_purchage->save();

            $purchage_id = $mc_purchage->id;

            foreach ($request->model_code as $key => $value) {

                $save_record = [
                    'store_id' => $purchage_id,
                    'vat_code' => $supplier_code,
                    'print_code' => $supplier_code,
                    'report_code' => $supplier_code,
                    'model_code' => $request->model_code[$key],
                    'five_chassis' => $request->five_chassis[$key],
                    'five_engine' => $request->five_engine[$key],
                    'unit_price' => $request->unit_price[$key],
                    'unit_price_vat' => $request->unit_price_vat[$key],
                    'vat_purchage_mrp' => $request->vat_purchage_mrp[$key],
                    'vat_year_purchage' => $request->vat_year_purchage[$key],
                    'purchage_price' => $request->purchage_price[$key],
                ];
                Core::insert($save_record);
            }
        });
        return redirect()->route('purchage.index');
    }
    public function get_mrp(Request $request)
    {
        $mrp = Mrp::select('mrp', 'vat_mrp', 'vat_purchage_mrp', 'purchage_price')->where('model_code', $request->model_code)->first();
        return response()->json($mrp);
    }
}
