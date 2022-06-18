@extends('layouts.app-layout')

@section('content')
    <div class="container">
        <form action="applicant" method="POST">
            @csrf
            <div class=form-group>
                <label for="first_name">First name:</label><br>
                <input type="text" name="first_name" id="first_name">
            </div>
            
            <div class="form-group">
                <label for="last_name">Last name:</label><br>
                <input type="text" name="last_name" id="last_name">
            </div>
            
            <div class="form-group">
                <label for="id_number">Identity number:</label><br>
                <input type="text" name="id_number" id="id_number">
            </div>
            
            <div class="form-group">
                <label for="email">Email address:</label><br>
                <input type="text" name="email" id="email" >
            </div>
        
            <div class="form-group">
                <label for="cell_number">Cell number:</label><br>
                <input type="text" name="cell_number" id="cell_number">
            </div>

            <div class="form-group">
                <label for="gender">Gender:</label><br>
                <select name="gender" id="gender">
                    <option value="" disabled>Select gender</option>
                    <option value="Female" >Female</option>
                    <option value="Male">Male</option>
                    <option value="Other">Other</option>
                </select>
            </div>
        
            <div class="form-group">
                <label for="ethnicity">Ethnicity:</label><br>
                <select name="civil_status">
                    <option value="" disabled></option>
                    <option value="African" {{ 'selected' }}>African</option>
                    <option value="Indian" {{ 'selected' }}>Indian</option>
                    <option value="Coloured" {{ 'selected' }}>Coloured</option>
                    <option value="White" {{ 'selected' }}>White</option>
                 </select>
            </div>
        
            <div class="form-group">
                <label for="cv_upload">Upload cv:</label><br>
                <input type="file" id="cv_upload">
            </div>
        
            <input type="hidden" name="date_applied">
        
            <input type="hidden" name="status" value="Applied">

            <button type="submit" class="btn btn-primary">Apply</button>
        </form>
    </div>
@endsection