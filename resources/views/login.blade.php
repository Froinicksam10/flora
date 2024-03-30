
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
@section('login')
@if($message = Session::get('success'))

<div class="alert alert-info">
{{ $message }}
</div>

@endif
<div class="form-container">
    <form class="signup-form" action="{{ route('sample.validate_login') }}" method="post">
    @csrf
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            @if($errors->has('email'))
							<span class="text-danger">{{ $errors->first('email') }}</span>
						@endif
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" >
            @if($errors->has('password'))
							<span class="text-danger">{{ $errors->first('password') }}</span>
						@endif
        </div>
        <button type="submit">Sign In</button>
        <a href="registration">Dont have an Account?Register</a>
    </form>
</div>
@show

<footer>
    <div class="container">
    <footer>
    <p>&copy; 2024 MovieWatcher. All rights reserved.</p>
</footer>

</body>
</html>
