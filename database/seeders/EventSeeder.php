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
            "image" => "https://pbs.twimg.com/profile_images/1368759336034439170/aoIxfmNm.jpg",
            "address" => "京都府宇治市広野町八軒屋谷１",
            "event_start_date" => "2021-07-03",
            "event_2_date" => "2021-07-04",
            "event_3_date" => "2021-07-10",
            "event_last_date" => "2021-07-11",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "RUSH BALL",
            "tw_account" => "RUSH_BALL",
            "image" => "https://pbs.twimg.com/profile_images/1344910758719541248/MfcaWJ1N.jpg",
            "address" => "大阪府泉大津市夕凪町泉大津フェニックス多目的広場",
            "event_start_date" => "2021-08-28",
            "event_last_date" => "2021-08-29",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "ROCK IN JAPAN FESTIVAL",
            "tw_account" => "rockinon_fes",
            "image" => "http://pbs.twimg.com/profile_images/1402096348485218324/R28q_FKN.jpg",
            "address" => "茨城県ひたちなか市馬渡字大沼605-4",
            "event_start_date" => "2021-08-07",
            "event_2_date" => "2021-08-08",
            "event_3_date" => "2021-08-09",
            "event_4_date" => "2021-08-14",
            "event_last_date" => "2021-08-15",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "FM802 RADIO CRAZY",
            "tw_account" => "FM802RADIOCRAZY",
            "image" => "https://pbs.twimg.com/profile_images/1324683656594481152/UsDXRqDY.jpg",
            "address" => "大阪府大阪市住之江区南港北1丁目5-102",
            "event_start_date" => "2021-12-26",
            "event_last_date" => "2021-12-27",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "MONSTER baSH",
            "tw_account" => "MONSTERbaSH_",
            "image" => "https://pbs.twimg.com/profile_images/1278980516989960192/fgkYgyoe.jpg",
            "address" => "香川県仲多度郡まんのう町吉野4243-12",
            "event_start_date" => "2021-08-21",
            "event_2_date" => "2021-08-22",
            "event_last_date" => "2021-08-28",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "WILD BUNCH FEST.",
            "tw_account" => "WildBunchFest",
            "image" => "https://pbs.twimg.com/profile_images/1048200166480609280/30sqYalX.jpg",
            "address" => "山口県山口市阿知須山口きらら博記念公園",
            "event_start_date" => "2020-09-19",
            "event_2_date" => "2020-09-20",
            "event_last_date" => "2020-09-21",
        ];
        DB::table("events")->insert(
            $param
        );
    }
}
