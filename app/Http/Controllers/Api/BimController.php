<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bim;
use App\Models\Bimimages;
use Response;

class BimController extends Controller
{
    public function list(){
        $all = Bim::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $bim = new Bim;
        $bim->about_tr = $request->about_tr;
        $bim->about_en = $request->about_en;

        $image = $request->file('image');
        if($request->hasFile('image')){
            $newname = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/bim'),$newname);
        }
        else{
            return response()->json('error, not image');
        }
        $bim->image = $newname; 

        $video = $request->file('video');
        if($request->hasFile('video')){
            $newvideo = time().'.'.$video->getClientOriginalExtension();
            $video->move(public_path('/uploads/project'),$newvideo);
        }
        else{
            return response()->json('error, not video');
        }
        
        $bim->video = $newvideo;   
        
        
        $bim->save();

        return ["Result"=>"Success"];
    }

    public function imgs(){
        $all = Bimimages::get();

        return Response::json($all);
    }

    public function imgadd(Request $request){
        $bim = new Bimimages;

        $image = $request->file('image');
        if($request->hasFile('image')){
            $newname = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/bim'),$newname);
        }
        else{
            return response()->json('error, not image');
        }
        $bim->image = $newname; 
        
        
        $bim->save();

        return ["Result"=>"Success"];
    }
}
