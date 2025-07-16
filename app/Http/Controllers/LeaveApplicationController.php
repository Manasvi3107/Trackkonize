<?php

namespace App\Http\Controllers;
use App\Models\LeaveApplication;

use Illuminate\Http\Request;

class LeaveApplicationController extends Controller
{
    public function store(Request $request)
    {
        // Validation can be added as needed

        LeaveApplication::create([
            'user_id' => auth()->user()->id, // assuming the user is logged in
            //'day_of_working' => $request->input('day_of_working'),
            'leave_type' => $request->input('leave_type'),
            'leave_status' => $request->input('leave_status'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
            'no_of_days' => $request->input('no_of_days'),
            'reason' => $request->input('reason'),
        ]);

        return redirect()->route('leave')->with('success', 'Leave application submitted successfully.');
    }

    public function showLeaveApplications()
    {
        $leaveApplications = LeaveApplication::all();

        return view('auth.leave', compact('leaveApplications'));
    }
}
