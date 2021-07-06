<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            "name" => "京都大作戦",
            "tw_account" => "MI_KYOTO",
            "image" => "https://pbs.twimg.com/profile_images/1368759336034439170/aoIxfmNm_normal.jpg",
            "address" => "京都府宇治市広野町八軒屋谷１",
            "event_start_date" => "2021-07-03",
            "event_2_date" => "2021-07-04",
            "event_3_date" => "2021-07-10",
            "event_last_date" => "2021-07-11",
        ];
        DB::table("events")->insert(
            $param
        );
    }
}
