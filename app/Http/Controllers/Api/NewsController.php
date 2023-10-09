<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Response;

class NewsController extends Controller
{
    public function list(){
        $all = News::get();

        return Response::json($all);
    }



    public function add(Request $request){
        $news = new News;
        $news->title_tr = $request->title_tr;
        $news->title_en = $request->title_en;
        $news->description_tr = $request->description_tr;
        $news->description_en = $request->description_en;
        $news->content_tr = $request->content_tr;
        $news->content_en = $request->content_en;
        $news->image = $request->image;
    
        $news->save();

        return ["Result"=>"Success"];
    }
}
