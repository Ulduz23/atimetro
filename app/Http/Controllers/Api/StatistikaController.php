<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistika;
use Response;

class StatistikaController extends Controller
{
    public function list(){
        $all = Statistika::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $stat = new Statistika;
        $stat->title_tr = $request->title_tr;
        $stat->title_en = $request->title_en;
        $stat->number = $request->number;
    
        $stat->save();

        return ["Result"=>"Success"];
    }
}
