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
        $tweet = Tweet::
        where('text', 'like', '%' . "先行" . '%')
        ->orWhere('text', 'like', '%' . "開催決定" . '%')
        ->orWhere('text', 'like', '%' . "グッズ" . '%')
        ->orWhere('text', 'like', '%' . "発表" . '%')
        ->orderBy('created_at', 'desc')->get();

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
