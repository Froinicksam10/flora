
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
    <section class="features">
        <div class="container">
            <h2>Features</h2>
            <div class="feature-item">
                <i class="fas fa-film"></i>
                <h3>Largest Collection of Movies</h3>
                <p>Explore a vast library of movies across various genres.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-desktop"></i>
                <h3>High-Quality Streaming</h3>
                <p>Enjoy seamless streaming with high-quality video playback.</p>
            </div>
            <div class="feature-item">
                <i class="fas fa-heart"></i>
                <h3>Personalized Recommendations</h3>
                <p>Get personalized movie recommendations based on your preferences.</p>
            </div>
            <!-- Add more feature items as needed -->
        </div>
    </section>

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
