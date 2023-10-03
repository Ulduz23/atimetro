<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactinfo;
use Response;

class ContactController extends Controller
{
    public function list(){
        $all = Contactinfo::get();

        return Response::json($all);
    }

    public function add(Request $request){
        $contact = new Contactinfo;
        $contact->adress = $request->adress;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
    
        $contact->save();

        return ["Result"=>"Success"];
    }
}
