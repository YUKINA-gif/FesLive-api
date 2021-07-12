<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Weather;
use App\Models\Follow;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'twitter_account',
        'image',
        'address',
        'event_start_date',
        'event_2_date',
        'event_3_date',
        'event_4_date',
        'event_last_date',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function follow()
    {
        return $this->belongsTo(Follow::class);
    }

    public function weather()
    {
        return $this->hasMany(Weather::class);
    }
}
