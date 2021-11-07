<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mrp;

class MrpController extends Controller
{
    public function index()
    {
        $MrpData = Mrp::all();
        // dd($MrpData);

        return view('dms.tblMRP', ['MrpDatas' => $MrpData]);
    }
}
