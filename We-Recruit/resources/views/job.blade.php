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
            <select name="type_id" id="type_id">
                @foreach($jobtype as $jobtype)
                    <option value="{{ $jobtype->id }}"> {{ $jobtype->type_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="location">Location:</label><br>
            <select name="location_id" id="location_id">
                @foreach($locations as $location)
                        <option value="{{ $location->id }}">{{ $location->location_name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Apply</button>
    </form>
@endsection