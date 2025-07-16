<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Facades\Validator;
use Validator;
use App\Models\client;
use App\Mail\UserCreated;
use App\Mail\Userupdated;
use Illuminate\Support\Facades\Mail;
//use App\Models\project;


class clientController extends Controller
{
	public function createClient(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'company_name' => 'required',
			'company_contact' => 'required',
			'company_email' => 'required',
			'contact_person_name' => 'required',
			'contact_person_email' => 'required',
			'contact_person_number'	=> 'required'
		],[
			'company_name.required'=>'Company Name is required',
			'company_contact.required'=>'Company Contact is required',
			'company_email.required'=>'Company Email is required',
			'contact_person_name.required'=>'Contact person name is required',
			'contact_person_email.required'=>'Contact person email is required',
			'contact_person_number.required'=>'Contact person number is required',
		]);
		if ($validator->fails()) 
		{
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
        	$newclient = new client;
        	$newclient->company_name = $request->input('company_name');
        	$newclient->company_contact = $request->input('company_contact');
        	$newclient->company_email = $request->input('company_email');
        	$newclient->contact_person_name = $request->input('contact_person_name');
        	$newclient->contact_person_email = $request->input('contact_person_email');
        	$newclient->contact_person_number = $request->input('contact_person_number');
        	$newclient->save();

        	if($newclient->save())
        	{
				//Mail::to($request->input('company_email'))->send(new UserCreated($newclient));
        		return redirect()->back()->with('success', 'Client created successfully');
        	}
        	else
        	{
        		return redirect()->back()->with('failure', 'Failed to create client. Please try again.');
        	}
        }
	}

	public function clients()
	{
		$FetchData = client::get();
		return view('clients.clients')->with('clientsdata', $FetchData);
	}

	public function clientStatus(Request $request)
    {
    	//return $request->all();
		$clientid = $request->input('clientid');
		$clientstatus = $request->input('clientstatus');
        $client = client::find($clientid);
        
        if($client)
        {
        	$client->client_status = $clientstatus;
        	$client->save();
        }

        return redirect()->back();
    }

	public function clientDetails()		
	{
		$FetchData = client::get();
		return $FetchData;
        return view('clients')->with('clientsdata', $FetchData);
	}

	public function updateClient($clientID)
	{
		$FetchData = client::where('clientID',$clientID)->first();
    	return view('clients.updateClient')->with('updateClient', $FetchData);
	}

	public function updateClientDetails(Request $request)
	{
		if($request->input('company_contact') != '' || $request->input('company_email') != '' || $request->input('contact_person_name') != '' || $request->input('contact_person_number') != '')
    	{
    		$clientID = $request->input('client_id');
            $updateclient = client::where('clientID', $clientID)->first();
            //$updateclient->company_name = $request->input('company_name');
        	$updateclient->company_contact = $request->input('company_contact');
        	$updateclient->company_email = $request->input('company_email');
        	$updateclient->contact_person_name = $request->input('contact_person_name');
        	$updateclient->contact_person_email = $request->input('contact_person_email');
        	$updateclient->contact_person_number = $request->input('contact_person_number');
        	$updateclient->save();

        	if($updateclient->save())
        	{
				//Mail::to($request->input('company_email'))->send(new Userupdated($updateclient));
        		return redirect()->back()->with('success', 'Client updated successfully');
        	}
        	else
        	{
        		return redirect()->back()->with('failure', 'Failed to update client. Please try again.');
        	}
        }
    	else
    	{
    		return redirect()->back()->with('error', 'Please fill out all the star marked fields.');
    	}
	}
}