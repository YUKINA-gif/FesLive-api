<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Event;
use Illuminate\Database\Eloquent\SoftDeletes;

class Follow extends Model
{
    use HasFactory;
    use SoftDeletes;

    const DELETED_AT = "is_follow";

    protected $fillable = [
        'event_id',
    ];

    public function event()
    {
        return $this->hasMany(Event::class);
    }
}
