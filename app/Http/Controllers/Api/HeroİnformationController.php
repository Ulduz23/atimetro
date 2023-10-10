<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Heroİnformation;
use Response;

class HeroİnformationController extends Controller
{
    public function list(){
        $all = Heroİnformation::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $info = new Heroİnformation;
        $info->title_tr = $request->title_tr;
        $info->title_en = $request->title_en;
    
        $info->save();

        return ["Result"=>"Success"];
    }
}
