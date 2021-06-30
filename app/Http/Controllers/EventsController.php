<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function get(Request $request)
    {
        $data = \Twitter::get('statuses/home_timeline', [
            //  リプライを含めない
            "exclude_replies" => "true",
            //  リツイートを含めない
            "include_rts" => "false",
        ]);
        foreach ($data as $tweet) {     
              return response()->json([
                $tweet
            ], 200);
        }
        
    }

    public function post(Request $request)
    {
        $data = \Twitter::post('friendships/create', [
            "screen_name" => $request->name,
            "follow" => "true"
        ]);

        return response()->json([
            "data" => $data
        ], 200);
    }

    public function put(Request $request)
    {
        $data = \Twitter::get('followers/ids', ["screen_name"]);

        return response()->json([
            "data" => $data
        ], 200);
    }

    public function delete(Request $request)
    {
        $data = \Twitter::get('followers/ids', ["screen_name"]);

        return response()->json([
            "data" => $data
        ], 200);
    }
}
