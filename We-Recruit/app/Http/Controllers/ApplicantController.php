<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantController extends Controller
{
    public function index(){
        return view('applicant');
    }

    public function store(){
        $data = request()->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'id_number' => 'required',
            'email' => 'required|email',
            'cell_number' => 'required'
        ]);

        Applicant::create($data);

        return back();
    }
}
