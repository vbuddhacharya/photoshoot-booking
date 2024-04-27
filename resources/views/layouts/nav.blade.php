<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
</head>
<body>
    <nav class="navbar">
        <ul id="nvbr">
            {{-- <input type="checkbox" id="checkbox_toggle" />
            <label for="checkbox_toggle" class="hamburger">&#9776;</label> --}}
            <li class="right"><img src="{{asset('images/logo/logo3.png')}}" id="logo" style="width:100%; height:8vh"></li>            <span class="left">
            <li><a href="{{route('home')}}"><img src="{{asset('images/home2.png')}}">Home</a></li>
            <li><a href="{{route('gallery')}}" ><img src="{{asset('images/gallery2.png')}}">Gallery</a></li>
            <li><a href="{{route('services')}}"><img src="{{asset('images/services5.png')}}" style="width:25%">Services</a></li>
            @if(Auth::check() && Auth::user()->isAdmin==1)
                <li class="dropdown"><a href="/" class="dbutton"><img src="{{asset('images/user4.png')}}" style="width:30%; margin-right:-5px;">Admin</a>
                    <div class="drop-content">
                        <a href="{{route('admin.bookings')}}" id="colo">View Bookings</a>
                        <a href="{{route('admin.services')}}" id="colo">Modify prices</a>
                        <a href="{{route('user.logout')}}" id="colo">Logout</a>
                    </div>
            </li>
            @elseif(Auth::check() && Auth::user()->isAdmin==0)
                <li class="dropdown"><a href="javascript:void(0)" class="dbutton"><img src="{{asset('images/user4.png')}}" style="width:19%; margin-right:-5px; margin-top:-5px">{{Auth::user()->name}}</a>
                    <div class="drop-content">
                        <a href="{{route('user.edit')}}" id="colo">Edit Profile</a>
                        <a href="{{route('user.bookings')}}" id="colo">View Bookings</a>
                        <a href="{{route('user.logout')}}" id="colo">Logout</a>
                    </div>
                </li>
            @else
            <li><a href="{{route('login')}}"><img src="{{asset('images/login1.png')}}" style="width:17%; margin-right:2px;">Login/Register</a></li>
            @endif
            <li class="highlight"><a href="{{route('booking.date')}}"><img src="{{asset('images/book7.png')}}" style="width:20%">Book now</a></li>
            </span>
        </ul>
    </nav>
</body>
</html>