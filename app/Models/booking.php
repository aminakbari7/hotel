<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'room_id',
        'start',
        'end',
        'totalprice',
        'day',
        'status',
        'isactive',
    ];   
    

}
