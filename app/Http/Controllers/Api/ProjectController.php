<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Projects;
use Response;
use Illuminate\Support\Str;


class ProjectController extends Controller
{
    public function list(){
        $all = Projects::get();

        return Response::json($all);
    }


    public function add(Request $request){
        $news = new Projects;
        $news->title_tr = $request->title_tr;
        $news->title_en = $request->title_en;
        $news->content_tr = $request->content_tr;
        $news->content_en = $request->content_en;


        $image = $request->file('image');
        if($request->hasFile('image')){
            $newname = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/uploads/project'),$newname);
        }
        else{
            return response()->json('error, not image');
        }
        
        $news->image = $newname;

        

        // $images = $request->file('image');
        // $imageNames = '';

        // foreach ($images as $image) {
        //     $newname = Str::random(8) . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('/uploads/project'), $newname);
        //     $imageNames .= $newname . ',';
        // }

        // $imageNames = rtrim($imageNames, ',');

        // $news->image = $imageNames;
        $news->save();

        return ["Result" => "Success"];

        
    }
}
