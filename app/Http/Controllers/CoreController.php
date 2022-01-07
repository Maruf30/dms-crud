<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core;

class CoreController extends Controller
{

    public function show($chassis)
    {
        $core = Core::select("*")->where("five_chassis", "=", $chassis)->get();
        return view('dms.customerInfo', ['cores' => $core]);
    }
    public function customerInfoFullChassis($chassis)
    {
        $core = Core::select("*")->where("ChassisNo", "=", $chassis)->get();
        return view('dms.customerInfoFullChassis', ['cores' => $core]);
    }
    public function chassisSearch(Request $request)
    {
        $core = Core::select("*")->where("five_chassis", "=", $request->chassis)->get();
        return view('dms.customerInfo', ['cores' => $core]);
    }
    // public function chassisSearch(Request $request)
    // {
    //     $core = Core::rightJoin('vehicles', 'vehicles.ModelCode', '=', 'cores.ModelCode')
    //         ->select('cores.VendorName', 'cores.ChassisNo', 'cores.EngineNo', 'cores.CustomerName', 'vehicles.*')
    //         ->where('cores.Stage', "=", 20102021)
    //         ->get();

    //     dd($core);        
    // }
    public function searchChassisList(Request $request)
    {
        $core = Core::select("ChassisNo", "EngineNo")->where("five_chassis", "=", $request->chassis)->get();
        return view('dms.searchChassisList', ['cores' => $core]);
    }
    public function mobileSearch(Request $request)
    {
        $core = Core::select("*")->where("Mobile", "=", $request->mobile)->get();
        return view('dms.customerInfo', ['cores' => $core]);
    }
    public function engineSearch(Request $request)
    {
        $core = Core::select("*")->where("five_engine", "=", $request->engine)->get();
        return view('dms.customerInfo', ['cores' => $core]);
    }
}
