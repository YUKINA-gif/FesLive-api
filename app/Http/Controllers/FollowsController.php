<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Follow;

class FollowsController extends Controller
{
  public function post(Request $request)
  {
    // データがあるか調べる
    $seach_follow =
      Follow::where("event_id", $request->event_id)->withTrashed()->first();

    // なければ登録
    if (!$seach_follow) {
      $tw_account = $request->tw_account;
      $follow = \Twitter::post('friendships/create', ['screen_name' => $tw_account]);

      $data = new Follow;
      $data->fill([
        "event_id" => $request->event_id
      ])->save();


      if ($follow && $data) {
        return response()->json([
          "message" => "Followed successfully"
        ], 200);
      } else {
        return response()->json([
          "message" => "Not found"
        ], 404);
      }
      // データがあり、削除されていれば復元する 
    } elseif ($seach_follow->trashed()) {

      $tw_account = $request->tw_account;
      $follow = \Twitter::post('friendships/create', ['screen_name' => $tw_account]);

      $restored = $seach_follow->restore();
      if ($follow && $restored) {
        return response()->json([
          "message" => "Follow restored successfully"
        ], 200);
      } else {
        return response()->json([
          "message" => "Not found"
        ], 404);
      }
      // そうでなければ削除する
    } else {
      $tw_account = $request->tw_account;
      $follow = \Twitter::post('friendships/destroy', ['screen_name' => $tw_account]);

      $data = $seach_follow->delete();
      if ($follow && $data) {
        return response()->json([
          "message" => "Follow deleted successfully"
        ], 200);
      } else {
        return response()->json([
          "message" => "Not found"
        ], 404);
      }
    }
  }

  public function destroy(Request $request)
  {
    $tw_account = $request->tw_account;
    $follow = \Twitter::post('friendships/destroy', ['screen_name' => $tw_account]);

    return response()->json([
      $follow
    ], 200);
  }
}
