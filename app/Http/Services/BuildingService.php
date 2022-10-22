<?php

namespace App\Http\Services;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class BuildingService
{
    public static function getData()
    {
        $tableData = DB::table('building');
        $tableData = $tableData->get();
        return (['buldingData' => $tableData]);
    }

    public static function getDetail($id)
    {
        $tableData = DB::table('building')->where('id', $id);
        $tableData = $tableData->get();
        return (['buldingData' => $tableData]);
    }

    public static function insertData($requestData)
    {
        $table = DB::table('building');
        $id = IdGenerator::generate([
            'table' => 'building',
            'length' => 5,
            'prefix' => 'B'
        ]);

        $data = [
            'id' => $id,
            'name' => $requestData['name'],
            'address' => $requestData['address'],
            'area' => $requestData['area'],
            'price' => $requestData['price'],
            'status' => $requestData['status'],
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString()
        ];
        $table->insert($data);
    }

    public static function updateData($id, $requestData)
    {
        DB::table('building')->where('id', '=', $id)->update($requestData);
    }

    public static function deleteData($id)
    {
        DB::table('building')->where('id', '=', $id)->delete();
    }
}
