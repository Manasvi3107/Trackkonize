<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffRoster extends Model
{
    use HasFactory;

    protected $fillable = ['employee_id', 'shift_start_time', 'shift_end_time', 'day_of_working'];

    public function user()
    {
        return $this->belongsTo(User::class, 'employee_id');
    }
    public function leave_related_user()
	{
		return $this->hasOne(User::class, 'id', 'employee_id');
	}
    public function LeaveApplication()
    {
        return $this->belongsTo(LeaveApplication::class ,'employee_id','no_of_days');
    }
}
