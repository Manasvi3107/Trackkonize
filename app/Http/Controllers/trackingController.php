<?php
namespace App\Http\Controllers;
use App\Models\LeaveApplication;
use Illuminate\Http\Request;
class trackingController extends Controller
{
    public function tracking()
    {
        return view('auth.tracking');
    }
}