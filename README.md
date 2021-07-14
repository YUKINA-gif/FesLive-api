# FesLive API

イベント情報取得APIです。

## バージョン

-   PHP 7.4.15
-   Laravel 8.4
-   MySQL 8.0

## テーブル設計
|events  |　|　|　|　|　|
| --- | --- |--- |--- |--- |--- |
| カラム名 | 型 | PRIMARY KEY |UNIQUE KEY |NOT NULL |FOREIGN KEY |
| id | unsigned bigint |○ | |○ | |
| name | varchar | ||○| | |
| tw_account | varchar | ||○| | |
| image | varchar | ||○| | |
| address | varchar | ||○| | |
| city_name | varchar | ||○| | |
| event_start_date | varchar | ||○| | |
| event_2_date | varchar | ||| | |
| event_3_date | varchar | ||| | |
| event_4_date | varchar | ||| | |
| event_last_date | varchar | ||○| | |
| created_at | timestamp | ||| | |
| updated_at | timestamp | ||| | |

|follows  |　|　|　|　|　|
| --- | --- |--- |--- |--- |--- |
| カラム名 | 型 | PRIMARY KEY |UNIQUE KEY |NOT NULL |FOREIGN KEY |
| id | unsigned bigint |○ | |○ | |
| event_id | int | ||○| | |
| is_follow | boolean | ||○| | |
| created_at | timestamp | ||| | |
| updated_at | timestamp | ||| | |

|tweets  |　|　|　|　|　|
| --- | --- |--- |--- |--- |--- |
| カラム名 | 型 | PRIMARY KEY |UNIQUE KEY |NOT NULL |FOREIGN KEY |
| id | unsigned bigint |○ | |○ | |
| tweet_id | varchar | ||○| | |
| name | varchar | ||○| | |
| image | varchar | ||○| | |
| text | varchar | ||○| | |
| created_at | varchar | ||| | |
| updated_at | varchar | ||| | |


## API設計
<img src="https://yn-portfolio.s3.ap-northeast-3.amazonaws.com/feslive-api.png"></img>
## API Document

[GET] イベント情報を取得します

```
/event
```
レスポンス
```
{
  message: Get events successfully,
  events:  {
            "id": 1,
            "name": "京都大作戦",
            "tw_account": "MI_KYOTO",
            "image": "https://pbs.twimg.com/profile_images/1368759336034439170/aoIxfmNm_normal.jpg",
            "address": "京都府宇治市広野町八軒屋谷１",
            "event_start_date": "2021-07-03",
            "event_2_date": "2021-07-04",
            "event_3_date": "2021-07-10",
            "event_4_date": null,
            "event_last_date": "2021-07-11"
            },
}
```
[POST] イベント情報を登録します

```
/event
```
リクエスト
```
{
  "name": "event name",
  "tw_account": "EVENT_ACCOUNT",
  "image":"https://pbs.twimg.com/profile_images/〇〇〇.jpg",
  "address": "event address",
  "event_start_date":2021-08-30,
  "event_last_date":2021-08-31,
}
```
レスポンス
```
{
  "message": "Event created successfully"
}
```

[PUT] イベント情報を更新します

```
/event
```
リクエスト
```
{
  "name": "event update name",
  "tw_account": "EVENT_UPDATE_ACCOUNT",
  "image":"https://pbs.twimg.com/profile_images/〇〇〇.jpg",
  "address": event update address,
  "event_start_date":2021-09-20,
  "event_last_date":2021-09-21,
}
```
レスポンス
```
{
  "message": "Event updated successfully"
}
```

[GET]twitterアカウント検索
```
/event/search?keyword=FM802RADIOCRAZY
```
レスポンス
```
{
  "message": "Get account successfully",
  "account": [
  {
    "id": 93565243,
    "id_str": "93565243",
    "name": "FM802 RADIO CRAZY",
    "screen_name": "FM802RADIOCRAZY",
    "location": "大阪市北区天神橋筋二丁目／南森町",
    "description": "@FM802_PR が送るロック大忘年会「RADIO CRAZY」！2021年2月中旬延期検討中！お問合せはこちらでは受付ておりません。 #レディクレ #FM802 聴く⇨https://t.co/jA4CRwe663",
    "url": "https://t.co/CWTezNXqj7",
    "entities": {
    "url": {
    "urls": [
      {
    "url": "https://t.co/CWTezNXqj7",
    "expanded_url": "https://radiocrazy.fm",
    "display_url": "radiocrazy.fm",
    "indices": [
      0,
      23
    ],
    }
  ],
}…
```
[GET] イベント詳細データ取得
```
/event/5
```
レスポンス
```
{
  "message": "Get events successfully",
  "event": {
  "id": 5,
  "name": "FM802 RADIO CRAZY",
  "tw_account": "FM802RADIOCRAZY",
  "image": "https://pbs.twimg.com/profile_images/1324683656594481152/UsDXRqDY_normal.jpg",
  "address": "大阪府大阪市住之江区南港北1丁目5-102",
  "event_start_date": "2021-12-26",
  "event_2_date": null,
  "event_3_date": null,
  "event_4_date": null,
  "event_last_date": "2021-12-27"
  }
}
```
[POST]フォロー

[PUT]フォローしなおす

[DELETE]フォロー解除
```
/follow
```
リクエスト
```
{
  "event_id":5,
  "tw_account":"FM802RADIOCRAZY"
}
```
レスポンス
```
<!-- 登録 -->
{
  "message":"Followed successfully"
}
<!-- すでにデータがあり、削除されていれば再度フォロー -->
{
  "message":"Follow restored successfully"
}
<!-- すでに登録されていればフォロー解除 -->
{
  "message":"Follow deleted successfully"
}
```
[GET]タイムラインの取得
```
/tweet
```
レスポンス
```
"tweet": [
  {
    "id": 1,
    "tweet_id": "1412009306300370946",
    "name": "RUSH BALL",
    "image": "https://pbs.twimg.com/profile_images/1344910758719541248/MfcaWJ1N_normal.jpg",
    "text": "もう夏ですね いやはや",
    "url": "https://t.co/Ht8R6LEVDS",
    "updated_at": "2021-07-05T13:54:38.000000Z"
  },
```