<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Salary;

class Employee extends Model
{
    use HasFactory;
    
    protected $table = 'employee';

    protected $fillable = [
        'E_FirstName',
        'E_LastName',
        'E_Designation',
        'E_ContactNumber',
        'E_Email',
        'E_JoinDate',
        'E_Address',
        'DE_ID',
        'H_ID',
        'E_Username',
        'E_Password',
        'Status',
    ];

    public function salaries()
    {
        return $this->hasMany('App\Models\Salary', 'E_ID', 'E_ID');
    }
    
}
