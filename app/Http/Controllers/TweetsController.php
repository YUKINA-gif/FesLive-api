<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TweetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get()
    {
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        $now = Carbon::now();
        $data = \Twitter::get('statuses/home_timeline', [
            //  リプライを含めない
            "exclude_replies" => "true",
            //  リツイートを含めない
            "include_rts" => "false",
        ]);

        foreach ($data as $tweet) {
            $tweet_data = new Tweet;

            $tweet_data->name = $tweet->user->name;
            $tweet_data->text = $tweet->text;
            $tweet_data->url = $tweet->user->url;
            $tweet_data->created_at = $now;
            $tweet_data->save();

            return response()->json([
                "message" => $tweet_data
            ], 200);
        }
    }
}
