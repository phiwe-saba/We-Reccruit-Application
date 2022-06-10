<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/vac-style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="content">
        <header class="header">
            <div class="header-container">
                <div class="row align-items-center justify-content-between">
                    <div class="logo">
                        <a href="index.html">We-Recruit</a>
                    </div>
                    <button type="button" class="nav-toggler">
                        <span></span>
                    </button>
                    <nav class="nav">
                        <ul>
                            <li><a href="{{ url('/') }}" >Home</a></li>
                            <li><a href="{{ url('vacancies') }}" class="active">Vacancies</a></li>
                            <li><a href="">About</a></li>
                            <li><a href="">Contact</a></li>
                            <li><a href="">Blog</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>

        <div class="vac-showcase">
            <h2>Find your next job or internship</h2>
            <p>Explore available jobs</p>
        </div>

        <div class="search-bar">
            <div class="content-bar">
                <input type="text" placeholder="Job title">
                <select class="location">
                    <option selected="">Select location</option>
                    <option value="1">Gauteng</option>
                    <option value="2">Cape Town</option>
                    <option value="3">Durban</option>
                    <option value="3">Port Elizabeth</option>
                    <option value="3">Northern Cape</option>
                </select>
                <select class="job-type">
                    <option selected="">Select job type</option>
                    <option value="1">Contract</option>
                    <option value="2">Permanant</option>
                    <option value="3">Temporary</option>
                </select>
                <button type="submit">Search</button>
            </div>
        </div>
    </div>
    
    <div class="container">
        @yield('content')
    </div>
</body>
</html>