<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $table = 'guest';

    protected $fillable = [
        'G_FirstName',
        'G_LastName',
        'G_SDT',
        'G_Email',
        'G_CCCD',
        'G_Password',
        'G_Account',
        'Status',
    ];
}
