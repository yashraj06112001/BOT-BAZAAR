<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\zetra;

class logincontroller extends Controller
{
    //
    public function login(Request $request)
    {
        $user = zetra::where('name_of_the_user', $request->name)
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();
        if ($user) {
            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'Invalid credentials']);
        }
    }
}
