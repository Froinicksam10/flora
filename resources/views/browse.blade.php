<!DOCTYPE html>
<html lang="en">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('logo1.png')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/icons/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <head>
        <title>Movie Viewing Site - @yield('title')</title>
    </head>
<body>

@section('header')
<header>
    <div class="container">
        <div class="logo">
            <a href="/"><img src="logo.png" alt="Movie" style="width:50px;"></a>
        </div>
        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="browse">Browse Movies</a></li>
                <li><a href="about">About Us</a></li>
                @guest
                         <li >
                             <a href="{{ route('login') }}">Login</a>
                            <li >
                             <a  href="{{ route('registration') }}">Register</a>
                         @else
                         <span >{{ auth()->user()->name }}</span>
                         <li >
                                <a  href="{{ route('logout') }}">Logout</a>
                            </li>
                         @endguest

            </ul>
        </nav>
    </div>
</header>
@show
<hr>

    <section class="browse-movies">
        <div class="container">
            <h2>Browse Movies</h2>
            <div class="movie-grid">
                <div class="movie">
                    <img src="movie1.jpg" alt="Movie 1">
                    <h3>Wanted</h3>
                </div>
                <div class="movie">
                    <img src="movie2.jpg" alt="Movie 2">
                    <h3>God Will Hunting</h3>
                </div>
                <div class="movie">
                    <img src="movie5.jpg" alt="Movie 2">
                    <h3>Reedeming Love</h3>
                </div>
                <div class="movie">
                    <img src="movie4.jpg" alt="Movie 2">
                    <h3>The Lost City</h3>
                </div>
                <!-- Add more movie items as needed -->
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
    <footer>
    <p>&copy; 2024 MovieWatcher. All rights reserved.</p>
</footer>

</body>
</html>
