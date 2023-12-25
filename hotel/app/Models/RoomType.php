<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;
    
    protected $table = 'roomtype';

    protected $fillable = [
        'RT_DES',
        'RT_NAME',
        'RT_Cost',
        'RT_SmokeFriendly',
        'Status',
        'R_Area',
        'RtDes1'
    ];
}
