<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>My Application</title>

    <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom CSS -->

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/dashboard">My Application</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/multi_day_tours">Multiday Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/day_tours">Day Tours</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/destinations">Place to Visit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blogs">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/thingstodo">thingstodo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/quotes">Quote</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/reviews">Reviews</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/resort">Resort</a>
                    </li>
                    <!-- Authentication Links -->
                    @if(Auth::check())
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        
                            <p>Welcome, {{ Auth::user()->name }}!</p>
                                    
                    
                        </a>
                        <ul class="dropdown-menu">
                        
                            <li><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a></li>
                        </ul>
                        </li>
                       @else
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://127.0.0.1:8000/register">Register</a>
                    </li>
                    @endif    
            </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        
    @yield('content')
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <p class="mb-0">&copy; 2024 My Application. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS and Popper.js -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 @yield('script') 
</body>
</html>
