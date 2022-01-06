<?php

namespace App\Http\Controllers;

use App\Models\Core;
use App\Models\Mrp;
use App\Models\Purchage;
use App\Models\Supplier;
use Illuminate\Http\Request;

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
        $input_data = $request->all();
        // $input_data = count($request->all());

        $mc_purchage = new Purchage();
        $mc_purchage->challan_no = $input_data['challan_no'];
        $mc_purchage->purchage_date = $input_data['purchage_date'];
        $mc_purchage->vendor = $input_data['vendor'];
        $mc_purchage->purchage_value = $input_data['purchage_value'];
        // $mc_purchage->uml_mushak_no = $input_data['uml_mushak_no'];
        // $mc_purchage->uml_mushak_date = $input_data['uml_mushak_date'];
        // $mc_purchage->save();

        $purchage_id = $mc_purchage->id;

        $core_data = new Core();




        // foreach ($input_data as $key => $value) {
        //     if (strpos($key, 'core_') !== false) {
        //         $core_data->purchage_id = $purchage_id;
        //         $core_data->mrp_id = $value;
        //         $core_data->save();
        //     }
        // }


        // foreach ($input_data as $key => $value) {           
        // echo $key . '<br>';

        // $core_data->store_id = $purchage_id;          
        // $core_data->model_code = $value['model_code'];
        // dd($core_data->model_code);
        // $core_data->model = $input_data['model'][$key];
        // $core_data->quantity = $input_data['quantity'][$key];
        // $core_data->price = $input_data['price'][$key];
        // $core_data->save();
        // }
    }
    public function get_mrp(Request $request)
    {
        $mrp = Mrp::select('mrp', 'vat_mrp', 'vat_purchage_mrp', 'purchage_price')->where('model_code', $request->model_code)->first();
        return response()->json($mrp);
    }
}
