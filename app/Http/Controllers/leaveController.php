<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
//use Illuminate\Http\Facades\Validator;
use Validator;

use App\Models\task;
use App\Models\project;
use App\Models\User;

class leaveController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
   
}