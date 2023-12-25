<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payment';

    protected $fillable = [
        'P_Status',
        'P_Type',
        'PaidDate',
        'P_Amount',
        'B_ID',
        'Status',
    ];
}
