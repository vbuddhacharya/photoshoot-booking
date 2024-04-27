<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://fonts.googleapis.com/css?family=Anek Telugu' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Cormorant Upright' rel='stylesheet'> 
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
    <link rel = "icon" href = "{{asset('images/logo/logo4.png')}}" type = "image/png">
    <title>Log In</title>
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
        <div class="login-form">
            <form action="{{route('user.verify')}}" method="POST">
            @csrf
            
                <div class="login-title">Login</div>
                <label for="user">
                    <span class="name">Username</span>
                    <input type="text" name="user" id="user">
                </label>
                <label for="pass">
                    <span class="name">Password</span>
                    <input type="password" name="password" id="pass">
                </label>
                <div class="buttons">
                    <button type="submit">Log In</button>
                    {{-- <button type="reset">Cancel</button> --}}
                </div>
                <div class="instead">Register? <a href="{{route('user.register')}}">Click Here</a></div>
            
            </form>
        </div>
    </div>
    @include('layouts.footer')
</body>
</html>