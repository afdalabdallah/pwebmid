<?php

namespace App\Http\Controllers;

use App\Http\Services\BuildingService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BuildingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getBuildingData($b_id)
    {
        $getTable = new BuildingService();
        $buildingData = $getTable->getDetail($b_id);
        return view('detail_gedung')->with(["buildingData" => $buildingData]);
    }

    public function UpdateBuildingData($b_id)
    {
        $getTable = new BuildingService();
        $buildingData = $getTable->getDetail($b_id);
        return view('update')->with(["buildingData" => $buildingData]);
    }
}
