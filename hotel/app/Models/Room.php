<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    
    protected $table = 'payment';

    protected $fillable = [
        'R_Number',
        'RT_ID',
        'R_Available',
        'Status'
    ];
}
