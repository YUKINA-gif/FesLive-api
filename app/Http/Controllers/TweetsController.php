<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
        $tweet = Tweet::orderBy('created_at', 'desc')->get();

        if ($tweet) {
            return response()->json([
                "tweet" => $tweet
            ], 200);
        } else {
            return response()->json([
                "message" => "Not found"
            ], 404);
        }
    }
}
