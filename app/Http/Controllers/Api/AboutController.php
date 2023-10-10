<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Response;

class AboutController extends Controller
{
    public function list(){
        $all = About::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $about = new About;
        $about->title_tr = $request->title_tr;
        $about->title_en = $request->title_en;
        $about->desc_tr = $request->desc_tr;
        $about->desc_en = $request->desc_en;
        $about->content_tr = $request->content_tr;
        $about->content_en = $request->content_en;

        $image = $request->file('image');
        if($request->hasFile('image')){
            $newname = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/about'),$newname);
        }
        else{
            return response()->json('error, not image');
        }
        
        $about->image = $newname;
        $about->save();

        return ["Result"=>"Success"];
    }
}
