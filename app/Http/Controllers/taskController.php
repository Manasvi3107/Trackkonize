<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Facades\Validator;
use Validator;

use App\Models\task;
use App\Models\project;
use App\Models\User;

class taskController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function addTask(Request $request)
    {
        $validator = Validator::make($request->all(), [
            //'projectID' => 'required',
            'task_name' => 'required',
        ],[
            //'projectID.required'=>'Please select a projectID',
            'task_name.required'=>'Task Name is required',
        ]);

        if ($validator->fails()) 
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else
        {
            //return $request->all();
            $newtask = new Task;
            $newtask->projectID = $request->input('project');
            $newtask->task_name = $request->input('task_name');
            $newtask->task_assign_user_id = $request->input('task_assign_user_id');
            $newtask->task_details = $request->input('task_details');
            $newtask->task_start_date = $request->input('task_start_date');
            $newtask->task_end_date = $request->input('task_end_date');
            $newtask->task_status = $request->input('task_status');
            $newtask->save();

            if($newtask->save())
            {
                return redirect()->back()->with('success', 'Task created successfully');
            }
            else
            {
                return redirect()->route('tasks.tasks')->back()->with('failure', 'Failed to create task. Please try again.');
            }
        }
    }
    public function taskStatus(Request $request)
    {
        //return $request->all();
		$taskid = $request->input('taskid');
		$taskstatus = $request->input('taskstatus');
        $task = task::find($taskid);
        
        if($task)
        {
        	$task->task_status = $taskstatus;
        	$task->save();
        }

        return redirect()->back();
    }

    public function tasks()
    {
    	$FetchData = task::with('task_related_project')->with('task_related_user')->get();
        //return $FetchData;
        $getproject = project::where('project_status', 'active')->get();
        $getuser = User::where('usertype', 'employee')->where('employee_status', 'active')->get();
        //return $getuser;
        $with = array(
            'FetchData'=>$FetchData,
            'getproject'=>$getproject,
            'getuser'=>$getuser
        );
        return view('tasks.tasks')->with($with);
    }

    public function taskDetails()
    {
        $FetchData = task::get();
        return $FetchData;
        return view('tasks')->with('taskdata', $FetchData);
    }
}