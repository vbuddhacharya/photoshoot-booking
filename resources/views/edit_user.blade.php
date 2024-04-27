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
    <title>Edit Profile</title>
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
            <div class="login-title">Edit Profile</div>
            <form action="{{route('user.update')}}" method="post">
                @csrf
                <label for="name">
                    <span class="name">Name</span>
                    <input type="text" name="name" value="{{Auth::user()->name}}" disabled>
                </label>
                
                <label for="email">
                    <span class="name">Email</span>
                    <input type="email" name="email" value="{{Auth::user()->email}}" required>
                </label>
                <label for="pass">
                    <span class="name">New Password</span>
                    <input type="password" name="password" id="pass" minlength="8" maxlength="20">
                </label>
                <label for="cont">
                    <span class="name">Contact</span>
                    <input type="text" name="contact" id="contact" placeholder="Alternative Phone Number" minlength="10" maxlength="10" pattern="98+[0-9]{8}|97+[0-9]{8}" title="Phone number starts from 98 or 97" value="{{Auth::user()->contact}}" required>
                </label>
                <div class="buttons">
                    <button type="Submit">Confirm</button>
                    {{--  --}}
                </div>
                <div class="buttons1">
                    <button type="reset">Cancel</button>
                    {{-- <button type="reset">Cancel</button> --}}
                </div>
                </form>
        </div>
    </div>
    
</body>
</html>