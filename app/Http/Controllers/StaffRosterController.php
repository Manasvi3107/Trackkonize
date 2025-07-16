<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaffRoster;
use App\Models\User;

class StaffRosterController extends Controller
{
    public function showRosterForm()
    {
        $employees = User::where('usertype', 'employee')->where('employee_status', 'active')->get(); // Assuming 'User' is your User model
       
        $rosters = StaffRoster::with('user')->get();

        return view('auth.staff_roaster', compact('employees','rosters'));
    }

    public function storeRoster(Request $request)
    {
        $validatedData = $request->validate([
            'employee_id' => 'required|exists:users,id',
            'shift_start_time' => 'required',
            'shift_end_time' => 'required',
            'day_of_working' => 'required',
        ]);

        StaffRoster::create($validatedData);

        return redirect()->back()->with('success', 'Staff roster added successfully');
    }
    
}
