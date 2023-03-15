<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;
    
    //user_idとのリレーション
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    
    
    //recordのsum_timeとのリレーション
    public function records()
    {
        return $this->hasMany(record::class);
    }
}
