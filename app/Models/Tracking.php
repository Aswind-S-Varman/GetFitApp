<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Profile;

class Tracking extends Model
{
    use HasFactory;

    protected $fillable = [
        'track_id',
        'Activity',
        'Date',
        'Sets_Reps',
        'Duration',
    ];

    /** Access Profile data */
    public function tracking(){
        return $this->belongsTo('App\Models\Profile','track_id');
    }


}
