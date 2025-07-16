<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Facades\Validator;
use Validator;
use File;
use App\Mail\UserCreated;
use App\Mail\Userupdated;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
//use App\Http\Controllers\Users;


class userController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function createUser(Request $request)
	{
		//return $request->all();
		$validator = Validator::make($request->all(), [
			'username' => 'required',
			'usertype' => 'required',
			'rolename' => 'required',
			'firstname' => 'required',
			'lastname' => 'required',
			'email'	=> 'required',
			//'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
			'phonenumber' => 'required',
			'city' => 'required',
			'country' => 'required',
			'postal_code' => 'required',
			'bankname' => 'required',  
			'account_number' => 'required',
			'account_type' => 'required',
			'name_in_bank' => 'required',
			'ifsc_code' => 'required',
			'password' => 'required',	
			'cpassword' => 'required',
		],[
            'username.required'=>'Username is required',
            'usertype.required'=>'User Type is required',
            'rolename.required'=>'Role Name is required',
            'firstname.required'=>'First Name is required',
            'lastname.required'=>'Last Name is required',
            'email.required'=>'Email is required',

			//'picture.required' => 'Profile picture is required',
			'picture.image' => 'The file must be an image',
			'picture.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg',
			'picture.max' => 'The image may not be greater than 2048 kilobytes',

            'phonenumber.required'=>'Phone Number is required',
            'city.required'=>'City is required',
            'country.required'=>'Country is required',
            'postal_code.required'=>'Postal Code is required',
            'bankname.required'=>'Bank Name is required',
            'account_number.required'=>'Account Number is required',
            'account_type.required'=>'Account Type is required',
            'name_in_bank.required'=>'Name in Bank is required',
            'ifsc_code.required'=>'ifsc Code is required',
            'password.required'=>'Password is required',
			'cpassword.required'=>'CPassword is required',
        ]);
		//$fileName = time() . '.' . $request->picture->extension();
        //$request->picture->storeAs('public/uploads', $fileName);

		if ($validator->fails()) 
		{
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
        	$newuser = new User;
        	$newuser->username = $request->input('username');
        	$newuser->usertype = $request->input('usertype');
        	$newuser->rolename = $request->input('rolename');
        	$newuser->firstname = $request->input('firstname');
        	$newuser->lastname = $request->input('lastname');
        	$newuser->gender = $request->input('gender');
        	$newuser->employeetype = $request->input('employeetype');
        	$newuser->employeepayout = $request->input('employeepayout');
        	$newuser->hourlyrate_usd = $request->input('hourlyrate_usd');
        	$newuser->hourlyrate_inr = $request->input('hourlyrate_inr');
        	$newuser->hourlyrate_aud = $request->input('hourlyrate_aud');
        	$newuser->address = $request->input('address');
        	$newuser->email = $request->input('email');
			
			// Handle image upload
			//$fileName = time() . '.' . $request->picture->getClientOriginalExtension();
			//$request->picture->storeAs('public/uploads', $fileName);
			//$newuser->picture = $fileName;
			
			$fileName = time().'.'.$request->profilepicture->getClientOriginalExtension();
				 $request->profilepicture->move(public_path().'/assets/uploads/users/', $fileName);
				$newuser->picture = 'uploads/users/'.$fileName;
        	$newuser->birthdate = $request->input('birthdate');
        	$newuser->additional_contact_person = $request->input('alternatecontactperson');
        	$newuser->additional_contact_person_number = $request->input('alternatecontact');
        	$newuser->phonenumber = $request->input('phonenumber');
        	$newuser->city = $request->input('city');
        	$newuser->country = $request->input('country');
        	$newuser->postal_code = $request->input('postal_code');
        	$newuser->bankname = $request->input('bankname');
        	$newuser->account_number = $request->input('account_number');
        	$newuser->account_type = $request->input('account_type');
        	$newuser->name_in_bank = $request->input('name_in_bank');
        	$newuser->ifsc_code = $request->input('ifsc_code');
        	$newuser->password = $request->input('password');
			$newuser->cpassword = $request->input('cpassword');
        	$newuser->save();

        	if($newuser->save())
        	{
				// Send email to the user
			//	Mail::to($request->input('email'))->send(new UserCreated($newuser));

        		return redirect()->back()->with('success', 'User created successfully');
        	}
        	else
        	{
        		return redirect()->back()->with('failure', 'Failed to create user. Please try again.');
        	}
        }
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

	public function userStatus(Request $request)
    {
		$userid = $request->input('userid');
		$userstatus = $request->input('userstatus');
        $user = User::find($userid);
        
        if($user)
        {
        	$user->employee_status = $userstatus;
        	$user->save();
        }

        return redirect()->back();
    }

	public function userprofile()
   	{
		return view('users.userprofile');
   	}

    public function updateUser($id)
    {
    	$FetchData = User::where('id',$id)->first();
    	return view('users.updateUser')->with('updateUser', $FetchData);
    }
	public function useredit()
    {
		//$FetchData = User::where('id',$id)->first();
        return view('users.useredit');//->with('useredit', $FetchData);
    }

	public function usereditDetails(Request $request)
    {
    	return $request->all();
    	if($request->input('firstname') != '' || $request->input('lastname') != '' || $request->input('email') != '' || $request->input('phonenumber') != '' || $request->input('birthdate') != '' || $request->input('usertype') != '' || $request->input('role_name') != '' || $request->input('country') != '' || $request->input('city') != '' || $request->input('postal_code') != '' || $request->input('bankname') != '' || $request->input('account_number') != '' || $request->input('account_type') != '' || $request->input('name_in_bank') != '' || $request->input('ifsc_code') != '')
    	{
    		//echo "Ho";
        	//return $request->all();
        	$id = $request->input('user_id');
            $useredit = User::where('id', $id)->first();

			// Handle file upload
			return $request->input('profilepicture');
			if ($request->hasFile('profilepicture')) 
			{
				//$fileName = time() . '.' . $request->profilepicture->getClientOriginalExtension();
				//$request->profilepicture->storeAs('public/uploads', $fileName);
				$//request->profilepicture->move('public/uploads/useravatar/', $filename);
				//$useredit->picture = $fileName;
				$fileName = time().'.'.$request->profilepicture->extension();
				 $request->profilepicture->move(public_path().'/assets/uploads/users/', $fileName);
				$useredit->picture = 'uploads/users/'.$fileName;
			}

        	$useredit->usertype = $request->input('usertype');
        	$useredit->rolename = $request->input('role_name');
        	$useredit->firstname = $request->input('firstname');
        	$useredit->lastname = $request->input('lastname');
        	$useredit->gender = $request->input('gender');
        	$useredit->employeetype = $request->input('employeetype');
        	$useredit->employeepayout = $request->input('employeepayout');
        	$useredit->address = $request->input('address');
        	$useredit->email = $request->input('email');
			$useredit->picture = $request->input('profilepicture');
        	$useredit->birthdate = $request->input('birthdate');
        	
        	$useredit->additional_contact_person = $request->input('additional_contact_person');
        	$useredit->additional_contact_person_number = $request->input('additional_contact_person_number');
        	$useredit->phonenumber = $request->input('phonenumber');
        	$useredit->city = $request->input('city');
        	$useredit->country = $request->input('country');
        	$useredit->postal_code = $request->input('postal_code');
        	$useredit->bankname = $request->input('bankname');
        	$useredit->account_number = $request->input('account_number');
        	$useredit->account_type = $request->input('account_type');
        	$useredit->name_in_bank = $request->input('name_in_bank');
        	$useredit->ifsc_code = $request->input('ifsc_code');
        	$useredit->save();

        	if($useredit->save())
        	{ 
				//Mail::to($request->input('email'))->send(new Userupdated($useredit));
        		return redirect()->back()->with('success', 'User updated successfully');
        	}
        	else
        	{
        		return redirect()->back()->with('failure', 'Failed to update user. Please try again.');
        	}
    	}
    	else
    	{
    		return redirect()->back()->with('error', 'Please fill out all the star marked fields.');
    	}
		
		
	}


    public function updateUserDetails(Request $request)
    {
    	//return $request->all();
    	if($request->input('firstname') != '' || $request->input('lastname') != '' || $request->input('email') != '' || $request->input('phonenumber') != '' || $request->input('birthdate') != '' || $request->input('usertype') != '' || $request->input('role_name') != '' || $request->input('country') != '' || $request->input('city') != '' || $request->input('postal_code') != '' || $request->input('bankname') != '' || $request->input('account_number') != '' || $request->input('account_type') != '' || $request->input('name_in_bank') != '' || $request->input('ifsc_code') != '')
    	{
    		//echo "Ho";
        	//return $request->all();
        	$id = $request->input('user_id');
            $updateuser = User::where('id', $id)->first();

			// Handle file upload
			//return public_path();
		//	$fileName = time().'.'.$request->profilepicture->extension();
				// $request->profilepicture->move(public_path().'/assets/uploads/users/', $fileName);
				//$updateuser->picture = 'uploads/users/'.$fileName;
        	$updateuser->usertype = $request->input('usertype');
        	$updateuser->rolename = $request->input('role_name');
        	$updateuser->firstname = $request->input('firstname');
        	$updateuser->lastname = $request->input('lastname');
        	$updateuser->gender = $request->input('gender');
        	$updateuser->employeetype = $request->input('employeetype');
        	$updateuser->employeepayout = $request->input('employeepayout');
        	$updateuser->address = $request->input('address');
        	$updateuser->email = $request->input('email');
        	$updateuser->birthdate = $request->input('birthdate');
        	
        	$updateuser->additional_contact_person = $request->input('additional_contact_person');
        	$updateuser->additional_contact_person_number = $request->input('additional_contact_person_number');
        	$updateuser->phonenumber = $request->input('phonenumber');
        	$updateuser->city = $request->input('city');
        	$updateuser->country = $request->input('country');
        	$updateuser->postal_code = $request->input('postal_code');
        	$updateuser->bankname = $request->input('bankname');
        	$updateuser->account_number = $request->input('account_number');
        	$updateuser->account_type = $request->input('account_type');
        	$updateuser->name_in_bank = $request->input('name_in_bank');
        	$updateuser->ifsc_code = $request->input('ifsc_code');
        	$updateuser->save();

        	if($updateuser->save())
        	{ 
				//Mail::to($request->input('email'))->send(new Userupdated($updateuser));
        		return redirect()->back()->with('success', 'User updated successfully');
        	}
        	else
        	{
        		return redirect()->back()->with('failure', 'Failed to update user. Please try again.');
        	}
    	}
    	else
    	{
    		return redirect()->back()->with('error', 'Please fill out all the star marked fields.');
    	}
		
		
	}

}