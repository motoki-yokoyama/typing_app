<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Records extends Model
{
    use HasFactory;
    
    //user_idとのリレーション
    public function user()
    {
        return $this->belongsTo(user::class);
    }
    
    //resultのtimeとのリレーション
    public function result()
    {
        return $this->belongsTo(result::class);
    }
}
