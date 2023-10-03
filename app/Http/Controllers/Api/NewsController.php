<?php

namespace App\Http\Controllers;

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
        $news->title = $request->title;
        $news->description = $request->description;
        $news->content = $request->content;
        $news->image = $request->image;
    
        $news->save();

        return ["Result"=>"Success"];
    }
}
