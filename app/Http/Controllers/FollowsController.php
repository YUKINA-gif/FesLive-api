<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowsController extends Controller
{
    public function index(Request $request)
    {
        $data =
            \Twitter::get('statuses/home_timeline',[
            //  リプライを含めない
            "exclude_replies" => "true",
            //  リツイートを含めない
            "include_rts" => "false",
            ]);

        
        return response()->json([
            "data" => $data
        ], 200);
    }
}
