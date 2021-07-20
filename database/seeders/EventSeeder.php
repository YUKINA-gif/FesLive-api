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
            "city_name" => "kyoto",
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
            "city_name" => "osaka",
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
            "city_name" => "ibaraki",
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
            "city_name" => "osaka",
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
            "city_name" => "kagawa",
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
            "image" => "https://pbs.twimg.com/profile_images/1414782157428453379/hvJ-1T_-.jpg",
            "address" => "山口県山口市阿知須山口きらら博記念公園",
            "city_name" => "yamaguchi",
            "event_start_date" => "2021-09-18",
            "event_2_date" => "2021-09-19",
            "event_last_date" => "2021-09-20",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "イナズマロック フェス 2021",
            "tw_account" => "irf_official",
            "image" => "https://pbs.twimg.com/profile_images/1325709784503386113/nnOGb6Ef.jpg",
            "address" => "滋賀県草津市下物町1091",
            "city_name" => "shiga",
            "event_start_date" => "2021-09-18",
            "event_last_date" => "2021-09-19",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "NUMBER SHOT",
            "tw_account" => "NUMBERSHOT_",
            "image" => "http://pbs.twimg.com/profile_images/1397115642579329027/xxE-2E85.jpg",
            "address" => "福岡県福岡市中央区地行浜2丁目2-2",
            "city_name" => "fukuoka",
            "event_start_date" => "2021-07-17",
            "event_last_date" => "2021-07-18",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "METROCK",
            "tw_account" => "METROCK_pr",
            "image" => "https://pbs.twimg.com/profile_images/1391589004320002052/yWXm3jTH.jpg",
            "address" => "東京都江東区新木場・若洲公園&大阪府堺市堺区匠町6-1",
            "city_name" => "tokyo",
            "event_start_date" => "2021-05-15",
            "event_last_date" => "2021-05-16",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "VIVA LA ROCK",
            "tw_account" => "vivarockjp",
            "image" => "https://pbs.twimg.com/profile_images/1371297440398077963/HiYeiO-J.jpg",
            "address" => "埼玉県さいたま市中央区新都心８",
            "city_name" => "saitama",
            "event_start_date" => "2021-05-01",
            "event_2_date" => "2021-05-02",
            "event_3_date" => "2021-05-03",
            "event_4_date" => "2021-05-04",
            "event_last_date" => "2021-05-05",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "MERRY ROCK PARADE",
            "tw_account" => "merryrockparade",
            "image" => "https://pbs.twimg.com/profile_images/1301998082939379720/nXnwhQP2.jpg",
            "address" => "名古屋県名古屋市港区金城ふ頭二丁目二番地",
            "city_name" => "nagoya",
            "event_start_date" => "2020-12-19",
            "event_last_date" => "2020-12-20",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "RISING SUN ROCK FESTIVAL",
            "tw_account" => "rsrfes_official",
            "image" => "https://pbs.twimg.com/profile_images/1363716661115637760/Z6Gcdkbr.jpg",
            "city_name" => "hokkaido",
            "address" => "北海道石狩市新港中央1丁目",
            "event_start_date" => "2021-08-13",
            "event_last_date" => "2021-08-14",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "SUPERSONIC",
            "tw_account" => "summer_sonic",
            "image" => "https://pbs.twimg.com/profile_images/1399199736939220994/xqOp_GBA.jpg",
            "city_name" => "chiba",
            "address" => "千葉県千葉市美浜区美浜1",
            "event_start_date" => "2021-09-18",
            "event_last_date" => "2021-09-19",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "SWEET LOVE SHOWER",
            "tw_account" => "sls_sstv",
            "image" => "https://pbs.twimg.com/profile_images/1397477944235159560/Nbix7ZHj.jpg",
            "address" => "山梨県南都留群山中湖村平野479-2",
            "city_name" => "yamanashi",
            "event_start_date" => "2021-08-27",
            "event_2_date" => "2021-08-28",
            "event_last_date" => "2021-08-29",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "DEAD POP FESTiVAL",
            "tw_account" => "DEADPOP_FEST",
            "image" => "https://pbs.twimg.com/profile_images/1382979625320550407/kcLltt2N.jpg",
            "address" => "神奈川県川崎市川崎区東扇島58-1",
            "city_name" => "kanagawa",
            "event_start_date" => "2021-06-26",
            "event_last_date" => "2021-06-27",
        ];
        DB::table("events")->insert(
            $param
        );

        $param = [
            "name" => "FUJI ROCK FESTIVAL",
            "tw_account" => "fujirock_jp",
            "image" => "https://pbs.twimg.com/profile_images/1382880265115082756/Q70H7Jno.jpg",
            "address" => "新潟県南魚沼郡湯沢町三国202",
            "city_name" => "niigata",
            "event_start_date" => "2021-08-20",
            "event_2_date" => "2021-08-21",
            "event_last_date" => "2021-08-22",
        ];
        DB::table("events")->insert(
            $param
        );
    }
}
