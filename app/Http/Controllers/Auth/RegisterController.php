<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use  Illuminate\Http\Request;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function register()
    {
        return view('auth.register');
    }
    
   
    public function postregister(Request $request)
    {
        return $request->all();
        $validator = Validator::make($request->all(), [
			'firstname' => 'required',
			'lastname' => 'required',
            'username' => 'required',
            'email'	=> 'required',
            'password' => 'required',	
			'cpassword' => 'required',
        ],[
            'firstname.required'=>'First Name is required',
            'lastname.required'=>'Last Name is required',
            'username.required'=>'Username is required',
            'email.required'=>'Email Address is required',
            'password.required'=>'Password is required',
            'cpassword.required'=>'Confirm Password is required',
        ]);
        if ($validator->fails()) 
		{
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
        	$newuser = new User;
            $newuser->firstname = $request->input('firstname');
        	$newuser->lastname = $request->input('lastname');
        	$newuser->username = $request->input('username');
        	$newuser->email = $request->input('email');
            $newuser->password = $request->input('password');
			$newuser->cpassword = $request->input('cpassword');
        	$newuser->save();

        	if($newuser->save())
        	{
                return redirect('login')->withSuccess("Account has been created successfully."); 
        	}
        	else
        	{
        		return redirect()->back()->with('failure', 'Failed to create user. Please try again.');
        	}
        }
	}
     public function create(array $data)
    {
        return User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastrname'],
            'username' => $data['username'],
            'email' => $data['email'],  
            'password' => $data['password'],
            'cpassword' => $data['cpassword']

        ]);
    }    
    public function users()
	{
		$FetchData = User::get();
		return view('users.users')->with('usersdata', $FetchData);
	}
    public function showDetails()
	{
		$FetchData = Users::get();
		return $FetchData;
        return view('users')->with('usersdata', $FetchData);
	}

}
