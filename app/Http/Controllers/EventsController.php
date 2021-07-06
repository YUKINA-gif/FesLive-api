<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

/**
 * [API]ホームタイムライン取得API class
 * 
 * ホームタイムラインに関するコントローラー
 * ホームタイムライン情報の取得、保存
 * 
 * @access public
 * @author Nakanishi Yukina
 * @category User
 * @package Controller
 */
class EventsController extends Controller
{
    /**
     * [GET]イベント情報を取得
     *
     *イベント情報を取得する
     * 
     * @access public
     * @param Request $request リクエストパラメータ
     * @return Response イベント情報を取得、もしくは404で返す
     * @var string $events イベント情報
     */
    public function get()
    {
        $events = Event::all();

        if ($events) {
            return response()->json([
                "message" => "Get events successfully",
                "events" => $events
            ], 200);
        } else {
            return response()->json([
                "message" => "Not found"
            ], 404);
        }
    }

    /**
     * [POST]イベント情報を保存する
     *
     *イベント情報を保存する
     * 
     * @access public
     * @param Request $request リクエストパラメータ
     * @return Response  イベント情報を保存、もしくは404で返す
     * @var array $event  新規レコード
     * @var array $save_event イベント情報を保存する
     */
    public function post(Request $request)
    {
        $event = new Event();
        // バリデーション設定
        $request->validate([
            "name" => ['required', 'string'],
            "tw_account" => ['required', 'string'],
            "image" => ['required'],
            "address" => ['required', 'string'],
            "event_start_date" => ['required', 'date'],
            "event_2_date" => ['date'],
            "event_3_date" => ['date'],
            "event_4_date" => ['date'],
            "event_last_date" => ['required', 'date']
        ]);

        $save_event = $event->fill([
            "name" => $request->name,
            "tw_account" => $request->tw_account,
            "image" => $request->image,
            "address" => $request->address,
            "event_start_date" => $request->event_start_date,
            "event_2_date" => $request->event_2_date,
            "event_3_date" => $request->event_3_date,
            "event_4_date" => $request->event_4_date,
            "event_last_date" => $request->event_last_date,
        ])->save();

        if ($save_event) {
            return response()->json([
                "message" => "Event created successfully",
            ], 200);
        } else {
            return response()->json([
                "message" => "Could not process normally",
            ], 404);
        }
    }

    public function put(Request $request)
    {
        /**
         * [PUT]イベント情報を更新する
         *
         *イベント情報を更新する
         * 
         * @access public
         * @param Request $request リクエストパラメータ
         * @return Response  イベント情報を更新、もしくは404で返す
         * @var array $update_data  更新データ
         * @var array $event イベント情報を更新する
         */
        // バリデーション設定
        $request->validate([
            "name" => ['required', 'string'],
            "tw_account" => ['required', 'string'],
            "image" => ['required'],
            "address" => ['required', 'string'],
            "event_start_date" => ['required', 'date'],
            "event_2_date" => ['date'],
            "event_3_date" => ['date'],
            "event_4_date" => ['date'],
            "event_last_date" => ['required', 'date']
        ]);

        $update_data = [
            "name" => $request->name,
            "tw_account" => $request->tw_account,
            "image" => $request->image,
            "address" => $request->address,
            "event_start_date" => $request->event_start_date,
            "event_2_date" => $request->event_2_date,
            "event_3_date" => $request->event_3_date,
            "event_4_date" => $request->event_4_date,
            "event_last_date" => $request->event_last_date,
        ];

        $event = Event::where("id", $request->id)->update($update_data);

        if ($event) {
            return response()->json([
                "message" => "Event updated successfully",
            ], 200);
        } else {
            return response()->json([
                "message" => "Could not process normally",
            ], 404);
        }
    }

    public function search(Request $request)
    {
        /**
         * [GET]アカウントを探す
         *
         *アカウントを探す
         * 
         * @access public
         * @param Request $request リクエストパラメータ
         * @return Response  アカウントを取得、もしくは404で返す
         * @var string $keyword  検索キーワード
         * @var array $search アカウントを探して10件取得する
         */
        $keyword = $request->keyword;

        $search = \Twitter::get('users/search', [
            "q" => $keyword,
            "count" => 10
        ]);

        if ($search) {
            return response()->json([
                "message" => "Get account successfully",
                "account" => $search
            ], 200);
        } else {
            return response()->json([
                "message" => "Not found"
            ], 404);
        }
    }
}
