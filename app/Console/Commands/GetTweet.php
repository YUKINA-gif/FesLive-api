<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Tweet;
use Carbon\Carbon;

class GetTweet extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:tweet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Twitterタイムライン取得';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $now = Carbon::now();
        // タイムライン投稿取得
        $data = \Twitter::get('statuses/home_timeline', [
            //  リプライを含めない
            "exclude_replies" => "true",
            //  リツイートを含めない
            "include_rts" => "false",
        ]);

        $data_count = count($data);

        for ($i = 0; $i < $data_count; $i++) {
            $tweet_data = new Tweet;
            $tweet = $data[$i];

            $tweet_data->tweet_id = $tweet->id;
            $tweet_data->name = $tweet->user->name;
            $tweet_data->text = $tweet->text;
            $tweet_data->url = $tweet->user->url;
            $tweet_data->image = $tweet->user->profile_image_url_https;
            $tweet_data->created_at = $tweet->created_at;

            if (!Tweet::where("tweet_id", $tweet->id)->exists()) {
                $tweet_data->save();
            }
        }

        \Slack::send("ツイートを正常に取得しました。");
    }
}
