<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use Response;

class GalleryController extends Controller
{
    public function list(){
        $all = Gallery::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $gallery = new Gallery;

        $image = $request->file('image');
        if($request->hasFile('image')){
            $newname = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/gallery'),$newname);
        }
        else{
            return response()->json('error, not image');
        }
        
        $gallery->image = $newname;
        $gallery->save();

        return ["Result"=>"Success"];
    }
}
