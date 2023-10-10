<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Socialmedia;
use Response;

class SocialmediaController extends Controller
{
    public function list(){
        $all = Socialmedia::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $news = new Socialmedia;
        $news->facebook = $request->facebook;
        $news->twitter = $request->twitter;
        $news->instagram = $request->instagram;
        $news->youtube = $request->youtube;
    
        $news->save();

        return ["Result"=>"Success"];
    }
}
