<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function pb(Request $request)
    {
        $level = 51;
        $version = $request->input('version');//request

        return view('pb',[
        'ver' => $version,
        'level' => $level
    ]);
    }
}
