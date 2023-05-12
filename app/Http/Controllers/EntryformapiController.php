<?php

namespace App\Http\Controllers;
use App\Models\zetra;
use Illuminate\Http\Request;

class EntryformapiController extends Controller
{
    //
    function add(Request $req)
    {
        $zetra=new zetra;
        $zetra->name_of_the_user=$req->name;
        $zetra->email=$req->email;
        $zetra->password=$req->password;
        $result=$zetra->save();
        return ["result"=>"yupee"];
    }
}
