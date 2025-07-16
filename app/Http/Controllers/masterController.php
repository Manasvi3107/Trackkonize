<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LeaveApplication;
use Auth;
use App\Http\Controllers\userController;
use App\Models\User;
use App\Models\project;
use App\Models\StaffRoster;


class masterController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function master()
    {
        if(Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employee')
        {
            return view('masters.masters');   
        }
        else
        {
            $FetchData = User::get();
            $FetchData1 = project::get();
            // return $FetchData;
            // return view('projects')->with( $FetchData);
            $with = array(
            'usersdata'=>$FetchData,
            'projectdata'=>$FetchData1
            );
            return view('auth.general')->with($with);
        }  
    }
    public function masters()
    {
        $leaveApplications = LeaveApplication::all();
        $staffroster = StaffRoster::get();

        $with = array(
            'leaveApplications'=>$leaveApplications,
            'staffroster'=>$staffroster
        );
        return view('masters.masterpayment')->with($with);   
    }
   
 }
