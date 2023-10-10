<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Docs;
use Response;


class DocsController extends Controller
{
    public function list(){
        $all = Docs::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $docs = new Docs;

        $image = $request->file('image');
        if($request->hasFile('image')){
            $newname = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/docs'),$newname);
        }
        else{
            return response()->json('error, not image');
        }
        $docs->image = $newname; 

        $docs->save();

        return ["Result"=>"Success"];
    }
}
