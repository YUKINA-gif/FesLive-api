<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{
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
