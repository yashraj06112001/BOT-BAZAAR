<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class yescontroller extends Controller
{
    //
    function yes()
    {
        return response()->json([
            'success'=>true
        ]);

        
    }
}
