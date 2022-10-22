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
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getBuildingData()
    {
        $getTable = new BuildingService();
        $buildingData = $getTable->getData();
        return ($buildingData);
    }
}
