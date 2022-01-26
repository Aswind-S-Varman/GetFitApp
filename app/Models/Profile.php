<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tracking;

class Profile extends Model
{
    use HasFactory;

    protected $fillable =[
        'profile_id', 'Gender', 'Weight','Height', 'Muscle_Focus', 'Health_Problem', 'Purpose', 'Location',
    ];

    /** Access User data */
    public function user(){
        return $this->belongsTo('App\Models\User','profile_id');
    }

     /** Access Tracking data */
     public function track(){
        return $this->hasMany(Tracking::class, 'track_id', 'id','Activity');
    }

}
