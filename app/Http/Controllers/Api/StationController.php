<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Station;
use Response;


class StationController extends Controller
{
    public function list(){
        $all = Station::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $station = new Station;
        $station->station_tr = $request->station_tr;
        $station->station_en = $request->station_en;
    
        $station->save();

        return ["Result"=>"Success"];
    }
}
