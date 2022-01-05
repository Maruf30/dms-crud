<?php

namespace App\Http\Controllers;

use App\Models\Mrp;
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
        dd($request->all());
    }
}
