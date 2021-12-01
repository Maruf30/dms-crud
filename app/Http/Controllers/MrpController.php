<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mrp;
use DB;

class MrpController extends Controller
{
    public function index()
    {
        $MrpData = Mrp::all();
        // dd($MrpData);

        return view('dms.mrp', ['MrpDatas' => $MrpData]);
    }
    public function add(Request $request)
    {
        dd($request->all());
    }
    public function mrp_update(Request $request)
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
        // // dd($update);
        // DB::table('mrps')->where('model_code', $request->model_code)->update($update);
        Mrp::whereModelCode($request->model_code)->update($request->all());
        return redirect()->back()->with('success', 'All Field Has been update successfully!');

        // return redirect('first-team');
        // return view('dms.mrpedit', ['mrpDatas' => $mrpEditData]);
    }
}
