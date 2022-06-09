@extends('layouts.layout')

@section('content')
    <form action="applicant" method="POST">
        <div class="form-group pt-3">
            <label for="first_name">First name:</label>
            <input type="text" name="first_name" class="form-control">
        </div>

        <div class="form-group pt-3">
            <label for="last_name">Last name:</label>
            <input type="text" name="last_name" class="form-control">
        </div>

        <div class="form-group pt-3">
            <label for="id_number">Identity number:</label>
            <input type="text" name="id_number" class="form-control">
        </div>

        <div class="form-group pt-3">
            <label for="email">Email address:</label>
            <input type="text" name="email" class="form-control">
        </div>

        <div class="form-group pt-3">
            <label for="cell_number">Cell number:</label>
            <input type="text" name="cell_number" class="form-control">
        </div>
        @csrf
        <!---<div class="form-group pt-3">
            <label for="gender">Gender:</label>
            <select name="gender" id="gender" class="form-control">
                <option value="" disabled>Select gender</option>
                <option value="1">Female</option>
                <option value="0">Male</option>
                <option value="">Other</option>
            </select>
        </div>

        <div class="form-group pt-3">
            <label for="ethnicity">Ethnicity:</label>
            <select name="ethnicity" id="ethnicity" class="form-control">
                <option value="" disabled>Select ethnicity</option>
                <option value="1">African</option>
                <option value="0">Coloured</option>
                <option value="1">White</option>
            </select>
        </div>

        <div class="form-group pt-3">
            <label for="cv_upload">Upload cv:</label>
            <input type="file" class="form-control" id="cv_upload">
        </div>
        
        <div class="form-group pt-3">
            <input type="hidden" name="date_applied">
        </div>

        <div class="form-group pt-3">
            <input type="hidden" name="status" value="Applied">
        </div>-->

        <button type="submit" class="btn btn-primary">Apply</button>
    </form>
@endsection