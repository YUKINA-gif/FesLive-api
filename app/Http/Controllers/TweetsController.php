<?php

namespace App\Http\Controllers;

use App\Models\Tweet;

/**
 * [API]DB(tweets)表示API class
 * 
 * ツイート表示に関するコントローラー
 * DBに保存したツイート情報の表示
 * 
 * @access public
 * @author Nakanishi Yukina
 * @category User
 * @package Controller
 */
class TweetsController extends Controller
{
    /**
     * [GET]ツイート情報の表示
     *
     *　ツイート情報を表示する
     * 
     * @access public
     * @return Response  ツイート情報を表示、ない場合は404で返す
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
