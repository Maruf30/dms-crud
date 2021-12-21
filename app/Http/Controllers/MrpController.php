<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mrp;
use DB;

class MrpController extends Controller
{
    public function mrp_get()
    {
        $MrpData = Mrp::all();
        // dd($MrpData);

        return view('dms.mrp.mrp', ['MrpDatas' => $MrpData]);
    }
    public function mrp_add_two(Request $request)
    {
        Mrp::create($request->all());
        return response()->json([
            'status' => 200,
        ]);

        // dd($request->all());
    }
    public function mrp_update_two(Request $request)
    {
        // $update = [
        //     'model_code'           =>  $request->model_code,
        //     'Model'            =>  $request->Model,
        //     'MRP'  =>  $request->MRP,
        //     'VATMRP'          =>  $request->VATMRP,
        //     'SaleVat'          =>  $request->SaleVat,
        //     'Commission'   =>  $request->Commission,
        //     'TR'         =>  $request->TR,
        //     'PurchagePrice'         =>  $request->PurchagePrice,
        //     'ReabateBasic'         =>  $request->ReabateBasic,
        //     'Reabate'         =>  $request->Reabate,
        //     'VATPurchageMRP'         =>  $request->VATPurchageMRP,

        // ];

        // DB::table('mrps')->where('model_code', $request->model_code)->update($update);
        // dd($request->all());
        Mrp::whereModelCode($request->model_code)->update($request->all());
        return response()->json(['status' => 200]);

        // return redirect('first-team');
        // return view('dms.mrpedit', ['mrpDatas' => $mrpEditData]);
    }
    public function mrp_delete(Request $request)
    {
        // dd($request->model_code);
        Mrp::whereModelCode($request->model_code)->delete();
        return response()->json(['status' => 200]);
    }
}
