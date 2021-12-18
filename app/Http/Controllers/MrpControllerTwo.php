<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mrp;
use DB;

class MrpControllerTwo extends Controller
{
    public function mrp_get_two()
    {
        $MrpData = Mrp::all();
        // dd($MrpData);

        return view('dms.mrp.mrp-two', ['MrpDatas' => $MrpData]);
    }
    public function mrp_add(Request $request)
    {
        Mrp::create($request->all());
        return redirect()->back()->with('success', 'All Field Has been added successfully!');

        // dd($request->all());
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

        // DB::table('mrps')->where('model_code', $request->model_code)->update($update);
        Mrp::whereModelCode($request->model_code)->update($request->all());
        return redirect()->back()->with('success', 'All Field Has been update successfully!');

        // return redirect('first-team');
        // return view('dms.mrpedit', ['mrpDatas' => $mrpEditData]);
    }
    public function mrp_delete(Request $request)
    {
        // dd($request->model_code);
        Mrp::whereModelCode($request->model_code)->delete();
        return redirect()->back()->with('success', 'Deletion Operation successfull!');
    }
}
