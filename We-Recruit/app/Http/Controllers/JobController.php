<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Department;
use App\Models\Location;
use App\Models\JobType;

class JobController extends Controller
{
    public function list()
    {
        $departments = Department::all();
        $jobtype = JobType::all();
        $locations = Location::all(); 
        
        return view('job', compact('departments', 'jobtype', 'locations'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'department_id' => 'required',
            'type_id' => 'required',
            'location_id' => 'required'
        ]);

        Job::create($data);

        return back();
    }
}
