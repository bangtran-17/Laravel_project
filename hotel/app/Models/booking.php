<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;

    protected $table = 'booking';

    protected $fillable = [
        'B_DATE',
        'B_StayDuration',
        'B_CheckingDate',
        'B_CheckoutDate',
        'B_Amount',
        'E_ID',
        'G_ID',
        'D_ID',
        'B_Status',
        'Rid',
        'B_Cost'
    ];
}
