<?php

namespace App\Http\Controllers;

use App\Models\ColorCode;
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
        $dealer_names = Supplier::select('dealer_name')->whereNotNull('dealer_name')->get();
        $mrps = Mrp::select('model_name', 'model_code')->where('status', '1')->get();
        // dd($mrps);
        return view('dms.purchage.index')->with(['suppliers' => $suppliers, 'mrps' => $mrps, 'dealer_names' => $dealer_names]);
    }
    public function create(Request $request)
    {

        DB::transaction(function () use ($request) {
            $supplier_code = Supplier::select('supplier_code')->where('supplier_name', $request->vendor)->value('supplier_code');

            $mc_purchage = new Purchage();
            $mc_purchage->challan_no = $request['challan_no'];
            $mc_purchage->purchage_date = $request['purchage_date'];
            $mc_purchage->vendor = $request['vendor'];
            $mc_purchage->dealer_name = $request['dealer_name'];
            $mc_purchage->purchage_value = $request['purchage_value'];
            $mc_purchage->quantity = $request['quantity'];
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
                    'color_code' => $request->color_code[$key],
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
        $color = ColorCode::select('model_name', 'color', 'color_code')->where('model_code', $request->model_code)->get();
        $mrp = Mrp::select('mrp', 'vat_mrp', 'vat_purchage_mrp', 'purchage_price')->where('model_code', $request->model_code)->first();
        // $mrp = Mrp::rightJoin('color_codes', 'color_codes.model_code', '=', 'mrps.model_code')
        //     ->select(
        //         'mrps.mrp',
        //         'mrps.vat_mrp',
        //         'mrps.vat_purchage_mrp',
        //         'mrps.purchage_price',
        //         'color_codes.color',
        //         'color_codes.color_code'
        //     )->where('model_code', "=", $request->model_code)
        //     ->get();
        return response()->json(['mrp' => $mrp, 'color' => $color]);
        // dd($mrp);
        // return response()->json($mrp);
    }
    public function purchage_list_index()
    {
        return view('dms.purchage.purchage_list');
    }
    public function purchage_list()
    {
        $purchages = Purchage::select('id', 'challan_no', 'purchage_date', 'vendor', 'purchage_value', 'dealer_name', 'quantity')->whereYear('purchage_date', '>', '2020')->orderBy('id', 'desc')->get();
        return response()->json($purchages);
    }
    public function purchage_details($id)
    {
        $purchages = Purchage::select('id', 'challan_no', 'purchage_date', 'vendor', 'purchage_value', 'dealer_name', 'quantity')->where('id', $id)->first();

        $purchage_details = Core::rightJoin('vehicles', 'vehicles.model_code', '=', 'cores.model_code')
            ->select(
                'cores.id',
                'cores.model_code',
                'cores.five_chassis',
                'cores.five_engine',
                'cores.unit_price',
                'cores.unit_price_vat',
                'cores.vat_purchage_mrp',
                'cores.vat_year_purchage',
                'cores.purchage_price',
                'vehicles.model'
            )
            ->where('store_id', "=", $id)
            ->get();

        // $purchage_details = Core::select('id', 'model_code', 'five_chassis', 'five_engine', 'unit_price', 'unit_price_vat', 'vat_purchage_mrp', 'vat_year_purchage', 'purchage_price')->where('store_id', $id)->get();
        // dd($purchage_details);
        return view('dms.purchage.purchage_details')->with(['purchages' => $purchages, 'purchage_details' => $purchage_details]);
    }
}
