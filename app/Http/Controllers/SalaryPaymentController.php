<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveApplication;
use App\Models\SalaryPayment;

class SalaryPaymentController extends Controller
{
    public function showSalaryPaymentForm($id)
    {
        // Fetch the leave application based on the provided $id
        $leaveApplication = LeaveApplication::findOrFail($id);

        return view('masters.create', compact('leaveApplication'));
    }

    public function storeSalaryPayment(Request $request, $id)
    {
        // Fetch the leave application based on the provided $id
        $leaveApplication = LeaveApplication::findOrFail($id);

        // Create a new salary payment record and associate it with the leave application
        $salaryPayment = new SalaryPayment([
            'payment_name' => $request->input('payment_name'),
            'payment_method' => $request->input('payment_method'),
        ]);

        $leaveApplication->salaryPayment()->save($salaryPayment);

        return redirect()->back()->with('success', 'Salary payment added successfully');
    }
}
