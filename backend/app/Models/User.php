<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'user_id','prefecture_id','email','password','sex',
        'name','hobby','profile','image','created_at','updated_at'
    ];

    public function rooms()
    {
        return $this->belongsToMany('App\Http\Models\Room');
    }

    public function prefectures()
    {
        return $this->belongsTo('App\Http\Models\Prefecture');
    }
}
