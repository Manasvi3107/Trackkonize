<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Facades\Validator;
use Validator;

use App\Models\client;
use App\Models\project;


class projectController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function createProject()
    {
        $getclients = client::where('client_status', 'active')->get();

        $with = array(
            'getclients'=>$getclients
        );

        return view('projects.createProject')->with($with);
    }

    public function addProject(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            'client' => 'required',
            'project_name' => 'required',
            'project_duration' => 'required',
            'project_type' => 'required',

        ],[
            'client.required'=>'Please select a client',
            'project_name.required'=>'Project Name is required',
            'project_duration.required'=>'Project Duration is required',
            'project_type.required'=>'Project Type is required'
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $newproject = new Project;
            $newproject->clientID = $request->input('client');
            $newproject->project_name = $request->input('project_name');
            $newproject->project_duration = $request->input('project_duration');
            $newproject->project_type = $request->input('project_type');
            $newproject->project_description = $request->input('project_description');
            $newproject->project_status = $request->input('project_status');
            $newproject->save();

            if($newproject->save())
            {
                return redirect()->back()->with('success', 'Project created successfully');
            }
            else
            {
                return redirect()->back()->with('failure', 'Failed to create project. Please try again.');
            }
        }
    }

    public function UpdateProject(Request $request)
    {        
        $validator = Validator::make($request->all(), [
            //'clientID' => 'required',
            'project_name' => 'required',
            'project_duration' => 'required',
            'project_type' => 'required',

        ],[
           // 'clientID.required'=>'Client ID is required',
            'project_name.required'=>'Project Name is required',
            'project_duration.required'=>'Project Duration is required',
            'project_type.required'=>'Project Type is required'
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            $projectID = $request->input('projectID');
            $updateproject = project::where('projectID', $projectID)->first();
            $updateproject->clientID = $request->input('clientID');
            $updateproject->project_name = $request->input('project_name');
            $updateproject->project_duration = $request->input('project_duration');
            $updateproject->project_type = $request->input('project_type');
            $updateproject->project_description = $request->input('project_description');
            $updateproject->save();

            if($updateproject->save())
            {
                return redirect()->back()->with('success', 'Project updated successfully');
            }
            else
            {
                return redirect()->back()->with('failure', 'Failed to update project. Please try again.');
            }
        }
    }

    public function projects()
    {
        $FetchData = project::with('project_related_client')->get();
        //return $FetchData;
        //$FetchData = project::get();
        $getclients = client::where('client_status', 'active')->get();
        $with = array(
            'FetchData'=>$FetchData,
            'getclients'=>$getclients
        );
        return view('projects.projects')->with($with);
       // return view('projects.projects')->with('projectdata', $FetchData);
    }

    public function projectDetails()
    {
        $FetchData = project::get();
        return $FetchData;
        return view('projects')->with('projectdata', $FetchData);
    }
    public function projectStatus(Request $request)
    {
		$projectid = $request->input('projectid');
		$projectstatus = $request->input('projectstatus');
        $project = project::find($projectid);
        
        if($project)
        {
        	$project->project_status = $projectstatus;
        	$project->save();
        }

        return redirect()->back();
    }
}