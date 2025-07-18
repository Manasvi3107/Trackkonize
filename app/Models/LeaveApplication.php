<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaveApplication extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'leave_type',
        'leave_status',
        'from_date',
        'to_date',
        'no_of_days',
        'reason',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function salaryPayment()
    {
        return $this->hasOne(SalaryPayment::class);
    }
}
