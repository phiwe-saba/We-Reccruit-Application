<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    public function list()
    {
        $departments = Department::all();
        return view('job', compact('departments'));
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'dep_name' => 'required',
            'job_type' => 'required',
            'location' => 'required'
        ]);

        Job::create($data);

        return back();
    }
}