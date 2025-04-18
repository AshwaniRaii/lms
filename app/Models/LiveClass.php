<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveClass extends Model
{
    use HasFactory;
    protected $table = 'live_classes';
    protected $fillable = ['batch_id', 'topic', 'google_meet_link', 'class_datetime', 'duration_minutes', 'status'];

    public function batch()
    {
        return $this->belongsTo(Batch::class);
    }

    public function recording()
    {
        return $this->hasOne(Recording::class);
    }

    // public function getDynamicStatusAttribute()
    // {
    //     $endTime = Carbon::parse($this->class_datetime)->addMinutes($this->duration_minutes);
    //     if (now()->greaterThanOrEqualTo($endTime)) {
    //         return 'Ended';
    //     } elseif (now()->greaterThanOrEqualTo(Carbon::parse($this->class_datetime))) {
    //         return 'Live';
    //     }
    //     return 'Scheduled';
    // }

    // public function isRecordingVisible()
    // {
    //     $endTime = Carbon::parse($this->class_datetime)->addMinutes($this->duration_minutes);
    //     return $this->recording && now()->greaterThanOrEqualTo($endTime->addMinutes(30));
    // }
}
