<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalaryPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'payment_name',
        'payment_method',
    ];

    public function leaveApplication()
    {
        return $this->belongsTo(LeaveApplication::class);
    }
}
