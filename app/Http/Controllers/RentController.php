<?php

namespace App\Http\Controllers;

use App\Http\Services\RentService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
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
    public function getRentData($id_user)
    {
        $getTable = new RentService();
        $rentData = $getTable->getData($id_user);
        return ($rentData);
        //return view
    }

    public function getRentDetail($id)
    {
        $getTable = new RentService();
        $rentDetail = $getTable->getDetail($id);
        return ($rentDetail);
        //return view

    }

    public function insertRent()
    {
        $rentService = new RentService();
        $requestData = [
            'user_id' => Auth::id(),
            'building_id' => Request()->building_id,
            'start_time' => Request()->start_time,
            'end_time' => Request()->end_time
        ];
        $rentService->insertData($requestData);
        //return view
    }

    public function updateRent($id)
    {
        $getTable = new RentService();
        $requestData = [
            'building_id' => Request()->building_id,
            'start_time' => Request()->start_time,
            'end_time' => Request()->end_time,
            'total_price' => '',
            'updated_at' => Carbon::now()->toDateTimeString()
        ];

        $getTable->updateData($id, $requestData);
        //return view;
    }

    public function deleteRent($id)
    {
        $getTable = new RentService();
        $getTable->deleteData($id);
        //return view
    }
}
