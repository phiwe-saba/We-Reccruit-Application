@extends('layouts.layout')

@section('content')
    <form action="job" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label><br>
            <input type="text" name="title" id="title" >
        </div>
        
        <div class="form-group">
            <label for="dep_name">Department Name:</label><br>
            <select name="department_id" id="department_id">
                @foreach($departments as $department)
                    <option value="{{ $department->id }}"> {{ $department->dep_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="job_type">Job Type:</label><br>
            <select name="job_type" id="job_type">
                <option value="" disabled>Select job type</option>
                <option value="1">Contract</option>
                <option value="0">Permanant</option>
                <option value="">Temporary</option>
            </select>
        </div>

        <div class="form-group">
            <label for="location">:</label><br>
            <select name="location" id="location">
                <option value="" disabled>Select location</option>
                <option value="">Gauteng</option>
                <option value="">Port Elizabeth</option>
                <option value="">Durban</option>
                <option value="">Kimberly</option>
                <option value="">Mpumalanga</option>
                <option value="">North West</option>
                <option value="">Western Cape</option>
            </select>
        </div>

        <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">

        <button type="submit" class="btn btn-primary">Apply</button>
    </form>
@endsection