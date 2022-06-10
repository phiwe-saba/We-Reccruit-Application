<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('css/app-layout.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<header class="header">
    <div class="header-container">
        <div class="row align-items-center justify-content-between">
            <div class="logo">
                <a href="{{ url('/') }}">We-Recruit</a>
            </div>
            <button type="button" class="nav-toggler">
                <span></span>
            </button>
            <nav class="nav">
                <ul>
                    <li><a href="{{ url ('/') }}" class="active">Home</a></li>
                    <li><a href="{{ url('vacancies') }}">Vacancies</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Blog</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>

<div class="container">
    @yield('content')
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>