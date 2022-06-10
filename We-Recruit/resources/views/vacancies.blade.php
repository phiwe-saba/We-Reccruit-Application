@extends('layouts.vac-layout')

@section('content')
    <form action="applicant" method="POST">
        @csrf
        <div class="container">
            <div class="vac-search">
                <div class="boxes">
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>Junior Software Developer <p>
                            </div>
                            <div class="subtitle">
                                <p>Information Technology</p>
                            </div>
                            <div class="location">
                                <p>Fulltime | Johannesburg</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>HR Intern</p>
                            </div>
                            <div class="subtitle">
                                <p>Human Resource</p>
                            </div>
                            <div class="location">
                                <p>Part time | Geminston</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>Data Analyst Intern</p>
                            </div>
                            <div class="subtitle">
                                <p>Information Technology</p>
                            </div>
                            <div class="location">
                                <p>Contract | Sandton</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>Cloud Developer</p>
                            </div>
                            <div class="subtitle">
                                <p>Information Technology</p>
                            </div>
                            <div class="location">
                                <p>Fulltime | Johannesburg</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>Cashier</p>
                            </div>
                            <div class="subtitle">
                                <p>Retail</p>
                            </div>
                            <div class="location">
                                <p>Fulltime | Johannesburg</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>Internal Auditor</p>
                            </div>
                            <div class="subtitle">
                                <p>Finance</p>
                            </div>
                            <div class="location">
                                <p>Fulltime | Cape Town</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                    <div class="box">
                        <a href="{{ url('applicant') }}">
                            <div class="title">
                                <p>Web Developer</p>
                            </div>
                            <div class="subtitle">
                                <p>Information Technology</p>
                            </div>
                            <div class="location">
                                <p>Contract | Johannesburg</p>
                            </div>
                            <div class="apply">
                                <button>Apply</button>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="signup">
                    <button>
                        <a href="{{ url('applicant') }}">Sign up</a>
                    </button>
                </div>
            </div>
        </div>
    </form>
@endsection