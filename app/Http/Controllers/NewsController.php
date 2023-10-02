<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use Response;

class NewsController extends Controller
{
    public function list(Request $request){
        $lang = $request->segment(1); 

        if ($lang === 'tr') {
            $all = News::select('id',
            'title_tr as title_tr',
            'description_tr as description_tr',
            'content_tr as content_tr', 
            'status', 
            'created_at',
            'updated_at')
            ->get();
        } else {
            $all = News::select('id',
            'title_en as title_en',
            'description_en as description_en',
             'content_en as content_en', 'status', 
             'created_at',
             'updated_at')
             ->get();
        }

        return response()->json($all);
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
