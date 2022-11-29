<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;
    public function major(){
        return $this->belongsTo(Major::class,'class_id','id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
