
<!DOCTYPE html>
<html>
<head>
    <title>Dating App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            background: linear-gradient(to right, #ff6b6b, #ff8e8e);
        }
        .profile-card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark gradient-custom">
        <div class="container">
            <a class="navbar-brand" href="/">Dating App</a>
            <div class="navbar-nav ms-auto">
                @guest
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @else
                    <a class="nav-link" href="{{ route('profile.edit') }}">Profile</a>
                    <a class="nav-link" href="{{ route('matches.match') }}">Matches</a>
                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                        <button class="nav-link border-0 bg-transparent">Logout</button>
                        
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
