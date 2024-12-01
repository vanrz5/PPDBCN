<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SMK Citra Negara</title>
</head>
<body>
    <div class="wrapper">
        <nav class="nav">
            <div class="nav-logo"></div>
            <div class="nav-menu" id="navMenu">
                <ul>
                    <li><a href="{{ url('/') }}" class="link">Back</a></li>
                </ul>
            </div>
            <div class="nav-button">
                <a href="{{ route('login') }}" class="btn white-btn">Sign In</a>
                <a href="{{ route('register') }}" class="btn">Sign Up</a>
            </div>
            <div class="nav-menu-btn">
                <i class="bx bx-menu" onclick="myMenuFunction()"></i>
            </div>
        </nav>

        <div class="content">
            @yield('content')
        </div>
    </div>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
