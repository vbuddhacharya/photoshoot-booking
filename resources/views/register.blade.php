<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <title>Sign Up</title>
</head>
<body>
    @include('layouts.nav')
    <div class="container">
        <div class="details">
            <img src="{{asset('/images/gallery/w7b.jpg')}}" alt="">
            <div class="cent">
                <div class="confirm-img"><img src="{{asset('/images/logo/logo3.png')}}" alt=""></div>
            </div>
        </div>
        <form action="{{route('user.signup')}}" method="POST">
            @csrf
            <div class="login-form">
                <div class="login-title">Register</div>
                <label for="name">
                    <span class="name">Full Name</span>
                    <input type="text" name="name" id="name" required>
                </label>
                <label for="user">
                    <span class="name">Username</span>
                    <input type="text" name="user" id="user" required>
                </label>
                <label for="email">
                    <span class="name">Email</span>
                    <input type="text" name="email" id="email" required>
                </label>
                <label for="pass">
                    <span class="name">Password</span>
                    <input type="password" name="password" id="pass" minlength="8" maxlength="20" required>
                </label>
                <label for="cont">
                    <span class="name">Contact</span>
                    <input type="text" name="contact" id="cont" required minlength="10" maxlength="10" pattern="98+[0-9]{8}|97+[0-9]{8}" title="Phone number starts from 98 or 97">
                </label>
                <div class="buttons">
                    <button type="submit">Register</button>
                    {{-- <button type="reset">Cancel</button> --}}
                </div>
                
                <div class="instead">Log in? <a href="{{route('login')}}">Click Here</a></div>
            </div>
        </form>
    </div>
    @include('layouts.footer')
</body>
</html>