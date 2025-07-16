<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\userController;
use App\Models\User;
use App\Models\project;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   
    public function dashboard()
    {
        //return Auth::user();
        if(Auth::user()->usertype == 'Admin' || Auth::user()->usertype == 'Employee')
        {
        return view('auth.dashboard');
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

    public function darkMode()
    {
        return view('layouts.dark');
    }
    public function faq()
    {
        return view('auth.faq');
    }
   /* public function general()
    {
        
        
        //return view('auth.general');
            }*/
    public function emailcompose()
    {
        return view('auth.emailcompose');
    }
    public function emailinbox()
    {
        return view('auth.emailinbox');
    }
    public function emailread()
    {
        return view('auth.emailread');
    }
    public function calender()
    {
        return view('auth.calender');
    }
    public function contacts()
    {
        return view('auth.contacts');
    }
    public function task()
    {
        return view('auth.task');
    }
   // public function chat()
    //{
      //  return view('auth.chat');
    //}
    //public function videochat()
    //{
      //  return view('auth.videochat');
    //}
    public function todo()
    {
        return view('auth.todo');
    }
    public function userpfp()
    {
        return view('auth.userpfp');
    }
    
    public function boxlayout()
    {
        return view('auth.boxlayout');
    }
    public function forgetpass()
    {
        return view('auth.forgetpass');
    }
    public function leave()
    {
        return view('auth.leave');
    }
    public function createinvoice()
    {
        return view('auth.createinvoice');
    }
 
 }
