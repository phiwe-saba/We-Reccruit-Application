@extends('layouts.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <title>We-Recruit | Home</title>
</head>
<body>
    <div class="content">
        <div class="header-content">
            <div class="container">
                <div class="showcase-main">
                    <div class="showcase">
                        <div class="content">
                            <h1>Land your next job with us!</h1>
                            <div class="showcase">
                                <div class="content">
                                    <p>Create | Upload | Apply</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="horizontal">
                    <hr>
                </div>

                <div id="layout">
                    <div class="headerpage">
                        <h2>Our Process</h2>
                    </div>
                    <div class="boxes">
                        <div class="box">
                            <img src="./images/match.webp" alt="display something">
                            <h3>Resume builder</h3>
                            <p>Upload your existing resume and get started in 2 mins, or build a new one from scratch. Keep all your information organized in your profile and create as many resumes as you want.</p>
                            
                        </div>
                        <div class="box">
                            <img src="./images/correct.png" alt="display something">
                            <h3>Resume score</h3>
                            <p>Get a score for every resume you create and personalized suggestions on how to improve. Optimize your resume and submit your next job application with confidence!</p>
                        </div>
                        <div class="box">
                            <img src="./images/job.webp" alt="display something">
                            <h3>Job match</h3>
                            <p>Save jobs and internships you want to apply to and keep them organized in one place. Get a match score for every job with suggestions on what to improve in your resume.</p>
                            
                        </div>
                    </div>
                    <div class="upload">
                        <a href="{{ url('applicant') }}">
                            <button type="submit">Upload</button>
                        </a>
                    </div>
                </div>
        </div>
    </div>
    
    
    <div class="section">
        <div class="main-content">
            <div class="mainbody">
                <h1>Jobs & Internships<img src="./images/content1.jpg"></h2>
                <p>Explore over one million jobs and internships that are updated daily. <br>Easily search, apply and start your career on We-Recruit’s job board.</p>
                <button><a href="{{ url('vacancies') }}">Find vacancies.</a></button>
            </div>
    
            <div class="blogmain">
                <h1><img src="./images/blog.png">Read our blog!</h2>
                <p>Sign-up to our blog to be updated on the latest jobs and newsletter</p>
                <button><a href="{{ url('applicant') }}">Join our blog!.</a></button>
            </div>
        </div>
    </div>
    </div>
    <footer>
        <p>We-Recruit Pty Ltd 2022 - Phiwe Saba</p>
    </footer>
</body>
</html>
@endsection